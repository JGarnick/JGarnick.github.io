<?php

use Illuminate\Database\Seeder;
use Ixudra\Curl\Facades\Curl;
use App\Models\Spell;

//This class is used to initially parse data returned from the DND 5e API. I used it to populate the Database, and then used a different library to create a non-api seeder based on this data

class SpellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = json_decode(Curl::to("http://www.dnd5eapi.co/api/spells")->get());

        foreach ($response->results as $top_data) {
            $spell = json_decode(Curl::to($top_data->url)->get());

            unset($spell->_id);
            unset($spell->index);
            unset($spell->subclasses);
            unset($spell->url);
            if (isset($spell->material)) {
                $spell->material = str_replace("â€™", "'", $spell->material);
            }
            $spell->desc = str_replace("â€™", "'", $spell->desc);
            $spell->school = $spell->school->name;
            foreach ($spell->classes as $i => $class) {
                $spell->classes[$i] = $class->name;
            }

            $to_save = json_decode(json_encode($spell), true);
            if (!isset($to_save["material"])) {
                $to_save["material"] = 0;
            }
            if (!isset($to_save["higher_level"])) {
                $to_save["higher_level"] = 0;
            }else{
                $to_save["higher_level"] = str_replace("â€™", "'", $spell->higher_level);
            }
            foreach ($to_save as $i => $prop) {
                if (gettype($prop) == "array") {
                    $to_save[$i] = serialize($to_save[$i]);
                }
            }
            $saved = Spell::create($to_save);
        }

    }
}
