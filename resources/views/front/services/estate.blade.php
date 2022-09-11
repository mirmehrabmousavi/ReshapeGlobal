@extends('front.layout.app')

@section('content')
    <section>
        <div class="view">
            <img alt class="bg" src="/front/images/slider/banner-1.jpg"/><img alt class="bg"
                                                                              src="/front/images/slider/banner-2.jpg"/>
            <div class="content half-size colors-a">
                <div class="container">
                    <h2 class=" scroll-in-animation" data-animation="fadeInDown">{!! __('messages.estate.1') !!}</h2>
                    <p class="title scroll-in-animation" data-animation="fadeInDown">{!! __('messages.estate.2') !!}</p>
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
                                <div class="row post scroll-in-animation" data-animation="fadeInDown">
                                    @if($val->id % 2)
                                        <div class="col-md-3 post-meta">
                                        </div>
                                    @endif
                                    @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                                        <div class="col-md-9">
                                            <div class="post-body background-10-b">
                                                <div class="post-image">
                                                    <div class="slider">
                                                        <div><img class="fluid-width" alt="{{$val->title}}"
                                                                  src="{{asset($val->image)}}"/></div>
                                                    </div>
                                                </div>
                                                <h3><a class="page-transition"
                                                       href="{{route('front.estate.show',['title' => $val->title])}}">{{$val->title}}</a>
                                                </h3>
                                                <p>{!! Str::limit($val->desc, 175) !!}</p>
                                                <p><a href="{{route('front.estate.show',['title' => $val->title])}}"
                                                      class="post-read-more page-transition">Read
                                                        more...</a></p>
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
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() === 'fa')
                                        <div class="col-md-9">
                                            <div class="post-body background-10-b">
                                                <div class="post-image">
                                                    <div class="slider">
                                                        <div><img class="fluid-width" alt="{{$val->title}}"
                                                                  src="{{asset($val->image)}}"/></div>
                                                    </div>
                                                </div>
                                                <h3><a class="page-transition"
                                                       href="{{route('front.estate.show',['title' => $val->title])}}">{{$val->title_fa}}</a>
                                                </h3>
                                                <p>{!! Str::limit($val->desc_fa, 175) !!}</p>
                                                <p><a href="{{route('front.estate.show',['title' => $val->title])}}"
                                                      class="post-read-more page-transition">Read
                                                        more...</a></p>
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
                                    @endif
                                    @if($val->id % 2)

                                    @else
                                        <div class="col-md-3 post-meta">
                                        </div>
                                    @endif
                                </div>
                                {{--End Estate Post--}}
                                {{$estates->links('front.pagination.paginate')}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
