@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg" /><img class="bg" src="/front/images/placeholders/1920x1200-1.jpg" />
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="/front/images/placeholders/1920x1200-0.jpg" />
            <div class="content half-size colors-h">
                <h2 class="scroll-in-animation" style="color: green" data-animation="fadeInDown">{!! __('messages.environment.environment') !!}</h2>
                <div class="header-details scroll-in-animation" style="color: green" data-animation="fadeInDown">{!! __('messages.environment.environment') !!}</div>
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
                                <div class="post-day" style="color: green">26</div>
                                <div class="post-month">Apr 2015</div>
                            </div>
                            <div class="col-md-9">
                                <div class="post-body background-10-b">
                                    <div class="post-image scroll-in-animation" data-animation="fadeInDown">
                                        <img class="fluid-width" src="/front/images/placeholders/848x433-0.jpg"
                                             alt="Post with Featured Image">
                                    </div>
                                    <h3 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.environment') !!}
                                    </h3>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.1') !!}
                                    </p>
                                    <h5 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.2') !!}
                                    </h5>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.3') !!}
                                    </p>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.4') !!}
                                    </p>
                                    <h5 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.5') !!}
                                    </h5>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.6') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.7') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.8') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.9') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.10') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.11') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.12') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.13') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.14') !!}
                                    </p>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.16') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.17') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.18') !!}
                                    </p>
                                    <br>
                                    <br>
                                    <h5 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">
                                        {!! __('messages.environment.19') !!}
                                    </h5>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.environment.20') !!}
                                    </p>

                                    <br>
                                    <br>
                                    <br>

                                    <div id="comments">
                                        <h4 style="color: green">2 {{__('messages.environment.21')}}</h4>
                                        <ol class="comment-list scroll-in-animation" data-animation="fadeInDown">
                                            <li>
                                                <div class="comment">
                                                    <div class="avatar"><img alt="comment"
                                                                             src="/front/images/placeholders/380x573-2.jpg">
                                                    </div>
                                                    <div class="comment-box">
                                                        <div class="comment-author">April 26, 2014
                                                            at 1:38 pm/div>
                                                        <div class="comment-text">
                                                            <p>{{__('messages.environment.22')}}</p>
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
                                                                <div class="comment-author meta">
                                                                    April 26, 2014 at 1:39 pm
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>{{__('messages.environment.22')}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ol>
                                        <h4 class="scroll-in-animation" data-animation="fadeInDown" style="color: green">{{__('messages.environment.23')}}</h4>
                                        <form class="comment-form" action="#" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-md-6 control-group scroll-in-animation" data-animation="fadeInDown">
                                                    <input type="text" name="your-name" value="" size="40"
                                                           placeholder="{{__('messages.environment.24')}}"
                                                           data-validation-required-message="Please fill the required field."
                                                           required>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-6 control-group scroll-in-animation" data-animation="fadeInDown">
                                                    <input type="email" name="your-email" value="" size="40"
                                                           placeholder="{{__('messages.environment.25')}}"
                                                           data-validation-required-message="Please fill the required field."
                                                           required>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-12 control-group scroll-in-animation" data-animation="fadeInDown">
                                                    <textarea name="your-message" placeholder="{{__('messages.environment.26')}}"
                                                              data-validation-required-message="Please fill the required field."
                                                              required></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                                <div class="col-md-12 form-actions scroll-in-animation" data-animation="fadeInDown">
                                                    <input class="button" type="submit" value="{{__('messages.environment.27')}}">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar page-transition scroll-in-animation" data-animation="fadeInDown">
                        <div class="title" style="color: green">{{ __('messages.header.services') }}</div>
                        <ul dir="ltr">
                            <li><a style="color: green" href="{{ route('front.estate') }}">{{ __('messages.header.estate') }}</a></li>
                            <li><a style="color: green" href="{{ route('front.brandRegistration') }}">{{ __('messages.header.brand registration') }}</a></li>
                            <li><a style="color: green" href="{{ route('front.companyRegistration') }}">{{ __('messages.header.company registration') }}</a></li>
                            <li><a style="color: green" href="{{ route('front.turkishCitizenship') }}">{{ __('messages.header.turkish citizenship') }}</a></li>
                            <li><a style="color: green" href="{{ route('front.legalConsultancy') }}">{{ __('messages.header.legal consultancy') }}</a></li>
                            <li><a style="color: green" href="{{ route('front.importExport') }}">{{ __('messages.header.import export') }}</a></li>
                            <li><a style="color: green" href="{{ route('front.ads') }}">{{ __('messages.header.ads') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="separator-extra"></div>
        <h4 class="text-center">{{__('messages.environment.28')}}</h4>
        <div class="separator"></div>
        <div class="container">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                {{__('messages.environment.29')}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            {{__('messages.environment.30')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                {{__('messages.environment.29')}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{__('messages.environment.30')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                {{__('messages.environment.29')}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{__('messages.environment.30')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
