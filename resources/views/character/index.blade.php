@extends('layouts._layout')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-xs-12">
			<h1>Characters</h1>
			<hr class="spacer-small" />
			<table id="character-table" class="">
				<thead>
					<tr>
						<th>Name</th>
						<th>Race</th>
						<th>Class</th>
						<th>Level</th>
					</tr>
				</thead>
				<tbody>
				@foreach($characters AS $character)
					<tr>
						<td><a href="{{route('character.show', $character->id)}}">{{$character->name}}</a></td>
						<td>{{$character->race->name}}</td>
						<td>{{$character->char_class->name}}</td>
						<td>{{$character->level}}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
    </div>
</div>
@endsection