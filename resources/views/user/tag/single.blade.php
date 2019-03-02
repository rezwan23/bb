@extends('user.layouts.master')
@section('title', $tag->name)
@section('content')
    <section class="u-margin-t-40 u-margin-b-40">
        <div class="container">
            <div class="posts-box2 u-padding-b-0">
                <div class="posts-box2__top">
                    <h3><span>{{$tag->name}}</span></h3>
                </div>

                <div class="posts-list-one-half row">
                    @foreach($posts as $post)
                    <article class="col-lg-3">
                        <div class="post-item">
                            <figure>
                                <a href="{{route('post.single', $post->slug)}}"><img src="{{asset('uploads/media/'.$post->media->getMedia('thumb'))}}" alt="{{$post->title}}"></a>
                            </figure>
                            <div class="post-content">
                                <div class="post-meta">
                                    <time datetime="{{$post->created_at}}"> {{\carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}  </time>
                                </div>
                                <h5><a href="{{route('post.single', $post->slug)}}">{!! \Illuminate\Support\Str::words($post->title, 10, '....') !!}</a></h5>
                                <p class="post-excerpt">
                                    {!! \Illuminate\Support\Str::words($post->content, 13, '....') !!}
                                </p>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

@endsection