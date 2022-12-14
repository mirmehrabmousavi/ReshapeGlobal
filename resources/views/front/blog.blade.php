@extends('front.layout.app')

@section('content')
    <section>
        <div class="view">
            <img alt class="bg" src="/front/images/slider/banner-1.jpg"/><img alt class="bg"
                                                                              src="/front/images/slider/banner-2.jpg"/>
            <div class="content half-size colors-a">
                <div class="container">
                    <h2 class=" scroll-in-animation" data-animation="fadeInDown">{!! __("messages.blog.1") !!}</h2>
                    <p class="title scroll-in-animation" data-animation="fadeInDown">{!! __('messages.blog.2') !!}</p>
                </div>
            </div>
        </div>
        <div class="view">
            <div class="content small-top-padding colors-e background-solid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            @foreach($blogs as $val)
                                <div class="row post scroll-in-animation" data-animation="fadeInDown">
                                    <div class="col-md-3 post-meta">
                                        <div class="post-day">{{ $val->created_at->format('D') }}</div>
                                        <div class="post-month">{{ $val->created_at->format('M Y') }}</div>
                                    </div>
                                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                        <div class="col-md-9">
                                            <div class="post-body background-10-b">
                                                <div class="post-image">
                                                    <a class="page-transition" href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}">
                                                        <img class="fluid-width" src="{{asset($val->image)}}" alt="{{$val->title}}">
                                                    </a>
                                                </div>
                                                <h3>
                                                    <a class="page-transition" href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}">
                                                        {{$val->title}}
                                                    </a>
                                                </h3>
                                                <p>{!! \Illuminate\Support\Str::limit($val->desc, 175) !!}</p>
                                                <p>
                                                    <a href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}" class="page-transition post-read-more">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'fa')
                                        <div class="col-md-9">
                                            <div class="post-body background-10-b">
                                                <div class="post-image">
                                                    <a class="page-transition"
                                                       href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}"><img
                                                            class="fluid-width" src="{{--{{asset($val->image)}}--}}"
                                                            alt="{{$val->title}}"></a>
                                                </div>
                                                <h3>
                                                    <a class="page-transition" href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}">
                                                        {{$val->title_fa}}
                                                    </a>
                                                </h3>
                                                <p>{!! \Illuminate\Support\Str::limit($val->desc_fa, 175) !!}</p>
                                                <p>
                                                    <a href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}" class="page-transition post-read-more">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                {{$blogs->links('front.pagination.paginate')}}
                            @endforeach
                        </div>
                        <div class="col-md-3 sidebar page-transition scroll-in-animation" data-animation="fadeInDown">
                            <div class="title">{{__('messages.blog.3')}}</div>
                            <ul>
                                @foreach($blogs as $val)
                                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                        <li>
                                            <a href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}">{{$val->title}}</a>
                                        </li>
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'fa')
                                        <li>
                                            <a href="{{route('front.blog.show',['id' => $val->id,'title' => $val->title])}}">{{$val->title_fa}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
