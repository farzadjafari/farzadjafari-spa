<a href="{{ route('blog.show', ['slug'=>$post->slug]) }}"
   class="card-aside-column w-100 featured-image"
   @if($post->featured_image)
   style="background-image: url({{$post->featured_image}}); background-size:cover; min-height: 25rem; flex:1"
   @else
   style="background: lightgrey; min-height: 25rem; flex: 1;"
    @endif
>
</a>
