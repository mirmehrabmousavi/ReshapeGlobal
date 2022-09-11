@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg" /><img class="bg" src="/front/images/placeholders/1920x1200-1.jpg" />
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="/front/images/placeholders/1920x1200-0.jpg" />
            <div class="content half-size colors-h">
                <h2>{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $estate->title : $estate->title_fa }}</h2>
                <div class="header-details">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $estate->title : $estate->title_fa }}</div>
            </div>
        </div>
    </section>
    <section>
        <div class="view">
            <div class="content  colors-e background-solid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row post">
                            <div class="col-md-3 post-meta">
                                <div class="post-day">{{ $estate->created_at->format('D') }}</div>
                                <div class="post-month">{{ $estate->created_at->format('M Y') }}</div>
                            </div>
                            <div class="col-md-9">
                                <div class="post-body background-10-b">
                                    <div class="post-image">
                                        <img class="fluid-width" src="{{asset($estate->image)}}"
                                             alt="{{$estate->title}}">
                                    </div>

                                    @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                                        {!! $estate->desc !!}
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() === 'fa')
                                        {!! $estate->desc_fa !!}
                                    @endif

                                    <br>
                                    <br>
                                    <br>

                                    <div id="comments">
                                        <h4>2 {{__('messages.brandRegistration.21')}}</h4>
                                        <ol class="comment-list">
                                            <li>
                                                <div class="comment">
                                                    <div class="avatar"><img alt="comment"
                                                                             src="/front/images/placeholders/380x573-2.jpg">
                                                    </div>
                                                    <div class="comment-box">
                                                        <div class="comment-author"><a href="#">mike</a> April 26, 2014
                                                            at 1:38 pm<a class="comment-reply-link" href="#"> -
                                                                Reply</a></div>
                                                        <div class="comment-text">
                                                            <p>{{__('messages.brandRegistration.22')}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li>
                                                        <div class="comment">
                                                            <div class="avatar"><img alt="comment"
                                                                                     src="/front/images/placeholders/380x573-0.jpg">
                                                            </div>
                                                            <div class="comment-box">
                                                                <div class="comment-author meta"><a href="#">jessica</a>
                                                                    April 26, 2014 at 1:39 pm<a
                                                                        class="comment-reply-link" href="#"> - Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>{{__('messages.brandRegistration.22')}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ol>
                                        <h4>{{__('messages.brandRegistration.23')}}</h4>
                                        <form class="comment-form" action="#" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-md-6 control-group">
                                                    <input type="text" name="your-name" value="" size="40"
                                                           placeholder="{{__('messages.brandRegistration.24')}}"
                                                           data-validation-required-message="Please fill the required field."
                                                           required>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-6 control-group">
                                                    <input type="email" name="your-email" value="" size="40"
                                                           placeholder="{{__('messages.brandRegistration.25')}}"
                                                           data-validation-required-message="Please fill the required field."
                                                           required>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-12 control-group">
                                                    <textarea name="your-message" placeholder="{{__('messages.brandRegistration.26')}}"
                                                              data-validation-required-message="Please fill the required field."
                                                              required></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-12 form-actions">
                                                    <input class="button" type="submit" value="{{__('messages.brandRegistration.27')}}">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar page-transition">
                        <div class="title">{{__('messages.estate.3')}}</div>
                        <ul dir="ltr">
                            @foreach($estates as $val)
                                <li><a href="{{ route('front.blog.show',['title' => $val->title]) }}">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $val->title : $val->title_fa }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
