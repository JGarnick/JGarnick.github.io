<?php

use Illuminate\Database\Seeder;

class AbilitiesSeeder extends Seeder
{
    //Name, Description, level req
    private $racial_abilities = [
        [
            "name" => "Hellish Resistance",
            "Description" => "You have resistance to fire damage",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        //Bonus will be an array of spell IDs
        [
            "name" => "Infernal Legacy",
            "Description" => "You know the thaumaturgy cantrip. Once you reach 3rd level, you can cast the hellish rebuke spell once per day as a 2nd-level spell. Once you reach 5th level, you can also cast the darkness spell once per day. Charisma is your spellcasting ability for these spells.",
            "adds_bonus" => true,
            "bonus_type" => "spell",
            "bonus_id" => [/* thaumaturgy ID, hellish rebuke ID, darkness ID */ ],
            "level_req" => 1
        ],
        [
            "name" => "Menacing",
            "Description" => "You gain proficiency in the Intimidation skill",
            "adds_bonus" => true,
            "bonus_type" => "skill",
            "bonus_id" => 16,
            "level_req" => 1
        ],
        [
            "name" => "Relentless Endurance",
            "Description" => "When you are reduced to 0 hit points but not killed outirhgt, you can drop to 1 hit point instead. You can't use this feature again until you finish a long rest.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        [
            "name" => "Savage Attacks",
            "Description" => "When you score a critical hit with a melee weapon attack, you can roll one of the weapon's damage dice one additional time and add it to the extra damage of the critical hit.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        [
            "name" => "Fey Ancestry",
            "Description" => "You have advantage on saving throws against being charmed, and magic can't put you to sleep.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        [
            "name" => "Skill Versatility",
            "Description" => "You gain proficiency in two skills of your choice.",
            "adds_bonus" => true,
            "bonus_type" => "skill",
            "bonus_id" => [19, 19],
            "level_req" => 1
        ],
        [
            "name" => "Gnome Cunning",
            "Description" => "You have advantage on all Intelligence, Wisdom, and Charisma saving throws against magic.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        [
            "name" => "Natural Illusionist",
            "Description" => "You know minor illusion cantrip. Intelligence is your spellcasting ability for it.",
            "adds_bonus" => true,
            "bonus_type" => "spell",
            "bonus_id" => [/* ID of minor illusion */ ],
            "level_req" => 1
        ],
        [
            "name" => "Speak with Small Beasts",
            "Description" => "Through sounds and gestures, you can communicate simple ideas with Small or smaller beasts. Forest gnomes love animals and often keep squirrels,badgers, rabbits, moles, woodpeckers, and other creatures as beloved pets.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        [
            "name" => "Artificer's Lore",
            "Description" => "Whenever you make an Intelligence (History) check related to magic items, alchemical objects, or technological devices, you can add twice your proficiency bonus, instead of any proficiency bonus you normally apply.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
        [
            "name" => "Tinker",
            "Description" => "You have proficiency with artisan's tools (tinker's tools). Using those tools, you can spend 1 hour and 10gp worth of materials to construct a Tiny clockwork device (AC 5, 1hp). The device ceases to function after 24 hours (unless you spend 1 hour repairing it to keep the device functioning), or when you use your action to dismantle it. You can have up to three such devices active at a time.
              When you create a device, choose one of the following options:
              
              Clockwork Toy: This toy is a clockwork animal, monster, or person, such as a frog, mouse, bird, dragon, or soldier. When placed on the ground, the toy moves 5 feet    across the ground on each of your turns in a random direction. It makes noises as appropriate to the creature it represents.
              Fire Starter: The device produces miniature flame, which you can use to light a candle, torch, or campfire. Using the device requires your action.
              Music Box: When opened, this music box plays a single song at a moderate volume. The box stops playing when it reaches the song's end or when it is closed.",
            "adds_bonus" => true,
            "bonus_type" => "tool",
            "bonus_id" => [/* ID of tinker's tools */ ],
            "level_req" => 1
        ],
        [
            "name" => "Draconic Ancestry",
            "Description" => "You have draconic ancestry. Choose one type of dragon from the Draconic Ancestry table. Your breath weapon and damage resistance or determined by the dragon type, as shown in the table.",
            "adds_bonus" => false,
            "bonus_type" => null,
            "bonus_id" => null,
            "level_req" => 1
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
