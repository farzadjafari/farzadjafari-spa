@extends('layouts.master')

@section('main')
    @if($post->featured_image)
        <div class="blog-banner"
             style="background: url('{{ $post->featured_image }}') no-repeat center; background-size:cover;  min-height: 30rem">
        </div>
    @endif

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h1>{{ $post->title }}</h1>
                </div>

                <div class="col-12 text-left">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </section>
@stop
