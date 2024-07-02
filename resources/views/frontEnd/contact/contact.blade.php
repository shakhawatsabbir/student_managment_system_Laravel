@extends('frontEnd.master')
@section('content')

    <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Need Help?</span>
                        <h3 class="title">Get In Touch With us</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-6">
                    <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                        <div class="row g-5">


                            <!-- Start Contact Info  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="contact-address-card-1 website">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="ri-global-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Our Website</h6>
                                            <p><a href="https://example.com/" target="_blank">www.example.com</a></p>
                                            <p><a href="https://themeforest.net/" target="_blank">www.theme.net</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Contact Info  -->

                            <!-- Start Contact Info  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                <div class="contact-address-card-1 phone">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-Headphone"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Call Us On</h6>
                                            <p><a href="tel:+2763(388)2930">+2763 (388) 2930</a></p>
                                            <p><a href="tel:+4875(356)2568">+4875 (356) 2568</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Contact Info  -->

                            <!-- Start Contact Info  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                <div class="contact-address-card-1 email">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-mail-open-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Email Us</h6>
                                            <p><a href="mailto:eduvibe@example.com" target="_blank">eduvibe@example.com</a></p>
                                            <p><a href="mailto:contact@eduvibe.com" target="_blank">contact@eduvibe.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Contact Info  -->

                            <!-- Start Contact Info  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                                <div class="contact-address-card-1 location">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-map-pin-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Our Location</h6>
                                            <p>486 Normana Avenue Morningtide, 4223</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Contact Info  -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="https://eduvibe.html.devsvibe.com/mail.php">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="contact-name" id="contact-name" type="text" class="form-control form-control-lg" placeholder="Name*">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="contact-email" name="contact-email" placeholder="Email*">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="contact-phone" id="contact-phone" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="subject" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="rn-btn edu-btn w-100" name="submit" type="submit">
                                <span>Submit Now</span><i class="icon-arrow-right-line-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image scene shape-image-1">
                        <span data-depth="-2.2">
                            <img src="{{asset('frontEnd')}}/assets/images/shapes/shape-04-01.png" alt="Shape Thumb">
                        </span>
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{asset('frontEnd')}}/assets/images/shapes/shape-02-08.png" alt="Shape Thumb">
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{asset('frontEnd')}}/assets/images/shapes/shape-15.png" alt="Shape Thumb">
                </div>
            </div>
        </div>
    </div>

    <div class="edu-contact-map-area edu-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map alignwide" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        <iframe class="radius-small" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
