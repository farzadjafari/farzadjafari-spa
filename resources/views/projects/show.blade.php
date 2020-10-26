@extends('projects.layout')

@section('content')
    <div class="col-12 text-left">
        <h2>
            {{ $project->name }}
            <a href="{{ $project->link }}" target="_blank">
                <i data-feather="external-link" class="mr-2"></i>
            </a>
        </h2>
    </div>

    <div class="col-12 text-left">
        <div class="content-wrapper project">
            <h3>Why?</h3>
            {!! $project->why !!}

            <h3>How?</h3>
            {!! $project->how !!}

            <h3>What?</h3>
            {!! $project->what !!}

            <h3>Challenges!<small>*</small></h3>
            {!! $project->challenge !!}
        </div>
    </div>

    @include('projects.partials.why-challenge')
@stop
