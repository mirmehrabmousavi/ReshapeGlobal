@extends('front.layout.app')

@section('content')
    <!-- BEGIN: Page content -->
    <video muted autoplay loop style="position: fixed;min-width: 100%;min-height: 100%">
        <source src="/front/video.mp4" type="video/mp4">
    </video>
    <section id="home">
        <div class="view">
            <div class="content home-suzi full-size colors-c background-40">
                <div class="container">
                    <h2 class="scroll-in-animation" data-animation="fadeInLeft"><span class="thin-font-weight">{!! __('messages.index.1') !!}</span></h2>

                    <h1 class="text-center scroll-in-animation" data-animation="fadeInDown">Reshape<span class="highlight nirmal-font-weight"> Global</span></h1>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <i class="background-20 heading">
                                <p class="scroll-in-animation title text-center rubberBand" data-animation="fadeInDown">
                                    {{__('messages.index.2')}}
                                </p>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="process">
        <div class="view">
            <div class="content colors-e background-solid">
                <div class="container">
                    <h2 class="scroll-in-animation background-20 heading" data-animation="fadeInDown">{!! __('messages.index.3') !!}</h2>
                    <p class="header-details scroll-in-animation" data-animation="fadeInDown">{!! __('messages.index.4') !!}</p>
                    <p class="lead scroll-in-animation" data-animation="fadeInDown">{{__('messages.index.5')}}</p>
                    <div class="process">
                        <div class="row process-row">
                            <div class="col-md-3 process-step scroll-in-animation" data-animation="fadeInDown">
                                <div class="process-box"><i class="li_video heading"></i></div>
                                <p class="title">{{__('messages.index.6')}}</p>
                                <p class="text-center">{{__('messages.index.7')}}</p>
                            </div>
                            <div class="col-md-3 process-step scroll-in-animation" data-animation="fadeInDown">
                                <div class="process-box"><i class="li_sound heading"></i></div>
                                <p class="title">{{__('messages.index.8')}}</p>
                                <p class="text-center">{{__('messages.index.9')}}</p>
                            </div>
                            <div class="col-md-3 process-step scroll-in-animation" data-animation="fadeInDown">
                                <div class="process-box"><i class="li_world heading"></i></div>
                                <p class="title">{{__('messages.index.10')}}</p>
                                <p class="text-center">{{__('messages.index.11')}}</p>
                            </div>
                            <div class="col-md-3 process-step scroll-in-animation" data-animation="fadeInDown">
                                <div class="process-box"><i class="li_music heading"></i></div>
                                <p class="title">{{__('messages.index.12')}}</p>
                                <p class="text-center">{{__('messages.index.13')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="process scroll-in-animation" data-animation="fadeInDown">
                        <div class="row process-row">
                            <div class="col-md-6 col-md-offset-3 process-step">
                                <div class="process-box"><i class="li_vynil heading"></i></div>
                                <p class="title">{{__('messages.index.14')}}</p>
                                <p class="text-center">{{__('messages.index.15')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/coverbg.png" /><img alt class="bg" src="/front/images/placeholders/coverbg.png" /><img alt class="bg" src="/front/images/placeholders/coverbg.png" />
            <div class="content half-size colors-h">
                <div class="container">
                    <div class="show-list slogan">
                        <div class="show-item">{{__('messages.index.16')}}</div>
                        <div class="show-item">{{__('messages.index.17')}}</div>
                        <div class="show-item">{{__('messages.index.18')}}</div>
                        <div class="show-item">{{__('messages.index.19')}}</div>
                        <div class="show-item">{{__('messages.index.20')}}</div>
                    </div>
                    <div class="separator"></div>
                    <p class="text-center big-font">
                        <em>{{__('messages.index.21')}}</em>
                        <em>{{__('messages.index.22')}}</em>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="work">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/coverbg.png" />
            <div class="content pane">
                <div class="container-fluid">
                    <div class="row hidden-xs hidden-sm">
                        <div class="col-md-4 colors-b scroll-in-animation" data-animation="fadeInLeft">
                            <div class="row">
                                <div class="col-xs-12 banner-cell">
                                    <h3 class="light-font-weight">Transmedia</h3>
                                    <p class="title">Project</p>
                                </div>
                                <div class="col-xs-12 success heading-b banner-cell">
                                    Universo narrativo
                                    <br /> Transmediale
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 colors-c scroll-in-animation" data-animation="fadeInDown">
                            <div class="row">
                                <div class="col-xs-12 banner-cell">
                                    <h3 class="light-font-weight">Postmodern</h3>
                                    <p class="title">Narrative</p>
                                </div>
                                <div class="col-xs-12 warning heading-c banner-cell">
                                    L'arte del mix
                                    <br /> Come un DJ
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 colors-d scroll-in-animation" data-animation="fadeInRight">
                            <div class="row">
                                <div class="col-xs-12 banner-cell">
                                    <h3 class="light-font-weight">Overground</h3>
                                    <p class="title">Art</p>
                                </div>
                                <div class="col-xs-12 info heading-d banner-cell">
                                    Artisti emergenti
                                    <br /> Talenti della rete
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view">
            <div class="content no-bottom-padding colors-e background-solid">
                <div class="container">
                    <h2 class=" scroll-in-animation" data-animation="fadeInDown">Multi<span class="highlight">Media</span></h2>
                    <p class="header-details scroll-in-animation" data-animation="fadeInDown"><span class="highlight">RESHAPE Stage's</span> tales</p>
                    <p class="lead scroll-in-animation" data-animation="fadeInDown">Tutti i contenuti multimediali sono usufruibili in maniera a sè stante, indipendentemente l'uno dall'altro e dall'ordine. Solo attivando i sensi visivi e uditivi è possibile vivere una esperienza techno completa all'interno dell'universo di RESHAPE Stage. Segui i bridge transmediali e scova tutti gli indizi per affrontare al meglio il contest per lo GLOBAL del festival più underground di Torino.</p>
                    <p class="header-details scroll-in-animation" data-animation="fadeInDown"><span class="highlight">Click or Tap</span> on Media</p>
                </div>
                <div class="gallery colors-h background-solid scroll-in-animation" data-animation="fadeInDown" data-default-group="all" data-overlay=".gallery-overlay">
                    <div class="container-fluid">
                        <div class="filter">
                            <ul class="nav nav-pills text-center">
                                <li><a class="hover-effect" data-group="all" href="#">All</a></li>
                                <li><a class="hover-effect" data-group="web" href="#">Web</a></li>
                                <li><a class="hover-effect" data-group="video" href="#">Video</a></li>
                                <li><a class="hover-effect" data-group="photography" href="#">Photography</a></li>
                                <li><a class="hover-effect" data-group="design" href="#">Design</a> </li>
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
    <section id="about">
        <div class="view">
            <div class="content colors-e background-solid">
                <div class="container">
                    <h2 class=" scroll-in-animation" data-animation="fadeInDown">Manifesto</h2>
                    <p class="header-details scroll-in-animation" data-animation="fadeInDown">Our <span class="highlight">Vision</span></p>
                    <p class="lead scroll-in-animation" data-animation="fadeInDown">Se il cinema postmoderno è un mix di generi, quello transmediale è un mix di arti. Difatti, il transmedia vuole essere l’ottava arte, l’arte del nuovo secolo. Il nuovo stato dell'arte sarà la cultura overground: l'artista si riapproprierà del suo talento per comunicare senza mediazioni commerciali la sua espressione più pura.</p>
                    <div class="row">
                        <div class="col-md-4 scroll-in-animation" data-animation="fadeInLeft">
                            <div class="col-icon">
                                <i class="li_bulb"></i>
                            </div>
                            <div class="col-content">
                                <h4>Our<span class="highlight"><br/>Mission</span></h4>
                                <p>RESHAPE Stage vuole essere dimostrazione di queste tesi, per salvare le arti emergenti dalla classica mercificazione imposta dal mercato. Il progetto transmediale intende creare un canale overground: originale e puro come l’arte underground e popolare e apprezzato come l’arte mainstream, per i talenti non riconosciuti o sparsi per i meandri della rete.</p>
                            </div>
                        </div>
                        <div class="col-md-4 scroll-in-animation" data-animation="fadeInTop">
                            <div class="col-icon">
                                <i class="li_pen"></i>
                            </div>
                            <div class="col-content">
                                <h4>Transmedia<span class="highlight"><br/>Storytelling</span></h4>
                                <p>Il transmedia storytelling è una forma narrativa che, muovendosi attraverso diversi tipi di media, contribuisce ad ogni passaggio con nuove e distinte informazioni all’esperienza dell'utente. Usando diverse piattaforme mediali, contribuisce a perfezionare ed integrare l'esperienza dell'utente. I "punti di entrata", attraverso i quali l'utente può immergersi completamente nella narrazione, gli permettono di ricostruire il significato complessivo di un’opera integrando vari media.</p>
                            </div>
                        </div>
                        <div class="col-md-4 scroll-in-animation" data-animation="fadeInRight">
                            <div class="col-icon">
                                <i class="li_video"></i>
                            </div>
                            <div class="col-content">
                                <h4>Postmodern<span class="highlight"><br/>Cinema</span></h4>
                                <p>La narrativa postmoderna si caratterizza per il disordine temporale, il disprezzo della narrazione lineare, la commistione delle forme e la sperimentazione nel linguaggio. La teoria del rifiutare le teorie. Il postmodernismo è incredulità nei confronti delle metanarrazioni.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view" id="how-we-work">
            <div class="content colors-h">
                <div class="container">
                    <h3 class="scroll-in-animation" data-animation="fadeInTop"><span class="highlight">How</span> We Work</h3>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p class="text-center scroll-in-animation" data-animation="fadeInDown">Co-creation e peer-production sono reazioni orizzontali al divario verticale tra prosumer digitali e grandi industrie culturali globali.</p>
                        </div>
                    </div>
                    <div class="row icon-set">
                        <div class="col-md-3 text-center">
                            <p>
                                <i class="li_location circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                            </p>
                            <p class="title"><span class="underline-text">Torino</span></p>
                            <p>RESHAPE Stage nasce ispirato dalla Torino dinamica degli ultimi dieci anni. Indubbiamente diventata capitale della techno in Italia, grazie a eventi e festival che fanno ballare decine di migliaia di clubbers ogni anno, Torino ricopre un ruolo importante nel panorama dell’elettronica europea!</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p>
                                <i class="li_bulb circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                            </p>
                            <p class="title"><span class="underline-text">Creativi</span></p>
                            <p>RESHAPE Stage ospita presso El Manicom la creatività e le opere culturali di artisti digitali, performers, tecnici informatici, ingegneri del cinema e del suono ideatori dell’universo narrativo transmediale. Per questo motivo RESHAPE Stage cerca la collaborazione degli stessi attori protagonisti della scena techno locale e nazionale.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p>
                                <i class="li_vynil circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                            </p>
                            <p class="title"><span class="underline-text">Works</span></p>
                            <p>Musica & Cinema sono le forme d’espressione artistica più efficaci per il coinvolgimento emotivo e immersivo del film-concerto. RESHAPE Stage mixa passato, presente e futuro: analogico, digitale e virtuale per format innovativi, prodotti culturali e creativi emergenti.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p>
                                <i class="li_paperplane circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                            </p>
                            <p class="title"><span class="underline-text">Spirit</span></p>
                            <p>Free Spirit & Joint Pleasure sono le filosofie di vita del creativo digitale. Le idee del brain-storming sono stimolate all’associazione metaforica di più simboli, che l’artista deve sapere interpretare e rappresentare per comunicare la natura urbana e post-industriale di Torino.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view" id="who-we-are">
            <div class="content pane">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 stretch-height pane scroll-in-animation" data-animation="fadeInRight">
                            <div class="view fluid-height">
                                <img alt class="bg" src="/front/images/placeholders/coverbg.png" />
                                <div class="content incut colors-d background-transparent">
                                    <div class="position-middle-center text-center">
                                        <a class="button background-lite-c heading-c" href="#work">View Our Work</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  stretch-height pane scroll-in-animation" data-animation="fadeInLeft">
                            <div class="view fluid-height">
                                <div class="content incut colors-h background-solid">
                                    <div class="position-middle-center">
                                        <h3 class="text-left"><span class="highlight">How</span> We Are</h3>
                                        <p class="subtitle highlight"><strong>No-Budget & No-Profit</strong></p>
                                        <p>Durante il nostro primo anno di vita e di lavoro al progetto ci siamo auto-finanziati secondo una logica di co-creation.</p>
                                        <p>RESHAPE Stage è un'associazione culturale No-Profit che rende un doppio servizio: il format innovativo nel B2B e il premio reale nel B2C.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="view">
            <div class="content colors-e background-solid">
                <div class="container">
                    <h2>Team</h2>
                    <p class="header-details scroll-in-animation" data-animation="fadeInDown"><span class="highlight">Who </span>We Are</p>
                    <p class="lead scroll-in-animation" data-animation="fadeInDown">Noi siamo <strong class="highlight">Ingegneri del Cinema, del Suono e dei Nuovi Media.</strong> Formati dal Politecnico di Torino e ispirati dalla scena techno locale, siamo arrivati al Movement Torino Music Festival grazie a una rete di collaborazioni che abbiamo costruito in 2 anni.</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-4  col-xs-4 scroll-in-animation" data-animation="fadeInDown">
                            <div class="hover-overlay">
                                <img alt="Mike Johnson" src="/front/images/our-team/webdesign.jpg" title="Mike Johnson" class="fluid-width">
                                <div class="overlay background-90-b">
                                    <div>
                                        <p class="text-center text-uppercase heading-b">
                                            Website design and SEO team
                                        </p>
                                        <div class="separator-small"></div>
                                        <p class="text-center">
                                            <a target="_blank" href="https://www.linkedin.com/in/mlnmtt/"><i class="fa fa-linkedin heading-b"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>
                                    <span class="title">Website design and SEO team</span>
                                    <br/>
                                    <span class="highlight">Website design and SEO team & Website design and SEO team</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-xs-4 scroll-in-animation" data-animation="fadeInDown">
                            <div class="hover-overlay">
                                <img alt="Jessica Specter" src="/front/images/our-team/webdesign.jpg" title="Jessica Specter" class="fluid-width">
                                <div class="overlay background-90-b">
                                    <div>
                                        <p class="text-center text-uppercase heading-b">
                                            Produttore Techno, Sound Designer, 3D Artist, Regista, Montatore.
                                        </p>
                                        <div class="separator-small"></div>
                                        <p class="text-center">
                                            <a target="_blank" href="https://soundcloud.com/luca-leli"><i class="fa fa-soundcloud heading-b"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>
                                    <span class="title">Luca Leli</span>
                                    <br/>
                                    <span class="highlight">Vice-Presidente & Fondatore</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-xs-4 scroll-in-animation" data-animation="fadeInDown">
                            <div class="hover-overlay">
                                <img src="/front/images/our-team/webdesign.jpg" class="fluid-width">
                                <div class="overlay background-90-b">
                                    <div>
                                        <p class="text-center text-uppercase heading-b">
                                            Regista Radio, 3D Artist,  Programmatore IoT, Coder, App Designer.
                                        </p>
                                        <div class="separator-small"></div>
                                        <p class="text-center">
                                            <a target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr heading-b"></i></a>
                                            <a target="_blank" href="https://www.dropbox.com/"><i class="fa fa-dropbox heading-b"></i></a>
                                            <a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing heading-b"></i></a>
                                            <a target="_blank" href="http://vk.com/"><i class="fa fa-vk heading-b"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>
                                    <span class="title">Giampaolo Marinaro</span>
                                    <br/>
                                    <span class="highlight">Segretario & Fondatore</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4  col-xs-4 scroll-in-animation" data-animation="fadeInDown">
                            <div class="hover-overlay">
                                <img src="/front/images/our-team/webdesign.jpg" class="fluid-width">
                                <div class="overlay background-90-b">
                                    <div>
                                        <p class="text-center text-uppercase heading-b">
                                            Regista, Autore, Direttore della Fototgrafia, Operatore Video, Scrittore.
                                        </p>
                                        <div class="separator-small"></div>
                                        <p class="text-center">
                                            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter heading-b"></i></a>
                                            <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin heading-b"></i></a>
                                            <a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus heading-b"></i></a>
                                            <a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square heading-b"></i></a>
                                            <a target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr heading-b"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>
                                    <span class="title">Giuliano Cammarata</span>
                                    <br/>
                                    <span class="highlight">Socio</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-xs-4 scroll-in-animation" data-animation="fadeInDown">
                            <div class="hover-overlay">
                                <img src="/front/images/our-team/webdesign.jpg" class="fluid-width">
                                <div class="overlay background-90-b">
                                    <div>
                                        <p class="text-center text-uppercase heading-b">
                                            Coder, Produttore Techno, DJ, 3D Artist,  Sound Designer, UX Designer.
                                        </p>
                                        <div class="separator-small"></div>
                                        <p class="text-center">
                                            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter heading-b"></i></a>
                                            <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin heading-b"></i></a>
                                            <a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus heading-b"></i></a>
                                            <a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square heading-b"></i></a>
                                            <a target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr heading-b"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>
                                    <span class="title">Danilo Ronchi</span>
                                    <br/>
                                    <span class="highlight">Socio</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-xs-4 scroll-in-animation" data-animation="fadeInDown">
                            <div class="hover-overlay">
                                <img alt="Lynda Smith" src="/front/images/our-team/webdesign.jpg" title="Lynda Smith" class="fluid-width">
                                <div class="overlay background-90-b">
                                    <div>
                                        <p class="text-center text-uppercase heading-b">
                                            DJ, Produttore Techno, Sound Designer, Fonico.
                                        </p>

                                        <div class="separator-small"></div>
                                        <p class="text-center">
                                            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter heading-b"></i></a>
                                            <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin heading-b"></i></a>
                                            <a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus heading-b"></i></a>
                                            <a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square heading-b"></i></a>
                                            <a target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr heading-b"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>
                                    <span class="title">Lorenzo Lanari</span>
                                    <br/>
                                    <span class="highlight">Socio</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="scroll-in-animation" data-animation="fadeInDown"><span class="highlight">We Love</span> Techno Music</h3>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p class="text-center scroll-in-animation" data-animation="fadeInDown">La techno è diventata ormai un business e la mercificazione dell'arte del DJ sta trascinando nell'oblio le vecchie radici underground della subcultura più free degli ultimi 30 anni. Noi crediamo che la risposta sia la cultura overground.</p>
                        </div>
                    </div>
                </div>
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
                                            <input type="text" name="your-name" value="" size="40" placeholder="Name" data-validation-required-message="Please fill the required field." required>
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
    <!-- END: Page content -->
@endsection
