@extends('front.layouts.app')
@section('content')
    <div class="colorlib-loader"></div>

    <div id="page">

        <x-navbar />

        <aside id="colorlib-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>We help to solve business law solution</h1>
                                        <h2>Your Legal Solution starts here!</h2>
                                        <p><a class="btn btn-primary btn-lg" href="#">Make An Appointment</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Your ultimate law &amp; legal Sulution</h1>
                                        <h2>Visit our sites here! <a href="#" target="_blank">mahesa-lawyers.com</a>
                                        </h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An
                                                Appointment</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Defend Your Constitutional Right with Legal Help</h1>
                                        <h2>Visit our sites here! <a href="#" target="_blank">mahesa-lawyers.com</a>
                                        </h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An
                                                Appointment</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="intro-bg">
            <div class="container">
                <div id="colorlib-intro">
                    <div class="third-col">
                        <span class="icon"><i class="icon-cog"></i></span>
                        <h2>Mahesa Partnership</h2>
                        <p>Advocates and Legal Consultants</p>
                        <p>
                        <ul>
                            <li>ARBITRATION</li>
                            <li>CONSTRUCTION AND ENGINEERING</li>
                            <li>CONTRAQCTS/AGREEMENTS</li>
                            <li>GENERAL CORPORATE</li>
                            <li>LABOR AND EMPLOYMENT</li>
                            <li>FRANCHISING</li>
                            <li>INFORMATION TECNOLOGY</li>
                            <li>INTERNATIONAL TRADE</li>
                            <li>FOREIGN DIRECT INVESTMENT</li>
                            <li>JOINT VENTURE</li>
                        </ul>
                        </p>
                    </div>
                    <div class="third-col third-col-color">
                        <ul>
                            <li>LAND AND AGRARTIAN</li>
                            <li>LEASING AND EQUIPMENT</li>
                            <li>MARITIME</li>
                            <li>MEDIA</li>
                            <li>MERGERS AND ACQUISITIONS</li>
                            <li>PRIVATIZATION</li>
                            <li>PROJECT AND INFRASTRUCTURE FINANCING</li>
                            <li>REAL ESTATE</li>
                            <li>TELECOMUNICATION</li>
                            <li>FAMILOY LAW</li>
                            <li>DEBT RESTRUCTURING</li>
                            <li>COMPONY RESTURING</li>
                            <li>LITIGATION</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- // Statistics --}}
        <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/img_bg_3.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    @forelse ($statistics as $statistic)
                        <div class="col-md-3 text-center animate-box">
                            <span class="icon">
                                <img src="{{ Storage::url($statistic->icon) }}" alt="">
                            </span>
                            <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $statistic->goal }}"
                                data-speed="5000" data-refresh-interval="50">
                            </span>
                            <span class="colorlib-counter-label">
                                {{ $statistic->name }}
                            </span>
                        </div>
                    @empty
                        <p>Belum ada data terbaru</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div id="colorlib-content">
            <div class="video colorlib-video" style="background-image: url(images/video.jpg);">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
                <div class="overlay"></div>
            </div>
            <div class="choose animate-box">
                <div class="colorlib-heading">
                    <h2>16 Years of experienced serving a high quality services</h2>
                    <p>Mahesa Partnership has the depth and breadth of Indonesian legal experience and
                        knowledge to understand each client's problems, ask the questions the client has not thought
                        to ask, and formulate appropriate solutions. When business decisions must be based on
                        incomplete information, we advise our clients of the risks involved. Our expertise and
                        judgment as legal practitioners play a vital role in helping clients minimize risk and achieve
                        their business goals.
                    </p>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        Adoption Law 50%
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        Family Law 80%
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        Real Estate Law 70%
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90"
                        aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        Personal Injury Law 40%
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-practice">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
                        <h2>THE PRACTICE AREA</h2>
                        <p>As a general practice law firm, we provide you with a broad spectrum of legal matters. Our
                            attorneys routinely work in cooperation to ensure that you receive the best legal
                            representation possible.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-courthouse"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="#">Banking & Finance</a></h3>
                                <p>Advising financial institutions and clients on banking regulations, financing structures,
                                    and risk management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-padlock"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="#">Arbitration</a></h3>
                                <p>Comprehensive legal services in aviation matters, including regulatory
                                    compliance,licensing, and dispute handling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-folder"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="#">Aviation Law</a></h3>
                                <p>Comprehensive legal services in aviation matters, including regulatory compliance,
                                    licensing, and dispute handling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-handcuffs"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="#">Contracts & Agreements</a></h3>
                                <p>Drafting, reviewing, and negotiating contracts to protect your business interests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-handcuffs"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="#">Information Technology</a></h3>
                                <p>Advising on IT law, data protection, cybersecurity, and digital business compliance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-libra"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="#">Litigation</a></h3>
                                <p>Representing clients in court proceedings across civil and commercial disputes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center animate-box">
                        <p><a class="btn btn-primary btn-lg btn-learn" href="#">View More <i
                                    class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-started" style="background-image:url(images/img_bg_2.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading colorlib-heading2">
                        <h2>16 Years of Experienced in Various cases</h2>
                        <p>We help people effectively fight their offenders back and successfully defend their own
                            stand!</p>
                        <p><a href="#" class="btn btn-primary btn-lg">Consultation</a></p>
                    </div>
                </div>
            </div>
        </div>


        <div id="colorlib-testimonial" class="colorlib-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                        <h2>What are the clients says</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">
                                @forelse ($testimonials as $testimonial)
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="{{ Storage::url($testimonial->client->avatar) }}"
                                                    alt="user">
                                            </figure>
                                            <span>{{ $testimonial->client->name }}
                                                <a>{{ $testimonial->client->occupation }}</a></span>
                                            <blockquote>
                                                <p>{{ $testimonial->message }}</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                @empty
                                    <p>Belum ada data terbaru</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-consult">
            <div class="video colorlib-video" style="background-image: url(images/video.jpg);"
                data-stellar-background-ratio="0.5">
            </div>
            <div class="choose choose-form animate-box">
                <div class="colorlib-heading">
                    <h2>Free Legal Consultation</h2>
                </div>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" id="subject" class="form-control"
                                placeholder="Your subject of this message">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                placeholder="Say something about us"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>

        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md text-center">
                    {{-- <div class="col-md-3 colorlib-widget">
                        <h4>Lawfirm</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                            adipisci architecto culpa amet.</p>
                    </div> --}}
                    <div class="col-md-3 col-md-push-1">
                        <h4>Navigation</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Practice Areas</a></li>
                            <li><a href="#">Won Cases</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li>JL. HR. RASUNA SAID, KUNINGAN <br> JAKARTA SELATAN 12940, INDONESIA</li>
                            {{-- <li><a href="tel://1234567920">+ 1235 2355 98</a></li> --}}
                            <li><a href="mailto:mahesa.bangun@mahesa-lawyers.com">mahesa.bangun@mahesa-lawyers.com</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Opening Hours</h4>
                        <ul class="colorlib-footer-links">
                            <li>Mon - Thu: 9:00 - 21 00</li>
                            <li>Fri 8:00 - 21 00</li>
                            <li>Sat 9:30 - 15: 00</li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2026 Mahesa Partnership.
                                {{-- All Rights Reserved. Created by
                                <a href="#">Ubaydillah</a> --}}
                            </small>
                        </p>
                        <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
@endsection

@push('after-scripts')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
