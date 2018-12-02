<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spell;

class SearchController extends Controller
{
    function index()
    {
        $not_used = ["created_at", "updated_at", "id"];
        $hide_rows = ["desc", "page", "ritual", "material", "classes", "higher_level"];
        
        return view("search/search")->with("spells", Spell::all())
                                    ->with("not_used", $not_used)
                                    ->with("hide_rows", $hide_rows);
    }
}
