@extends('layouts._layout')

@section('content')
<div id="app" class="container-fluid">
	<div class="row">
		<div class="col-xs-12">			
			<h1> @{{name}}</h1>			
		</div>
		<div class="col-xs-12">
			<form class="form-horizontal clearfix" action="{{route('character.update', $character->id)}}" method="POST">
				<div class="col-xs-offset-11 col-xs-1">
					<input type="submit" value="Save" />
				</div>
				<div class="col-xs-6">
					@include('character.partials._left')
				</div>
				<div class="col-xs-6 right section">
					@include('character.partials._right')
				</div>
				
			</form>
		</div>
	</div>
</div> 
<script>
	
	var name = '{{$character->name}}';
	var race = '{{$character->race->name}}';
	var char_class = '{{$character->class->name}}';
	var subrace = '{{$character->subrace}}';
	var strength = '{{$character->strength}}';
	var dexterity = '{{$character->dexterity}}';
	var constitution = '{{$character->constitution}}';
</script>        
@endsection