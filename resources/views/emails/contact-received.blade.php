@component('mail::layout')

    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            My website farzadjafari.com
        @endcomponent
    @endslot


    I have a new message from a viewer.
    @component('mail::panel')
        **Name:** {{ $contact->name }}<br>
        **Email address:** {{ $contact->email }}<br>
        **Message:**
        <br>{{ $contact->message }}<br>
    @endcomponent


    @slot('footer')
        @component('mail::footer')
            farzadjafari.com - Don't miss any opportunities. Be Social Risk Taker.
        @endcomponent
    @endslot

@endcomponent
