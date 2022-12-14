@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg" /><img class="bg" src="/front/images/placeholders/1920x1200-1.jpg" />
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="/front/images/placeholders/1920x1200-0.jpg" />
            <div class="content half-size colors-h">
                <h2 class=" scroll-in-animation" data-animation="fadeInDown">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $blog->title : $blog->title_fa }}</h2>
                <div class="header-details scroll-in-animation" data-animation="fadeInDown">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $blog->title : $blog->title_fa }}</div>
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
                                <div class="post-day">{{ $blog->created_at->format('D') }}</div>
                                <div class="post-month">{{ $blog->created_at->format('M Y') }}</div>
                            </div>
                            <div class="col-md-9">
                                <div class="post-body background-10-b">
                                    <div class="post-image scroll-in-animation" data-animation="fadeInDown">
                                        <img class="fluid-width" src="{{asset($blog->image)}}"
                                             alt="{{$blog->title}}">
                                    </div>

                                    <div class=" scroll-in-animation" data-animation="fadeInDown">
                                        @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                                            {!! $blog->desc !!}
                                        @elseif(\Illuminate\Support\Facades\App::getLocale() === 'fa')
                                            {!! $blog->desc_fa !!}
                                        @endif
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <div id="comments">

                                        {{--Start CommentDisplay--}}
                                        @include('front.commentDisplay', ['comments' => $blog->comments, 'blog_id' => $blog->id])
                                        {{--End CommentDisplay--}}

                                        <h4 class=" scroll-in-animation" data-animation="fadeInDown">{{__('messages.brandRegistration.23')}}</h4>
                                        <form action="{{route('front.comments.store')}}" class="comment-form scroll-in-animation" data-animation="fadeInDown" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 control-group">
                                                    <input type="text" name="name" value="{{old('name')}}"
                                                           placeholder="{{__('messages.brandRegistration.24')}}"
                                                           data-validation-required-message="Please fill the required field."
                                                           required>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-6 control-group">
                                                    <input type="email" name="email" value="{{old('email')}}"
                                                           placeholder="{{__('messages.brandRegistration.25')}}"
                                                           data-validation-required-message="Please fill the required field."
                                                           required>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-12 control-group">
                                                    <textarea name="body" placeholder="{{__('messages.brandRegistration.26')}}"
                                                              data-validation-required-message="Please fill the required field."
                                                              required></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                                <input type="hidden" name="blog_id" value="{{ $blog->id }}" />
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
                    <div class="col-md-3 sidebar page-transition scroll-in-animation" data-animation="fadeInDown">
                        <div class="title">{{__('messages.blog.3')}}</div>
                        <ul dir="ltr">
                            @foreach($blogs as $val)
                            <li><a href="{{ route('front.blog.show',['id' => $val->id, 'title' => $val->title]) }}">{{(\Illuminate\Support\Facades\App::getLocale() === 'en') ? $val->title : $val->title_fa }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
