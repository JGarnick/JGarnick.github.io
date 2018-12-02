<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use App\Services\CharacterService;

class CharacterController extends Controller
{
	
	public function __construct(CharacterService $characterService)
	{
		$this->characterService = $characterService;
	}
	
    public function index()
	{
		$characters = Character::where('user_id', Auth::user()->id)->get();
		return view('character.index', ['characters' => $characters]);
	}
	
	public function create()
	{		
		return view('character.create', $this->characterService->create());
	}
	
	public function show($id)
	{
		return view('character.show', $this->characterService->show($id));
	}
	
	public function update($id, Request $request)
	{
		dd($request->all());
		$character = Character::find($id);
		return view('character.show', ['character' => $character]);
	}
	
	public function store(Request $request)
	{
		dd($request->all());
	}
}
