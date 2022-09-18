@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg" /><img class="bg" src="/front/images/placeholders/1920x1200-1.jpg" />
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="/front/images/placeholders/1920x1200-0.jpg" />
            <div class="content half-size colors-h">
                <h2 class="scroll-in-animation" data-animation="fadeInDown">{!! __('messages.propertySales.property sales') !!}</h2>
                <div class="header-details scroll-in-animation" data-animation="fadeInDown">{!! __('messages.propertySales.property sales') !!}</div>
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
                                <div class="post-day">26</div>
                                <div class="post-month">Apr 2022</div>
                            </div>
                            <div class="col-md-9">
                                <div class="post-body background-10-b">
                                    <div class="post-image scroll-in-animation" data-animation="fadeInDown">
                                        <img class="fluid-width" src="/front/images/placeholders/848x433-0.jpg"
                                             alt="Post with Featured Image">
                                    </div>
                                    <h3 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.property sales') !!}
                                    </h3>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.1') !!}
                                    </p>
                                    <h5 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.2') !!}
                                    </h5>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.3') !!}
                                    </p>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.4') !!}
                                    </p>
                                    <h5 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.5') !!}
                                    </h5>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.6') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.7') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.8') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.9') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.10') !!}
                                    </p>
                                   {{-- <h6 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.11') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.12') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.13') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.14') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.15') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.16') !!}
                                    </p>
                                    <h6 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.17') !!}
                                    </h6>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.18') !!}
                                    </p>--}}
                                    <br>
                                    <br>
                                    <h5 class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.19') !!}
                                    </h5>
                                    <p class="scroll-in-animation" data-animation="fadeInDown">
                                        {!! __('messages.propertySales.20') !!}
                                    </p>

                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar page-transition scroll-in-animation" data-animation="fadeInDown">
                        <div class="title">{{ __('messages.header.services') }}</div>
                        <ul dir="ltr">
                            <li><a href="{{ route('front.estate') }}">{{ __('messages.header.estate') }}</a></li>
                            <li><a href="{{ route('front.brandRegistration') }}">{{ __('messages.header.brand registration') }}</a></li>
                            <li><a href="{{ route('front.companyRegistration') }}">{{ __('messages.header.company registration') }}</a></li>
                            <li><a href="{{ route('front.turkishCitizenship') }}">{{ __('messages.header.turkish citizenship') }}</a></li>
                            <li><a href="{{ route('front.legalConsultancy') }}">{{ __('messages.header.legal consultancy') }}</a></li>
                            <li><a href="{{ route('front.importExport') }}">{{ __('messages.header.import export') }}</a></li>
                            <li><a href="{{ route('front.ads') }}">{{ __('messages.header.ads') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="separator-extra"></div>
        <h4 class="text-center">{{__('messages.propertySales.28')}}</h4>
        <div class="separator"></div>
        <div class="container">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                {{__('messages.propertySales.29')}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            {{__('messages.propertySales.30')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                {{__('messages.propertySales.29')}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{__('messages.propertySales.30')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                {{__('messages.propertySales.29')}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{__('messages.propertySales.30')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection