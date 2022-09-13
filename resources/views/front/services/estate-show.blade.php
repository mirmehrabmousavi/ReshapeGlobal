@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg" /><img class="bg" src="/front/images/placeholders/1920x1200-1.jpg" />
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="/front/images/placeholders/1920x1200-0.jpg" />
            <div class="content half-size colors-h">
                <h2 class=" scroll-in-animation" data-animation="fadeInDown">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $estate->title : $estate->title_fa }}</h2>
                <div class="header-details scroll-in-animation" data-animation="fadeInDown">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $estate->title : $estate->title_fa }}</div>
            </div>
        </div>
    </section>
    <section>
        <div class="view">
            <div class="content  colors-e background-solid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row post">
                            <div class="col-md-3 post-meta scroll-in-animation" data-animation="fadeInDown">
                                <div class="post-day">{{ $estate->created_at->format('D') }}</div>
                                <div class="post-month">{{ $estate->created_at->format('M Y') }}</div>
                            </div>
                            <div class="col-md-9">
                                <div class="post-body background-10-b">
                                    <div class="post-image scroll-in-animation" data-animation="fadeInDown">
                                        <img class="fluid-width" src="{{asset($estate->image)}}"
                                             alt="{{$estate->title}}">
                                    </div>

                                    <div class=" scroll-in-animation" data-animation="fadeInDown">
                                        @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                                            {!! $estate->desc !!}
                                        @elseif(\Illuminate\Support\Facades\App::getLocale() === 'fa')
                                            {!! $estate->desc_fa !!}
                                        @endif
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar page-transition scroll-in-animation" data-animation="fadeInDown">
                        <div class="title">{{__('messages.estate.3')}}</div>
                        <ul dir="ltr">
                            @foreach($estates as $val)
                                <li><a href="{{ route('front.blog.show',['id' => $val->id ,'title' => $val->title]) }}">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $val->title : $val->title_fa }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
