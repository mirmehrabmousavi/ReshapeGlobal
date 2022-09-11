@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg"/><img class="bg"
                                                                           src="/front/images/placeholders/1920x1200-1.jpg"/>
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg"/><img alt class="bg"
                                                                                       src="/front/images/placeholders/1920x1200-0.jpg"/>
            <div class="content half-size colors-h">
                <h2>{!! __('messages.companyRegistration.company registration') !!}</h2>
                <div class="header-details">{!! __('messages.companyRegistration.company registration') !!}</div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/coverbg.png" /><img alt class="bg" src="/front/images/placeholders/coverbg.png" /><img alt class="bg" src="/front/images/placeholders/coverbg.png" />
            <div class="content full-size colors-h">
                <div class="container">
                    <h2>Contact</h2>
                    <p class="header-details">Keep In <strong class="highlight">Touch</strong></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-right scroll-in-animation" data-animation="fadeInLeft">
                                <p class="big-font uppercase">
                                    Tel: <strong class="highlight">+39 (349) 6191607</strong>
                                </p>
                                <p class="big-font uppercase">
                                    El Manicom
                                    <br/> Via Gian Domenico Cassini 43, c/o S.G.
                                    <br/> Torino, TO 10129, Italia
                                </p><br>
                                <p class="big-font">
                                    <b>
                                        <a href="front/mailto:info@RESHAPEGLOBAL.it">info@RESHAPEGLOBAL.it</a><br/>
                                        <a href="http://www.RESHAPEGLOBAL.it">www.RESHAPEGLOBAL.it</a>
                                    </b>
                                </p><br>
                                <p class="big-font">
                                    <a target="_blank" href="https://www.facebook.com/RESHAPEGLOBAL"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-facebook fa-stack-1x text-background"></i></span></a>
                                    <a target="_blank" href="https://www.vimeo.com/RESHAPEGLOBAL/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-vimeo-square fa-stack-1x text-background"></i></span></a>
                                    <a target="_blank" href="https://instagram.com/RESHAPEGLOBALtorino"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-instagram fa-stack-1x text-background"></i></span></a>
                                    <a target="_blank" href="https://www.mixcloud.com/RESHAPEGLOBAL"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-cloud fa-stack-1x text-background"></i></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-left scroll-in-animation" data-animation="fadeInRight">


                                <form class="ajax-form" data-message-class="colors-e background-95 border heading" action="contact.php" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6 control-group">
                                            <div class="alt-placeholder">Nome</div>
                                            <input type="text" name="yourname" value="" size="40" placeholder="Name" data-validation-required-message="Please fill the required field." required>
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="col-md-6 control-group">
                                            <div class="alt-placeholder">Email</div>
                                            <input type="email" name="your-email" value="" size="40" placeholder="Email" data-validation-required-message="Please fill the required field." required>
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="col-md-12 control-group">
                                            <div class="alt-placeholder">Messaggio</div>
                                            <textarea name="your-message" placeholder="Message" data-validation-required-message="Please fill the required field." required></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="col-md-12 form-actions">
                                            <input class="button" type="submit" value="Invia">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="map-open button background-lite-b border-heading-b heading-b" data-map-overlay=".map-overlay" href="#">Locate Us on Map</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
