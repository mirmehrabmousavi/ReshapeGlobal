@extends('front.layout.app')

@section('content')
    <section>
        <div class="view">
            <img alt class="bg" src="/front/images/slider/banner-1.jpg" /><img alt class="bg" src="/front/images/slider/banner-2.jpg" />
            <div class="content half-size colors-a">
                <div class="container">
                    <h2>Es<span class="highlight">tate</span></h2>
                    <p class="title">Es<span class="highlight">tate</span></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="view">
            <div class="content small-top-padding colors-e background-solid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($estates as $val)
                            {{--Start Estate Post--}}
                            <div class="row post">
                                @if($val->id % 2)
                                <div class="col-md-3 post-meta">
                                </div>
                                @endif
                                <div class="col-md-9">
                                    <div class="post-body background-10-b">
                                        <div class="post-image">
                                            <div class="slider">
                                                <div><img class="fluid-width" alt="{{$val->title}}" src="{{asset($val->image)}}"/></div>
                                           </div>
                                        </div>
                                        <h3><a class="page-transition" href="blog-single-2.html">{{$val->title}}</a></h3>
                                        <p>{{ Str::limit($val->desc, 175) }}</p>
                                        <p><a href="blog-single-2.html" class="post-read-more page-transition">Read more...</a></p>
                                        <div class="post-tags styled-list">
                                            <i class="fa fa-tags"></i>
                                            <ul>
                                                <li><a class="page-transition" href="#">Design</a></li>
                                                <li><a class="page-transition" href="#">Branding</a></li>
                                                <li><a class="page-transition" href="#">Typography</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @if($val->id % 2)

                                @else
                                    <div class="col-md-3 post-meta">
                                    </div>
                                @endif
                            </div>
                            {{--End Estate Post--}}
                            @endforeach
                            {{--Start Estate Post--}}
                            <div class="row post">
                                <div class="col-md-9">
                                    <div class="post-body background-10-b">
                                        <div class="post-image">
                                            <div class="slider">
                                                <div><img class="fluid-width" alt="Slide 1" src="/front/images/placeholders/848x433-0.jpg" /></div>
                                                <div><img class="fluid-width" alt="Slide 2" src="/front/images/placeholders/848x433-1.jpg" /></div>
                                                <div><img class="fluid-width" alt="Slide 3" src="/front/images/placeholders/848x433-2.jpg" /></div>
                                            </div>
                                        </div>
                                        <h3><a class="page-transition" href="blog-single-2.html">And Post <span class="highlight">with Slider</span></a></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                        </p>
                                        <p><a href="blog-single-2.html" class="post-read-more page-transition">Read more...</a></p>
                                        <div class="post-tags styled-list">
                                            <i class="fa fa-tags"></i>
                                            <ul>
                                                <li><a class="page-transition" href="#">Design</a></li>
                                                <li><a class="page-transition" href="#">Branding</a></li>
                                                <li><a class="page-transition" href="#">Typography</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 post-meta float-right">
                                 {{--   <div class="post-day">15</div>
                                    <div class="post-month">Feb 2015</div>
                                    <div class="post-author"><i class="fa fa-user"></i> By Admin</div>
                                    <div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="blog-single-2.html#comments">2 Comments</a></div>
                                    <div class="post-permalink"><i class="fa fa-link"></i> <a class="page-transition" href="blog-single-2.html">Permalink</a></div>--}}
                                </div>
                            </div>
                            {{--End Estate Post--}}
                            {{--Start Pagination--}}
                            <div class="row">
                                <div class="text-center col-md-offset-3 col-md-9">
                                    <ul class="pagination">
                                        <li><a class="page-transition" href="#">&laquo;</a></li>
                                        <li class="active"><a class="page-transition" href="#">1</a></li>
                                        <li><a class="page-transition" href="#">2</a></li>
                                        <li><a class="page-transition" href="#">3</a></li>
                                        <li><a class="page-transition" href="#">4</a></li>
                                        <li><a class="page-transition" href="#">5</a></li>
                                        <li><a class="page-transition" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            {{--End Pagination--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
