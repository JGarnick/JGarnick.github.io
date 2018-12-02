@extends('layouts._layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
				
                <div class="panel-body text-center">
                    <div><a @if(Auth::user()->characters->count() < 1) disabled="true" onClick="event.preventDefault();" @endif href="{{route('character.index')}}" class="btn btn-primary button-section">My Characters</a></div>
					<hr class="spacer-small" />
                    <div><a href="{{route('character.create')}}" class="btn btn-primary button-section">New Character</a></div>
					<hr class="spacer-small" />
                    <div><a disabled="true" onClick="event.preventDefault();" class="btn btn-primary button-section">Campaign</a></div>
                    <hr class="spacer-small" />
                    <div><a href="{{ route('search') }}" class="btn btn-primary button-section">Search</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection