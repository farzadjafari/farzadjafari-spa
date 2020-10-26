<div class="card d-flex flex-col flex-md-row w-100 mb-4">
    @include('blog.partials.featured-image')

    <div class="card-body" style="flex: 1;">
        <a href="{{ route('blog.show', ['slug'=>$post->slug]) }}" class="d-flex flex-column h-100">
            <h3>{{ $post->title }}</h3>

            <div class="text-muted mb-2">{{ $post->excerpt }}</div>

            <div class="text-left mb-2 mt-auto">
                <small class="d-block text-muted">
                    {{ \Carbon\Carbon::parse($post->publish_date)->diffForHumans() }}
                </small>
            </div>
        </a>


    </div>
</div>
