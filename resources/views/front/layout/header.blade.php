@if(App::isLocale('fa'))
    <div class="ext-nav background-95-h page-transition">
        <div class="view half-height">
            <video muted autoplay loop class="bg static" >
                <source src="/front/video.mp4" type="video/mp4">
            </video>
            <div class="content no-top-padding no-bottom-padding  full-height">
                <div class="container-fluid  full-height">
                    <div class="row full-height">
                        <a href="{{route('front.blogs')}}" class="col-md-6 colors-a background-95 full-height">
                            <div>
                                <span class="side-label">{{__('messages.header.all the latest')}}</span>
                                <span class="side-title">{{__('messages.header.blog')}}</span>
                            </div>
                        </a>
                        <a href="front/help.html" class="col-md-6 colors-f background-95-f full-height">
                            <div>
                                <span class="side-label">{{__('messages.header.documentation')}}</span>
                                <span class="side-title">{{__('messages.header.help')}}</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid  half-height">
            <div class="row full-height">
                <a href="#how-we-work" class="col-md-4 colors-g background-solid full-height border-bottom border-lite">
                    <div>
                        <span class="side-label">Awesome</span>
                        <span class="side-title">How We Work</span>
                    </div>
                </a>
                <a href="#who-we-are" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                    <div>
                        <span class="side-label">We Are Designers</span>
                        <span class="side-title">Who We Are</span>
                    </div>
                </a>
                <a href="#numbers" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                    <div>
                        <span class="side-label">Some Facts</span>
                        <span class="side-title">Our Numbers</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>
    <div class="page-border left colors-e background-solid">
        <ul>
            <li><a href="https://" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-telegram"></i></a></li>
        </ul>
    </div>
    <!-- BEGIN: Top menu -->
    <div class="page-border right colors-e background-solid"></div>
    <nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
        <div class="container">
            <ul class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>
                    <li class="dropdown"><a href="" class="hover-effect">{{__('messages.header.lang')}}</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('front.changeLang',['lang' => 'en'])}}" class="hover-effect">{{__('messages.header.english')}}</a></li>
                            <li><a href="{{route('front.changeLang',['lang' => 'fa'])}}" class="hover-effect">{{__('messages.header.persian')}}</a></li>
                        </ul>
                    </li>
                    <li><a href="{{(Request::is('/')) ? '#contact' : route('front.contact')}}" class="hover-effect">{{__('messages.header.contact us')}}</a></li>
                    <li><a href="{{(Request::is('/')) ? '#team' : route('front.team')}}" class="hover-effect">{{__('messages.header.our team')}}</a></li>
                    <li><a href="{{(Request::is('/')) ? '#about' : route('front.about')}}" class="hover-effect">{{__('messages.header.about')}}</a></li>
                    <li><a href="{{route('front.blogs')}}" class="hover-effect">{{__('messages.header.blog')}}</a></li>
                    <li><a href="{{route('front.environment')}}" class="hover-effect" style="color: green"><i class="fa fa-tree"></i>{{__('messages.header.environment')}}</a></li>

                    <li class="dropdown"><a href="{{route('front.counseling')}}" class="hover-effect">{{__('messages.header.counseling')}}</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('front.commercial')}}" class="hover-effect">{{__('messages.header.commercial')}}</a></li>
                            <li><a href="{{route('front.legal')}}" class="hover-effect">{{__('messages.header.legal')}}</a></li>
                            <li><a href="{{route('front.counselingAds')}}" class="hover-effect">{{__('messages.header.ads')}}</a></li>
                            <li><a href="{{route('front.estateCounseling')}}" class="hover-effect">{{__('messages.header.estate counseling')}}</a></li>
                            <li><a href="{{route('front.events')}}" class="hover-effect">{{__('messages.header.events')}}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{route('front.services')}}" class="hover-effect">{{__('messages.header.services')}}</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('front.estate')}}" class="hover-effect">{{__('messages.header.estate')}}</a></li>
                            <li><a href="{{route('front.brandRegistration')}}" class="hover-effect">{{__('messages.header.brand registration')}}</a></li>
                            <li><a href="{{route('front.companyRegistration')}}" class="hover-effect">{{__('messages.header.company registration')}}</a></li>
                            <li><a href="{{route('front.turkishCitizenship')}}" class="hover-effect">{{__('messages.header.turkish citizenship')}}</a></li>
                            <li><a href="{{route('front.legalConsultancy')}}" class="hover-effect">{{__('messages.header.legal consultancy')}}</a></li>
                            <li><a href="{{route('front.importExport')}}" class="hover-effect">{{__('messages.header.import export')}}</a></li>
                            <li><a href="{{route('front.ads')}}" class="hover-effect">{{__('messages.header.ads')}}</a></li>
                            <li><a href="{{route('front.internationalTrading')}}" class="hover-effect">{{__('messages.header.international trading')}}</a></li>
                            <li><a href="{{route('front.programming')}}" class="hover-effect">{{__('messages.header.programming')}}</a></li>
                            <li><a href="{{route('front.propertySales')}}" class="hover-effect">{{__('messages.header.property sales')}}</a></li>
                        </ul>
                    </li>

                    <li><a href="{{(Request::is('/')) ? '#home' : route('front.index')}}" class="hover-effect">{{__('messages.header.home')}}</a></li>
                    <div class="navbar-header" style="margin-left: 60px">
                        <!-- <a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a> -->
                        <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
                        <a class="navbar-brand" href="{{route('front.index')}}"><img src="/front/logo.png" width="50" height="50" alt="">{{--RESHAPE<span class="highlight"> GLOBAL</span>--}}</a>
                    </div>
                    {{--<li class="dropdown">
                        <select class="dropdown" onclick="changeLanguage(this.value)">
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='fa'?'selected':''):''}} value="fa">Persian</option>
                        </select>
                    </li>--}}

                </ul>
            </ul>


        </div>
    </nav>
    <!-- END: Top menu -->
    <ul id="dot-scroll" class="colors-e background-solid"></ul>
    <div class="overlay-window gallery-overlay colors-g background-95-g" data-overlay-zoom="#work .content">
        <div class="overlay-control background-90-b">
            <a class="previos" href="#"></a>
            <a class="next" href="#"></a>
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view"></div>
        <ul class="loader">
            <li class="background-highlight-e"></li>
            <li class="background-highlight-e"></li>
            <li class="background-highlight-e"></li>
        </ul>
    </div>
    <div class="overlay-window map-overlay colors-g background-95-g">
        <div class="overlay-control background-20-b">
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view">
            <div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
                <div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
                <div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
            </div>
        </div>
    </div>
    <div class="overlay-window credits-overlay colors-g background-95-g">
        <div class="overlay-control background-90-b">
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view">
            <div class="content-container">
                <h3>Credits</h3>
                <ul>
                    <li>
                        Photos by:
                        <ul>
                            <li><a target="_blank" href="https://www.flickr.com/photos/katya_alagich/">Katya Alagich</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/65047661@N00/">Jim Lukach</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/johanl/">Johan Larsson</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/johny/">John Kraus</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/geishaboy500/">THOR</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/stf-o/">stephane</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="http://www.pexels.com/">Pexels</a>, <a target="_blank" href="http://www.pexels.com/photo-license/">CC0 License</a></li>
                            <li><a target="_blank" href="https://stocksnap.io/">Stocksnap</a>, <a target="_blank" href="https://stocksnap.io/license">CC0 License</a></li>
                            <li><a target="_blank" href="http://picjumbo.com/">Picjumbo</a>, <a target="_blank" href="http://picjumbo.com/about-author/">Picjumbo License</a></li>
                        </ul>
                    </li>
                    <li>
                        Video by:
                        <ul>
                            <li><a target="_blank" href="http://mazwai.com/">Mazwai</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0 License</a></li>
                        </ul>
                    </li>
                    <li>
                        Icons by:
                        <ul>
                            <li><a target="_blank" href="http://designmodo.com/">Designmodoh</a>, <a target="_blank" href="http://designmodo.com/linecons-free/">License</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gate colors-e background-solid">
        <div class="gate-bar background-heading-e"></div>
        <ul class="loader">
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
        </ul>
    </div>

@else

    <div class="ext-nav background-95-h page-transition">
        <div class="view half-height">
            <video muted autoplay loop class="bg static" >
                <source src="/front/video.mp4" type="video/mp4">
            </video>
            <div class="content no-top-padding no-bottom-padding  full-height">
                <div class="container-fluid  full-height">
                    <div class="row full-height">
                        <a href="{{route('front.blogs')}}" class="col-md-6 colors-a background-95 full-height">
                            <div>
                                <span class="side-label">{{__('messages.header.all the latest')}}</span>
                                <span class="side-title">{{__('messages.header.blog')}}</span>
                            </div>
                        </a>
                        <a href="front/help.html" class="col-md-6 colors-f background-95-f full-height">
                            <div>
                                <span class="side-label">{{__('messages.header.documentation')}}</span>
                                <span class="side-title">{{__('messages.header.help')}}</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid  half-height">
            <div class="row full-height">
                <a href="#how-we-work" class="col-md-4 colors-g background-solid full-height border-bottom border-lite">
                    <div>
                        <span class="side-label">Awesome</span>
                        <span class="side-title">How We Work</span>
                    </div>
                </a>
                <a href="#who-we-are" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                    <div>
                        <span class="side-label">We Are Designers</span>
                        <span class="side-title">Who We Are</span>
                    </div>
                </a>
                <a href="#numbers" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                    <div>
                        <span class="side-label">Some Facts</span>
                        <span class="side-title">Our Numbers</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>
    <div class="page-border left colors-e background-solid">
        <ul>
            <li><a href="https://" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="https://" target="_blank"><i class="fa fa-telegram"></i></a></li>
        </ul>
    </div>
    <!-- BEGIN: Top menu -->
    <div class="page-border right colors-e background-solid"></div>
    <nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
        <div class="container">

            <ul class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <div class="navbar-header">
                        <!-- <a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a> -->
                        <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
                        <a class="navbar-brand" href="{{route('front.index')}}"><img src="/front/logo.png" width="50" height="50" alt="">{{--RESHAPE<span class="highlight"> GLOBAL</span>--}}</a>
                    </div>

                    <li><a href="{{(Request::is('/')) ? '#home' : route('front.index')}}" class="hover-effect">{{__('messages.header.home')}}</a></li>

                    <li class="dropdown"><a href="{{route('front.services')}}" class="hover-effect">{{__('messages.header.services')}}</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('front.estate')}}" class="hover-effect">{{__('messages.header.estate')}}</a></li>
                            <li><a href="{{route('front.brandRegistration')}}" class="hover-effect">{{__('messages.header.brand registration')}}</a></li>
                            <li><a href="{{route('front.companyRegistration')}}" class="hover-effect">{{__('messages.header.company registration')}}</a></li>
                            <li><a href="{{route('front.turkishCitizenship')}}" class="hover-effect">{{__('messages.header.turkish citizenship')}}</a></li>
                            <li><a href="{{route('front.legalConsultancy')}}" class="hover-effect">{{__('messages.header.legal consultancy')}}</a></li>
                            <li><a href="{{route('front.importExport')}}" class="hover-effect">{{__('messages.header.import export')}}</a></li>
                            <li><a href="{{route('front.ads')}}" class="hover-effect">{{__('messages.header.ads')}}</a></li>
                            <li><a href="{{route('front.internationalTrading')}}" class="hover-effect">{{__('messages.header.international trading')}}</a></li>
                            <li><a href="{{route('front.programming')}}" class="hover-effect">{{__('messages.header.programming')}}</a></li>
                            <li><a href="{{route('front.propertySales')}}" class="hover-effect">{{__('messages.header.property sales')}}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{route('front.counseling')}}" class="hover-effect">{{__('messages.header.counseling')}}</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('front.commercial')}}" class="hover-effect">{{__('messages.header.commercial')}}</a></li>
                            <li><a href="{{route('front.legal')}}" class="hover-effect">{{__('messages.header.legal')}}</a></li>
                            <li><a href="{{route('front.counselingAds')}}" class="hover-effect">{{__('messages.header.ads')}}</a></li>
                            <li><a href="{{route('front.estateCounseling')}}" class="hover-effect">{{__('messages.header.estate counseling')}}</a></li>
                            <li><a href="{{route('front.events')}}" class="hover-effect">{{__('messages.header.events')}}</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('front.environment')}}" class="hover-effect" style="color: green"><i class="fa fa-tree"></i>{{__('messages.header.environment')}}</a></li>
                    <li><a href="{{route('front.blogs')}}" class="hover-effect">{{__('messages.header.blog')}}</a></li>
                    <li><a href="{{(Request::is('/')) ? '#about' : route('front.about')}}" class="hover-effect">{{__('messages.header.about')}}</a></li>
                    <li><a href="{{(Request::is('/')) ? '#team' : route('front.team')}}" class="hover-effect">{{__('messages.header.our team')}}</a></li>
                    <li><a href="{{(Request::is('/')) ? '#contact' : route('front.contact')}}" class="hover-effect">{{__('messages.header.contact us')}}</a></li>
                    <li class="dropdown"><a href="" class="hover-effect">{{__('messages.header.lang')}}</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('front.changeLang',['lang' => 'en'])}}" class="hover-effect">{{__('messages.header.english')}}</a></li>
                            <li><a href="{{route('front.changeLang',['lang' => 'fa'])}}" class="hover-effect">{{__('messages.header.persian')}}</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>

                    {{--<li class="dropdown">
                        <select class="dropdown" onclick="changeLanguage(this.value)">
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='fa'?'selected':''):''}} value="fa">Persian</option>
                        </select>
                    </li>--}}

                </ul>
            </ul>
        </div>
    </nav>
    <!-- END: Top menu -->
    <ul id="dot-scroll" class="colors-e background-solid"></ul>
    <div class="overlay-window gallery-overlay colors-g background-95-g" data-overlay-zoom="#work .content">
        <div class="overlay-control background-90-b">
            <a class="previos" href="#"></a>
            <a class="next" href="#"></a>
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view"></div>
        <ul class="loader">
            <li class="background-highlight-e"></li>
            <li class="background-highlight-e"></li>
            <li class="background-highlight-e"></li>
        </ul>
    </div>
    <div class="overlay-window map-overlay colors-g background-95-g">
        <div class="overlay-control background-20-b">
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view">
            <div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
                <div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
                <div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
            </div>
        </div>
    </div>
    <div class="overlay-window credits-overlay colors-g background-95-g">
        <div class="overlay-control background-90-b">
            <a class="cross" href="#"></a>
        </div>
        <div class="overlay-view">
            <div class="content-container">
                <h3>Credits</h3>
                <ul>
                    <li>
                        Photos by:
                        <ul>
                            <li><a target="_blank" href="https://www.flickr.com/photos/katya_alagich/">Katya Alagich</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/65047661@N00/">Jim Lukach</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/johanl/">Johan Larsson</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/johny/">John Kraus</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/geishaboy500/">THOR</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="https://www.flickr.com/photos/stf-o/">stephane</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                            <li><a target="_blank" href="http://www.pexels.com/">Pexels</a>, <a target="_blank" href="http://www.pexels.com/photo-license/">CC0 License</a></li>
                            <li><a target="_blank" href="https://stocksnap.io/">Stocksnap</a>, <a target="_blank" href="https://stocksnap.io/license">CC0 License</a></li>
                            <li><a target="_blank" href="http://picjumbo.com/">Picjumbo</a>, <a target="_blank" href="http://picjumbo.com/about-author/">Picjumbo License</a></li>
                        </ul>
                    </li>
                    <li>
                        Video by:
                        <ul>
                            <li><a target="_blank" href="http://mazwai.com/">Mazwai</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0 License</a></li>
                        </ul>
                    </li>
                    <li>
                        Icons by:
                        <ul>
                            <li><a target="_blank" href="http://designmodo.com/">Designmodoh</a>, <a target="_blank" href="http://designmodo.com/linecons-free/">License</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gate colors-e background-solid">
        <div class="gate-bar background-heading-e"></div>
        <ul class="loader">
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
            <li class="background-heading-e"></li>
        </ul>
    </div>
@endif
