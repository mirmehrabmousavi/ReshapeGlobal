@extends('front.layout.app')

@section('content')
    <img class="bg" src="/front/images/placeholders/1920x1200-0.jpg"/><img class="bg"
                                                                           src="/front/images/placeholders/1920x1200-1.jpg"/>
    <section id="elements">
        <div class="view">
            <img alt class="bg" src="/front/images/placeholders/1920x1200-2.jpg"/><img alt class="bg"
                                                                                       src="/front/images/placeholders/1920x1200-0.jpg"/>
            <div class="content half-size colors-h">
                <h2 class=" scroll-in-animation" data-animation="fadeInDown">{!! __('messages.companyRegistration.company registration') !!}</h2>
                <div class="header-details scroll-in-animation" data-animation="fadeInDown">{!! __('messages.companyRegistration.company registration') !!}</div>
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
@endsection
