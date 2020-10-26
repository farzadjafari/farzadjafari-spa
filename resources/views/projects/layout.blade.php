@extends('layouts.master')

@section('main-class', 'projects')

@section('main')
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h1>@yield('title', 'My Products')</h1>
                </div>

                @yield('content')
            </div>
        </div>
    </section>
@stop
