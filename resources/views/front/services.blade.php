@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg" /><img class="bg" src="/front/images/placeholders/1920x1200-1.jpg" />
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="/front/images/placeholders/1920x1200-0.jpg" />
            <div class="content half-size colors-h">
                <h2 class="scroll-in-animation" data-animation="fadeInDown">S<span class="highlight">ervices</span></h2>
                <div class="header-details scroll-in-animation" data-animation="fadeInDown""><span class="highlight">Services</span> Documentation</div>
            </div>
        </div>
    </section>
    <section>
        <div class="view">
            <div class="content no-bottom-padding colors-e background-solid">
                <div class="gallery colors-h background-solid" data-default-group="all" data-overlay=".gallery-overlay">
                    <div class="container-fluid">
                        <div class="filter scroll-in-animation" data-animation="fadeInDown">
                            <ul class="nav nav-pills text-center">
                                <li><a class="hover-effect" data-group="all" href="#">All</a></li>
                                <li><a class="hover-effect" data-group="web" href="#">Web</a></li>
                                <li><a class="hover-effect" data-group="video" href="#">Video</a></li>
                                <li><a class="hover-effect" data-group="photography" href="#">Photography</a></li>
                                <li><a class="hover-effect" data-group="design" href="#">Design</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="grid">

                                <div class="item col-lg-6 col-md-6 col-sm-6 col-xs-12" data-groups='["design"]'>
                                    <a href="#!portfolio-item-1.html" class="hover-overlay">
                                        <img alt="Project 1" src="/front/images/portfolio/ssTorino.jpg" />
                                        <div class="overlay background-90-a">
                                            <div class="hidden-xs">
                                                <p class="title heading-a">RESHAPE Stage Torino</p>
                                                <p class="text-center heading-a"><strong>Rivivi la challange e supporta la musica. I grandi nomi non contano, sul nostro canale MixCloud è tutto anonimo.</strong></p>
                                                <p class="text-center"><i class="fa fa-facebook-square heading-a"></i></p>
                                                <p class="text-center"><i class="fa fa-cloud heading-a"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-lg-6 col-md-6 col-sm-6 col-xs-12" data-groups='["photography", "web", "video"]'>
                                    <a href="#!portfolio-item-2.html" class="hover-overlay">
                                        <img alt="Project 2" src="/front/images/portfolio/Dance.jpg" />
                                        <div class="overlay background-90-a">
                                            <div class="hidden-xs">
                                                <p class="title heading-a">Dance Express</p>
                                                <p class="text-center heading-a"><strong>Esperimento Sociale per il web. Abbiamo forzato degli sconosciuti a non comunicare verbalmente chiusi in una stanza...</strong></p>
                                                <p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="item col-lg-6 col-md-6 col-sm-6 col-xs-12" data-groups='["photography", "design"]'>
                                    <a href="#!portfolio-item-3.html" class="hover-overlay">
                                        <img alt="Project 3" src="/front/images/portfolio/MOSAICON.png" />
                                        <div class="overlay background-90-a">
                                            <div class="hidden-xs">
                                                <p class="title heading-a">Mosaicon</p>
                                                <p class="text-center heading-a"><strong>Una nuova piattoforma di streaming per gli eventi di musica elettronica.</strong></p>
                                                <p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-lg-6 col-md-6 col-sm-6 col-xs-12" data-groups='["photography", "web", "video"]'>
                                    <a href="#!portfolio-item-4.html" class="hover-overlay">
                                        <img alt="Project 4" src="/front/images/portfolio/Treno.jpg" />
                                        <div class="overlay background-90-a">
                                            <div class="hidden-xs">
                                                <p class="title heading-a">Treno Express</p>
                                                <p class="text-center heading-a"><strong>Ambientato a Torino, questo cortometraggio racconta l'ispirazione creativa di Marco Colombo, DJ partecipante a RESHAPE Stage.</strong></p>
                                                <p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="separator-extra"></div>
        <h4 class="text-center scroll-in-animation" data-animation="fadeInDown">Accordions</h4>
        <div class="separator"></div>
        <div class="container scroll-in-animation" data-animation="fadeInDown">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
