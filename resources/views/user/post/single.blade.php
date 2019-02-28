@extends('user.layouts.master')

@section('title', $post->title)
@section('head')
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c77a4379d977100118db7b8&product=sticky-share-buttons' async='async'></script>
    {!! $post->style !!}
@endsection

@section('content')


    <div class="breadcrumbs-area breadcrumbs-area--dark">
        <div class="container">
            <div class="breadcrumbs">
                <span>
                  <a href="{{route('home')}}">Home</a>
                </span>
                <span class="separetor">-</span>
                <span class="current">{{$post->title}}</span>
            </div>
        </div>
    </div><!--//breadcrumbs area end-->

    <section class="has-sidebar u-padding-tb-60 u-gray-bg">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-lg-8 content-wrapper">

                    <div class="m-post-content m-post-content--van">
                        <div class="post-top">
                            <h1 class="post-title">{{$post->title}}</h1>
                            <div class="post-meta">
                                <div class="item">
                                    <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</time>
                                </div>
                                {{--<div class="item">--}}
                                    {{--<a href="#disqus_thread"><i class="fa fa-comments"></i></a>--}}
                                {{--</div>--}}
                                <div class="item">
                                    <ul class="categories">
                                        @foreach($post->categories as $category)
                                            <li><i class="fa fa-folder-open"></i><a href="{{route('category.single', $category->slug)}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="entry-content">
                            <p>
                                <img class="aligncenter u-radius-3" src="{{asset('uploads/media/'.$post->media->getMedia('featured'))}}" alt="{{$post->title}}">
                                <small>Aenean luctus mauris ut risus semper tincidunt.</small>

                            </p>
                            {!! $post->content !!}
                        </div>

                        <div class="post-tags u-margin-t-40">
                            <h6>Tags :</h6>
                            <div class="tags-wrap">
                                @foreach($post->tags as $tag)
                                    <a class="cat-world" href="#"><i class="fa fa-tag" aria-hidden="true"></i>{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="posts-box2 u-margin-t-40 u-padding-b-10">
                        {{--<div class="posts-box2__top">--}}
                            {{--<h4 class="posts-box2__top__title font-weight-normal"><span>25 Comments Yet</span></h4>--}}
                        {{--</div>--}}

                        <div class="comments-box">
                            <div id="disqus_thread"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 side-bar sidebar--right u-md-down-margin-t-40">
                    <div class="side-bar__inner is_stuck" data-sticky_column>
                        <div class="widget widget--title-box single-cat">
                            <div class="widget__title">
                                <h4>Explore More</h4>
                            </div>
                            <ul class="posts-wrap">
                                @foreach($related_post as $r_post)
                                <li>
                                    <figure>
                                        <a href="{{route('post.single', $r_post->slug)}}"><img src="{{asset('uploads/media/'.$r_post->media->getMedia('small'))}}" alt="{{$post->title}}"></a>
                                    </figure>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <time datetime="{{$r_post->created_at}}">{{\Carbon\Carbon::parse($r_post->created_at)->toFormattedDateString()}}  </time>
                                        </div>
                                        <h6 class="post-title">
                                            <a href="{{route('post.single', $r_post->slug)}}">
                                                {!! \Illuminate\Support\Str::words($r_post->title, 8, '....') !!}
                                            </a>
                                        </h6>

                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="widget widget--title-box opinion">
                            <div class="widget__title">
                                <h4>Opinions</h4>
                            </div>
                            <ul class="o-lists">

                                <li>
                                    <div class="num"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00">Sept. 20, 2018  </time>
                                        </div>
                                        <h6 class="post-title">
                                            <a href="#">
                                                The easiest way to own the london
                                                Bohemian The new york Look
                                            </a>
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="num"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00">Sept. 20, 2018  </time>
                                        </div>
                                        <h6 class="post-title">
                                            <a href="#">
                                                The easiest way to own the london
                                                Bohemian The new york Look
                                            </a>
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="num"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00">Sept. 20, 2018  </time>
                                        </div>
                                        <h6 class="post-title">
                                            <a href="#">
                                                The easiest way to own the london
                                                Bohemian The new york Look
                                            </a>
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="num"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00">Sept. 20, 2018  </time>
                                        </div>
                                        <h6 class="post-title">
                                            <a href="#">
                                                The easiest way to own the london
                                                Bohemian The new york Look
                                            </a>
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="num"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00">Sept. 20, 2018  </time>
                                        </div>
                                        <h6 class="post-title">
                                            <a href="#">
                                                The easiest way to own the london
                                                Bohemian The new york Look
                                            </a>
                                        </h6>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <div class="widget widget--title-box post-categoris">
                            <div class="widget__title">
                                <h4>Categories </h4>
                            </div>
                            <div class="post-categoris__wrap">
                                <p>Your email address will not be this published. Required fields are News Today.</p>
                                <button type="button" class="cat-ctrl" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select Categories <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu w-categoris">
                                    <a class="dropdown-item" href="#">Politics News</a>
                                    <a class="dropdown-item" href="#">World News</a>
                                    <a class="dropdown-item" href="#">Feature News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <div class="sharethis-inline-share-buttons"></div>
    <script>


        var disqus_config = function () {
        this.page.url = '{{route('post.single', $post->slug)}}';  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = '{{$post->slug}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://batterybyte-com-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <script id="dsq-count-scr" src="//batterybyte-com-1.disqus.com/count.js" async></script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection