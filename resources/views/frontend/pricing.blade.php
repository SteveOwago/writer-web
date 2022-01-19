@extends('layouts.frontend')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('frontend/images/xbg_2.jpg.pagespeed.ic.rof5L3aF1A.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 mt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index-2.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Pricing <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Choose The Right Plan</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Basic Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">49K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Beginner Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">79K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Premium Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">109K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Ultimate Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">149K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">FAQs</span>
                <h2 class="mb-3">Frequesntly Ask Question</span></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How to Enroll This Online Courses?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. It's also
                                worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                                the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Where It is hidden by default, until the collapse?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It is hidden by default, until the collapse plugin adds the appropriate classes that we use
                                to style each element. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How It is hidden by default, until the collapse?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It is hidden by default, until the collapse plugin adds the appropriate classes that we use
                                to style each element. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro py-5 bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-lg-5">
                        <div class="col-md-7 text-lg-right">
                            <h2 class="mb-0">Newsletter - Stay tune and get the latest update</h2>
                            <p>Far far away, behind the word mountains</p>
                        </div>
                        <div class="col-md-5 border-left d-flex align-items-center">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex align-items-center">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <a href="#" class="btn-icon"><span class="fa fa-paper-plane"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
