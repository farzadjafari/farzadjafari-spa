@extends('layouts.master')
@section('main-class', 'homepage')

@section('main')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <section>
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-8 text-left mb-4">
                    <h1>Hi! I'm <span class="text-dark">Farzad Jafari</span>.</h1>

                    <h2>A Product Manager and a PHP Web Developer based in Boston, MA, US.</h2>
                </div>

                <div class="col-12 col-md-4 text-left">
                    <img src="{{ asset('/img/farzad-photo-v2.jpg') }}">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div class="row card px-2 py-4 p-md-5 w-100">
                <div class="col-12 text-left">
                    <h3>I am really interested in meeting new people.
                        Technology, economy, business, social life, politics and so on.
                        There are always cool topics to discuss about. </h3>
                </div>

                <div class="col-12 text-left">
                    <h3>Drop me a message to sit and chat. I am also grateful to take helpful advises from
                        professionals.</h3>

                    <form action="{{ action('ContactsController@store') }}" method="POST" class="my-5">
                        @csrf

                        <div class="form-group row mb-4">
                            <div class="col-md-6">
                                <input id="contact-name" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" placeholder="Your name...">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-6">
                                <input id="contact-email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" placeholder="Your E-mail...">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-6">
                                <textarea id="contact-message"
                                          class="form-control @error('message') is-invalid @enderror" name="message"
                                          required autocomplete="message" placeholder="Your message..."></textarea>

                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if(env('GOOGLE_RECAPTCHA_KEY'))
                            <div class="my-3 g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                        @endif

                        <button type="submit" class="btn btn-primary">Submit</button>

                        @include('partials.message')
                        @include('partials.error')
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Find me on social media.</h4>
                </div>

                <div class="col-12 text-left mb-4 d-flex">
                    <a href="https://www.linkedin.com/in/farzad-jafari-8318006a/" target="_blank" class="d-flex align-items-end pr-5">
                        <i data-feather="linkedin" class="mr-2" style="color:#0e76a8;"></i>
                        LinkeIn
                    </a>

                    <a href="https://github.com/farzadjafari" target="_blank" class="d-flex align-items-end px-5">
                        <i data-feather="github" class="mr-2" style="color: black"></i>
                        Github
                    </a>

                    <a href="https://twitter.com/farzadjf" target="_blank" class="d-flex align-items-end px-5">
                        <i data-feather="twitter" class="mr-2" style="color: #00acee;"></i>
                        Twitter
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
