@extends('layouts._layout')

@section('content')
<div class="container-fluid">
	<div class="row" id="vue-2"></div>
	<div class="row" id="vue-1">
		<hr class="spacer small" />
		<form class="clearfix" action="{{route('character.store')}}" method="POST">
			{{csrf_field()}}
			<div class="col-xs-12 col-md-3 form-group">
				<label class="form-label" for="name">Character Name</label>
				<input v-model="character.name" class="form-control form-input" type="text" name="name" />
			</div>

			{{--<div class="" id="character-inputs">
				<div><label>Level</label>
				<input name="level" :value="character.level" />
				<label>Name</label>
				<input name="name" :value="player_name" />
				<label>Race</label>
				<input name="race" :value="race" />
				<label>Subrace</label>
				<input name="subrace" :value="subrace" /></div>
				<div><label>Class</label>
				<input name="class" :value="char_class" />
				<label>HP Max</label>
				<input name="hp_max" :value="character.hp_max" />
				<label>HP Current</label>
				<input name="hp_current" :value="character.hp_current" /></div>
				<div><label>Speed</label>
				<input name="speed" :value="character.speed" />
				<label>Darkvision</label>
				<input name="darkvision" :value="character.darkvision" />
				<label>Passive Perception</label>
				<input name="passive_perception" :value="passive_perception" />
				<label>AC</label>
				<input name="ac" :value="character.ac" /></div>
				<div><label>Prof Bonus</label>
				<input name="proficiency_bonus" :value="proficiency_bonus" />
				<span v-for="(value, index) in ability_scores">
					<label>@{{value.abbr}}</label>
					<input data-type="ability-score" :name="value.full_name | lowercase" :value="ability_scores[index].amount" />
				</span>
				<span v-for="(value, index) in char_skills" >
					<label>@{{value.name}}</label>
					<input data-type="skill" :name="value.name" :value="char_skills[index].bonus"/>
				</span>
				<span v-for="(value, index) in saving_throws" >
					<label>@{{value.name}} save</label>
					<input data-type="save" :name="value.name" :value="skills[index].total"/>
				</span>
				</div>
			</div>--}}
			<div class="col-xs-offset-11 col-xs-1">
				<input type="submit" value="Save" />
			</div>
		</form>
		<div class="col-xs-6">
			@include('character.partials._left')
		</div>
		<div class="col-xs-6 right section">
			@include('character.partials._right')
		</div>
		
	</div>
	<hr class="spacer small" />
	
</div>
<script>

	var character			= @json($character);
	character.name			= "Test";
	var race 				= '{{$character->race->name}}';
	var char_class 			= '{{$character->char_class->name}}';
	character.speed 		= '{{$character->speed()}}';
	var passive_perception 	= '{{$character->passive_perception()}}';
	character.ac 			= '{{$character->getArmorClass()}}';
	var proficiency_bonus	= '{{$character->prof_bonus()}}';
	@if(is_null($character->race->darkvision))
		character.darkvision 		= 'No';
	@else
		character.darkvision 		= '{{$character->race->darkvision}}ft';
	@endif
	var saving_throws		= @json($character->getSavingThrows());
	var ability_scores		= @json($ability_scores);
	var	race_data			= @json($race_data);
	var	class_data			= @json($class_data);
	var classes				= @json($classes);
	var allSkills			= @json($allSkills);
	var char_skills			= @json($char_skills);

</script>
@endsection
