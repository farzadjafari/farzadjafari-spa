@extends('projects.layout')

@section('content')
    @foreach($projects as $project)
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
            <div class="card">
                <a href="{{ (is_null($project->why) ? $project->link : action('ProjectsController@show', ['project'=>$project]))  }}"
                @if(is_null($project->why)) target="_blank" @endif>
                    <img src="{{ asset("/img/$project->slug.png") }}" class="card-img-top" alt="{{ $project->slug }}"
                         title="{{ $project->slug }}">

                    <div class="card-body">
                        <h2 class="card-title h3 font-weight-bold">{{ $project->name }}</h2>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
@stop
