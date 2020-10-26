@if(session()->has('message'))
    <div class="alert alert-success mt-24">
        {{ session()->get('message') }}
    </div>
@endif
