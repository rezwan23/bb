@extends('user.layouts.master')

@section('title', 'Home')

@section('content')
    <section class="has-sidebar u-margin-t-40">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-lg-8 col-xl-9 content-wrapper">
                    <div data-sticky_column>
                        <div class="posts-box2 u-padding-b-0">
                            <div class="posts-box2__top">
                                <h3><span>Feature Posts</span></h3>
                            </div>
                            <div class="posts-list-big-first row">
                                @foreach($posts as $post)
                                    @if($loop->index==0)
                                    <article class="col-sm-6 col-xl-4">
                                        <div class="post-item">
                                            <figure>
                                                <a href="{{route('post.single', $post->slug)}}"><img src="{{asset('uploads/media/'.$post->media->getMedia('featured_thumb'))}}" alt="{{$post->media->title}}"></a>
                                            </figure>
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <time datetime="{{$post->created_at}}">{{\Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}  </time>
                                                </div>
                                                <h5><a href="{{route('post.single', $post->slug)}}">{!! \Illuminate\Support\Str::words($post->title, 10,'....')  !!}</a></h5>
                                            </div>
                                        </div>
                                    </article>
                                    @else
                                    <article class="col-sm-6 col-xl-4">
                                        <div class="post-item">
                                            <figure>
                                                <a href="{{route('post.single', $post->slug)}}"><img src="{{asset('uploads/media/'.$post->media->getMedia('thumb'))}}" alt="{{$post->media->title}}"></a>
                                            </figure>
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <time datetime="{{$post->created_at}}">{{\Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}  </time>
                                                </div>
                                                <h5><a href="{{route('post.single', $post->slug)}}">{!! \Illuminate\Support\Str::words($post->title, 10,'....')  !!}</a></h5>
                                                <p class="post-excerpt">
                                                    {!! \Illuminate\Support\Str::words($post->content, 13,'....')  !!}
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-3 side-bar sidebar--right u-md-down-margin-t-40 d-none d-lg-block">
                    <div class="side-bar__inner" data-sticky_column>
                        <div class="widget widget--title-box">
                            <div class="widget__title">
                                <h4>Stay Connected</h4>
                            </div>

                            <div class="social-connect u-padding-t-30">
                                <ul class="social--redius social--color">
                                    <li><a class="social__facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="social__dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a class="social__google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="social__linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="social__twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="social__instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="social__vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a class="social__soundcloud" href="#"><i class="fa fa-soundcloud"></i></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="widget widget--title-box newsletter-two">
                            <div class="widget__title">
                                <h4>Newsletter</h4>
                            </div>
                            <div class="newsletter-box">
                                <p>Your email address will not be this published. Required fields are News Today.</p>
                                <form action="#">
                                    <input type="email" placeholder="Email address">
                                    <button><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection