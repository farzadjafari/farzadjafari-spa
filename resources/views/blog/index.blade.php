@extends('layouts.master')

@section('main-class', 'Blog')

@section('main')
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h1>Blog</h1>
                </div>

                <div class="col-12">
                    @forelse($posts as $post)
                        @include('blog.partials.card')
                    @empty
                        There is no blog published yet!
                    @endforelse

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
@stop
