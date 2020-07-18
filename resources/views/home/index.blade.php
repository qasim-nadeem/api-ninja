@extends('base.guest')

@section('content')

<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
            <img class="one-third js-fullheight align-self-end order-md-first img-fluid" src="images/undraw_co-working_825n.svg" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">API Ninja</span>
                    <h1 class="mb-3"><span>Dummy</span> <span>API</span> <span>End Points</span></h1>
                    <p>Create Dummy api endpoints to add soul to you front-end app.</p>
                    <form action="#" method="post">
                        @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="app-name" placeholder="Enter App name">
                    </div>
                    <p><input type="submit" class="btn btn-secondary px-4 py-3" value="Create Api"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<section class="ftco-section ftco-partner">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm ftco-animate">--}}
{{--                <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm ftco-animate">--}}
{{--                <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm ftco-animate">--}}
{{--                <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm ftco-animate">--}}
{{--                <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>--}}
{{--            </div>--}}
{{--            <div class="col-sm ftco-animate">--}}
{{--                <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- <section class="ftco-domain">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-5 heading-white mb-4 mb-sm-4 mb-lg-0 ftco-animate">
                <h2>Search Your Domain Name</h2>
                <p>A small river named Duden flows by their place</p>
            </div>
            <div class="col-lg-7 p-5 ftco-wrap ftco-animate">
                <form action="#" class="domain-form d-flex mb-3">
          <div class="form-group domain-name">
            <input type="text" class="form-control name px-4" placeholder="Enter your domain name...">
          </div>
          <div class="form-group domain-select d-flex">
              <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select name="" id="" class="form-control">
                  <option value="">.com</option>
                <option value="">.net</option>
                <option value="">.biz</option>
                <option value="">.co</option>
                <option value="">.me</option>
              </select>
            </div>
            <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
            </div>
        </form>
        <p class="domain-price mt-2">
            <span><small>.com</small> $9.75</span>
            <span><small>.net</small> $9.50</span>
            <span><small>.biz</small> $8.95</span>
            <span><small>.co</small> $7.80</span>
            <span><small>.me</small> $7.95</span>
        </p>
            </div>
        </div>
    </div>
</section> -->

{{--<section class="ftco-section services-section bg-light">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-8 text-center heading-section ftco-animate">--}}
{{--                <h2 class="mb-3">Cloud Services</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services d-flex">--}}
{{--                    <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                        <span class="flaticon-cloud"></span>--}}
{{--                    </div>--}}
{{--                    <div class="media-body pl-4">--}}
{{--                        <h3 class="heading">Cloud databases</h3>--}}
{{--                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services d-flex">--}}
{{--                    <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                        <span class="flaticon-server"></span>--}}
{{--                    </div>--}}
{{--                    <div class="media-body pl-4">--}}
{{--                        <h3 class="heading">Website Hosting</h3>--}}
{{--                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services d-flex">--}}
{{--                    <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                        <span class="flaticon-customer-service"></span>--}}
{{--                    </div>--}}
{{--                    <div class="media-body pl-4">--}}
{{--                        <h3 class="heading">File Storage</h3>--}}
{{--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services d-flex">--}}
{{--                    <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                        <span class="flaticon-life-insurance"></span>--}}
{{--                    </div>--}}
{{--                    <div class="media-body pl-4">--}}
{{--                        <h3 class="heading">Forex Trading</h3>--}}
{{--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services d-flex">--}}
{{--                    <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                        <span class="flaticon-cloud-computing"></span>--}}
{{--                    </div>--}}
{{--                    <div class="media-body pl-4">--}}
{{--                        <h3 class="heading">File Backups</h3>--}}
{{--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services d-flex">--}}
{{--                    <div class="icon d-flex align-items-center justify-content-center">--}}
{{--                        <span class="flaticon-settings"></span>--}}
{{--                    </div>--}}
{{--                    <div class="media-body pl-4">--}}
{{--                        <h3 class="heading">Remote Desktop</h3>--}}
{{--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-8 text-center heading-section ftco-animate">--}}
{{--                <h2 class="mb-3">What Our Software Can Do For You</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 py-5 d-flex align-items-center">--}}
{{--                <img src="images/undraw_referral_4ki4.svg" class="img-fluid" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 py-5">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12 ftco-animate d-flex">--}}
{{--                        <div class="media block-6 services border d-flex p-3 mb-3">--}}
{{--                            <div class="icon icon-2 d-flex align-items-center justify-content-center">--}}
{{--                                <span class="flaticon-cloud-computing"></span>--}}
{{--                            </div>--}}
{{--                            <div class="media-body pl-4">--}}
{{--                                <h3 class="heading">Resposive Design</h3>--}}
{{--                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 ftco-animate d-flex">--}}
{{--                        <div class="media block-6 services border d-flex p-3 mb-3">--}}
{{--                            <div class="icon icon-2 d-flex align-items-center justify-content-center">--}}
{{--                                <span class="flaticon-cloud"></span>--}}
{{--                            </div>--}}
{{--                            <div class="media-body pl-4">--}}
{{--                                <h3 class="heading">Andriod Apps Development</h3>--}}
{{--                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 ftco-animate d-flex">--}}
{{--                        <div class="media block-6 services border d-flex p-3 mb-3">--}}
{{--                            <div class="icon icon-2 d-flex align-items-center justify-content-center">--}}
{{--                                <span class="flaticon-server"></span>--}}
{{--                            </div>--}}
{{--                            <div class="media-body pl-4">--}}
{{--                                <h3 class="heading">iOs Apps Development</h3>--}}
{{--                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 ftco-animate d-flex">--}}
{{--                        <div class="media block-6 services border d-flex p-3 mb-3">--}}
{{--                            <div class="icon icon-2 d-flex align-items-center justify-content-center">--}}
{{--                                <span class="flaticon-database"></span>--}}
{{--                            </div>--}}
{{--                            <div class="media-body pl-4">--}}
{{--                                <h3 class="heading">UX/UI Design</h3>--}}
{{--                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 ftco-animate d-flex">--}}
{{--                        <div class="media block-6 services border d-flex p-3 mb-3">--}}
{{--                            <div class="icon icon-2 d-flex align-items-center justify-content-center">--}}
{{--                                <span class="flaticon-database"></span>--}}
{{--                            </div>--}}
{{--                            <div class="media-body pl-4">--}}
{{--                                <h3 class="heading">Print Ready Design</h3>--}}
{{--                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section ftco-counter img" id="section-counter">--}}
{{--    <div class="container pb-md-5">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">--}}
{{--                <h2 class="mb-3">We Always Try To Understand Users Expectation</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-10">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                        <div class="block-18 text-center">--}}
{{--                            <div class="text">--}}
{{--                                <strong class="number" data-number="12000">0</strong>--}}
{{--                                <span>Download</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                        <div class="block-18 text-center">--}}
{{--                            <div class="text">--}}
{{--                                <strong class="number" data-number="100">0</strong>--}}
{{--                                <span>Awards Won</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                        <div class="block-18 text-center">--}}
{{--                            <div class="text">--}}
{{--                                <strong class="number" data-number="4050">0</strong>--}}
{{--                                <span>Contributors</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                        <div class="block-18 text-center">--}}
{{--                            <div class="text">--}}
{{--                                <strong class="number" data-number="9000">0</strong>--}}
{{--                                <span>Satisfied Customers</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-10">--}}
{{--                <div class="intro">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-8">--}}
{{--                            <h3>Have any question about us?</h3>--}}
{{--                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 d-flex align-items-center justify-content-center">--}}
{{--                            <a href="#" class="btn btn-tertiary px-4 py-3">Get in Touch</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section ftco-no-pb bg-light ftco-faqs">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="img img-faqs mb-4 mb-sm-0" style="background-image:url(images/about-2.jpg);">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 pl-lg-5">--}}
{{--                <div class="heading-section mb-5 mt-5 mt-lg-0">--}}
{{--                    <!-- <span class="subheading">FAQs</span> -->--}}
{{--                    <h2 class="mb-3">Frequently Asks Questions</h2>--}}
{{--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                </div>--}}
{{--                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0" id="headingOne">--}}
{{--                            <h2 class="mb-0">--}}
{{--                                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                    <p class="mb-0">How to Make an Account?</p>--}}
{{--                                    <i class="fa" aria-hidden="true"></i>--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">--}}
{{--                            <div class="card-body py-3 px-0">--}}
{{--                                <ol>--}}
{{--                                    <li>Far far away, behind the word mountains</li>--}}
{{--                                    <li>Consonantia, there live the blind texts</li>--}}
{{--                                    <li>When she reached the first hills of the Italic Mountains</li>--}}
{{--                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>--}}
{{--                                    <li>Separated they live in Bookmarksgrove right</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0" id="headingTwo" role="tab">--}}
{{--                            <h2 class="mb-0">--}}
{{--                                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                    <p class="mb-0">How to manage your Dashboard?</p>--}}
{{--                                    <i class="fa" aria-hidden="true"></i>--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">--}}
{{--                            <div class="card-body py-3 px-0">--}}
{{--                                <ol>--}}
{{--                                    <li>Far far away, behind the word mountains</li>--}}
{{--                                    <li>Consonantia, there live the blind texts</li>--}}
{{--                                    <li>When she reached the first hills of the Italic Mountains</li>--}}
{{--                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>--}}
{{--                                    <li>Separated they live in Bookmarksgrove right</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0" id="headingThree" role="tab">--}}
{{--                            <h2 class="mb-0">--}}
{{--                                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                    <p class="mb-0">How to grow your investments funds?</p>--}}
{{--                                    <i class="fa" aria-hidden="true"></i>--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">--}}
{{--                            <div class="card-body py-3 px-0">--}}
{{--                                <ol>--}}
{{--                                    <li>Far far away, behind the word mountains</li>--}}
{{--                                    <li>Consonantia, there live the blind texts</li>--}}
{{--                                    <li>When she reached the first hills of the Italic Mountains</li>--}}
{{--                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>--}}
{{--                                    <li>Separated they live in Bookmarksgrove right</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-header p-0" id="headingFour" role="tab">--}}
{{--                            <h2 class="mb-0">--}}
{{--                                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">--}}
{{--                                    <p class="mb-0">What are those requirements for businesses?</p>--}}
{{--                                    <i class="fa" aria-hidden="true"></i>--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">--}}
{{--                            <div class="card-body py-3 px-0">--}}
{{--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section bg-light">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5 pb-3">--}}
{{--            <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--                <h2 class="mb-4">Our Best Pricing</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row d-flex">--}}
{{--            <div class="col-lg-3 col-md-6 ftco-animate">--}}
{{--                <div class="block-7">--}}
{{--                    <div class="text-center">--}}
{{--                        <h2 class="heading">Basic Plan</h2>--}}
{{--                        <span class="price"><sup>$</sup> <span class="number">0<small class="per">/mo</small></span>--}}
{{--		            <span class="excerpt d-block">100% free. Forever</span>--}}
{{--		            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>--}}

{{--		            <ul class="pricing-text mb-4">--}}
{{--		              <li><strong>150 GB</strong> Bandwidth</li>--}}
{{--		              <li><strong>100 GB</strong> Storage</li>--}}
{{--		              <li><strong>$1.00 / GB</strong> Overages</li>--}}
{{--		              <li>All features</li>--}}
{{--		            </ul>--}}
{{--		            <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 ftco-animate">--}}
{{--                <div class="block-7">--}}
{{--                    <div class="text-center">--}}
{{--                        <h2 class="heading">Advance Plan</h2>--}}
{{--                        <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>--}}
{{--                        <span class="excerpt d-block">All features are included</span>--}}
{{--                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>--}}

{{--                        <ul class="pricing-text mb-4">--}}
{{--                            <li><strong>450 GB</strong> Bandwidth</li>--}}
{{--                            <li><strong>400 GB</strong> Storage</li>--}}
{{--                            <li><strong>$2.00 / GB</strong> Overages</li>--}}
{{--                            <li>All features</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 ftco-animate">--}}
{{--                <div class="block-7">--}}
{{--                    <div class="text-center">--}}
{{--                        <h2 class="heading">Expert Plan</h2>--}}
{{--                        <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>--}}
{{--                        <span class="excerpt d-block">All features are included</span>--}}
{{--                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>--}}

{{--                        <ul class="pricing-text mb-4">--}}
{{--                            <li><strong>250 GB</strong> Bandwidth</li>--}}
{{--                            <li><strong>200 GB</strong> Storage</li>--}}
{{--                            <li><strong>$5.00 / GB</strong> Overages</li>--}}
{{--                            <li>All features</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 ftco-animate">--}}
{{--                <div class="block-7">--}}
{{--                    <div class="text-center">--}}
{{--                        <h2 class="heading">Pro Plan</h2>--}}
{{--                        <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>--}}
{{--                        <span class="excerpt d-block">All features are included</span>--}}
{{--                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>--}}

{{--                        <ul class="pricing-text mb-4">--}}
{{--                            <li><strong>450 GB</strong> Bandwidth</li>--}}
{{--                            <li><strong>400 GB</strong> Storage</li>--}}
{{--                            <li><strong>$20.00 / GB</strong> Overages</li>--}}
{{--                            <li>All features</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section testimony-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5 pb-3">--}}
{{--            <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--                <h2 class="mb-4">What Users Saying</h2>--}}
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row ftco-animate justify-content-center">--}}
{{--            <div class="col-md-10">--}}
{{--                <div class="carousel-testimony owl-carousel ftco-owl">--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap d-flex">--}}
{{--                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">--}}
{{--                    <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                      <i class="icon-quote-left"></i>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                <p class="name">Mark Web</p>--}}
{{--                                <span class="position">Marketing Manager</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap d-flex">--}}
{{--                            <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">--}}
{{--                    <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                      <i class="icon-quote-left"></i>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                <p class="name">Mark Web</p>--}}
{{--                                <span class="position">Interface Designer</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap d-flex">--}}
{{--                            <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">--}}
{{--                    <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                      <i class="icon-quote-left"></i>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                <p class="name">Mark Web</p>--}}
{{--                                <span class="position">UI Designer</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap d-flex">--}}
{{--                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">--}}
{{--                    <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                      <i class="icon-quote-left"></i>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                <p class="name">Mark Web</p>--}}
{{--                                <span class="position">Web Developer</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap d-flex">--}}
{{--                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">--}}
{{--                    <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                      <i class="icon-quote-left"></i>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--                                <p class="name">Mark Web</p>--}}
{{--                                <span class="position">System Analyst</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section bg-light">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5 pb-3">--}}
{{--            <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--                <h2>Recent Blog</h2>--}}
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 ftco-animate">--}}
{{--                <div class="blog-entry">--}}
{{--                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">--}}
{{--                    </a>--}}
{{--                    <div class="text d-flex py-4">--}}
{{--                        <div class="meta mb-3">--}}
{{--                            <div><a href="#">May 17, 2020</a></div>--}}
{{--                            <div><a href="#">Admin</a></div>--}}
{{--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--                        </div>--}}
{{--                        <div class="desc pl-3">--}}
{{--                            <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 ftco-animate">--}}
{{--                <div class="blog-entry" data-aos-delay="100">--}}
{{--                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">--}}
{{--                    </a>--}}
{{--                    <div class="text d-flex py-4">--}}
{{--                        <div class="meta mb-3">--}}
{{--                            <div><a href="#">May 17, 2020</a></div>--}}
{{--                            <div><a href="#">Admin</a></div>--}}
{{--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--                        </div>--}}
{{--                        <div class="desc pl-3">--}}
{{--                            <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 ftco-animate">--}}
{{--                <div class="blog-entry" data-aos-delay="200">--}}
{{--                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">--}}
{{--                    </a>--}}
{{--                    <div class="text d-flex py-4">--}}
{{--                        <div class="meta mb-3">--}}
{{--                            <div><a href="#">May 17, 2020</a></div>--}}
{{--                            <div><a href="#">Admin</a></div>--}}
{{--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--                        </div>--}}
{{--                        <div class="desc pl-3">--}}
{{--                            <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

@endsection
