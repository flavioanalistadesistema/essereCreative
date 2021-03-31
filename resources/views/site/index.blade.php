@extends('site._layouts.app')
@section('title', 'home')

@section('body')
<section class="hero-wrap d-flex js-fullheight">
    <div class="forth js-fullheight d-flex align-items-center">
        <div class="text">
            <span class="subheading">OLÁ,</span>
            <div class="ecreative-cinzel">
                <h1>EU SOU DENIS ISHIHARA</h1>
            </div>
            <h2 class="ecreative-quattrocento-regular ecreative-lora-text">GESTOR DE TRÁFEGO PAGO</h2>
            <p><a href="#" class="btn-custom py-3 pr-2"><strong> Contato Aqui</strong></a></p>
        </div>
    </div>
    <div class="third about-img js-fullheight" style="background-image: url(images/home/dennis_home.png);">
        <a href="https://www.youtube.com/watch?v=ZQQ2zgyKhDY" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></a>
        </a>
    </div>

</section>

<section class="ftco-consult bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-lg-center">
                <smail class="mb-4 mb-lg-0">Peça uma Análise gratuita do seu <strong>negócio.</strong></smail>
            </div>
            <div class="col-lg-12">
                <form action="#" class="consult-form">
                    <div class="d-lg-flex align-items-md-end">
                        <div class="form-group mb-3 mb-lg-0 mr-4">
                            <label for="#">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mb-3 mb-lg-0 mr-4">
                            <label for="#">Email Address</label>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-3 mb-lg-0 mr-4">
                            <label for="#">Categories(optional)</label>
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Family Law</option>
                                        <option value="">Labor Law</option>
                                        <option value="">Business Ligitation</option>
                                        <option value="">Employment Law</option>
                                        <option value="">Criminal Law</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 mb-lg-0 mr-4">
                            <label for="#">Message</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control d-flex align-items-center" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-lg-7 heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-4">My Legal Practice Areas</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span><img src="{{asset('images/home/icon/trafego.png')}}" alt="trafego"> </span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Trafego</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span><img src="{{asset('images/home/icon/retencao.png')}}" alt="retencao"> </span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Retenção</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span><img src="{{asset('images/home/icon/engajamento.png')}}" alt="engajamento"> </span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Engajamento</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span><img src="{{asset('images/home/icon/conversao.png')}}" alt="conversao"> </span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Conversão</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-lg-4">
                <div class="heading-section pl-md-5 heading-section-white">
                    <div class="ftco-animate">
                        <span class="subheading">Some</span>
                        <h2 class="mb-4">Interesting Facts</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="3500">0</strong>
                                <span>Trusted clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="2000">0</strong>
                                <span>Solved Cases</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="800">0</strong>
                                <span>Awards Win</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="2450">0</strong>
                                <span>Winning Case</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftc-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url(images/ceo_essereCreative_1.png);">
            </div>
            <div class="col-md-7 wrap-about pt-md-5 ftco-animate">
                <div class="heading-section mb-5 pt-5 pl-md-5">
                    <div class="pr-md-5 mr-md-5 text-md-right">
                        <span class="subheading">Providing</span>
                        <h2 class="mb-4">I Assure you that you will win</h2>
                    </div>
                </div>
                <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
                    <div class="services-wrap d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><img src="{{asset('images/home/icon/negocio.png')}}" alt="negocio"> </span>
                        </div>
                        <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                            <h3 class="heading">Visibilidade do negício</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                    <div class="services-wrap d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><img src="{{asset('images/home/icon/conversao.png')}}" alt="conversao"> </span>
                        </div>
                        <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                            <h3 class="heading">Melhora taxa de conversão</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                    <div class="services-wrap d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><img src="{{asset('images/home/icon/clientes.png')}}" alt="clientes"> </span>
                        </div>
                        <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                            <h3 class="heading">Atrair clientes</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">My satisfied customer says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5 text-center">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5 text-center">
                            <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5 text-center">
                            <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5 text-center">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5 text-center">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/ceo_essereCreative_1.png);">
                <a href="https://www.youtube.com/watch?v=TUapwunTCYA" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section pt-md-5 pl-md-5 mb-5">
                    <div class="ml-md-0">
                        <span class="subheading">Ola, eu sou</span>
                        <h2 class="mb-4">Denis Ishihara</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>
                        Sou Fundador da Essere Creative - Agência de Marketing Digital, Especialista em Tráfego Pago.
                        Atuei nos últimos 3 anos em E-Commerce's e como Analista de Marketing atuando em alguns serviços como :
                        <i>tráfego pago, designer, fotografia, gravação e edição de vídeo, CRM e gestão de ‘blog’,
                            entre outros.</i>
                    </p>
                    <h4 class="mb-1">Nossa missão</h4>
                    <p>
                        é prestar serviços de consultoria de Tráfego Pago para ajudar empreendedores
                        e empresários a ofertarem seus produtos e serviços ao seu público ideal,
                        de forma assertiva, que aumente seu ROI, gerando mais vendas e oportunidades de negócio para nossos clientes.
                    </p>
                    <h4 class="mb-1">Visão</h4>
                    <p>
                        Ser uma referência nacional no tráfego pago.
                        Gerando resultados consistentes, recorrentes e satisfação aos nossos clientes.
                    </p>
                    <h4 class="mb-1">Excelência</h4>
                    <p>
                        Buscar sempre os melhores resultados em tudo o que fazemos,
                        através dos propósitos, habilidades e competências.
                    </p>
                    <h4 class="mb-1">Meu Background Educacional</h4>
                    <p>
                    <ul>
                        <li><strong>Universidade Presbiteriana Mackenzie 2007</strong></li>
                        <ul>
                            <li><strong>Graduação em Publicidade, Propaganda e Marketing especializado em marketing</strong></li>
                        </ul>
                    </ul>
                    <ul>
                        <li><strong>Universidade Presbiteriana Mackenzie 2010</strong></li>
                        <ul>
                            <li><strong>Pós-Graduado em Administração de Negócios</strong></li>
                        </ul>
                    </ul>
                    </p>
                    <ul class="ftco-social d-flex">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Our latest update</span>
                <h2 class="mb-4">Case Study</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text py-4">
                        <div class="meta mb-3">
                            <div><a href="#">Oct. 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry" data-aos-delay="100">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text py-4">
                        <div class="meta mb-3">
                            <div><a href="#">Oct. 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry" data-aos-delay="200">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text py-4">
                        <div class="meta mb-3">
                            <div><a href="#">Oct. 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-md-5 pt-5">
                <form action="#" class="consult-form py-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="#">Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="#">Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="#">Date</label>
                                <div class="form-field">
                                    <input type="text" class="form-control checkin_date" placeholder="Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="#">Categories(optional)</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Family Law</option>
                                            <option value="">Labor Law</option>
                                            <option value="">Business Ligitation</option>
                                            <option value="">Employment Law</option>
                                            <option value="">Criminal Law</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="#">Message</label>
                                <textarea name="" id="" cols="30" rows="7" class="form-control form-control-2 d-flex align-items-center" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <input type="submit" value="Make an Appointment" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-7 wrap-about pb-5 ftco-animate">
                <div class="heading-section mb-md-5 pl-md-5 mt-md-5 pt-3">
                    <div class="pl-md-3">
                        <span class="subheading">Appointment</span>
                        <h2 class="mb-4">Make An Appointment</h2>
                    </div>
                </div>
                <div class="pl-md-3">
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5 d-flex">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Me</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Usefull Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#">Family Law</a></li>
                        <li><a href="#">Drug Law</a></li>
                        <li><a href="#">Insurance Law</a></li>
                        <li><a href="#">Criminal Law</a></li>
                        <li><a href="#">Business Law</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Practice Areas</a></li>
                        <li><a href="#">Appointment</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection
