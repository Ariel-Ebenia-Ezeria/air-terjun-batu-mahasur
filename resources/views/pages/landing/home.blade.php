@extends('layouts.landing')

@section('title')
Air Terjun Batu Mahasur
@endsection

@push('addon-style')
@endpush

@section('content')
<!-- Services Section Start -->
<section id="services" class="section">
    <div class="container">

        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="text-center services-item">
                    <div class="icon">
                        <i class="lni-cog"></i>
                    </div>
                    <h4>Bootstrap 4</h4>
                    <p>Share processes and data secure lona need to know basis Our team assured your web site is
                        always safe.</p>
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="text-center services-item">
                    <div class="icon">
                        <i class="lni-brush"></i>
                    </div>
                    <h4>Slick Design</h4>
                    <p>Share processes and data secure lona need to know basis Our team assured your web site is
                        always safe.</p>
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="text-center services-item">
                    <div class="icon">
                        <i class="lni-heart"></i>
                    </div>
                    <h4>Crafted with Love</h4>
                    <p>Share processes and data secure lona need to know basis Our team assured your web site is
                        always safe.</p>
                </div>
            </div>
            <!-- End Col -->

        </div>
    </div>
</section>
<!-- Services Section End -->


<!-- Business Plan Section Start -->
<section id="business-plan">
    <div class="container">

        <div class="row">
            <!-- Start Col -->
            <div class="pl-0 pr-5 col-lg-6 col-md-12 pt-70">
                <div class="business-item-img">
                    <img src="{{ Storage::url($tentang->nama_file) }}" class="img-fluid" alt="">
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="pl-4 col-lg-6 col-md-12">
                <div class="business-item-info">
                    <h3>Air Terjun Batu Mahasur</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea <br> commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate <br> velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <!-- End Col -->

        </div>
    </div>
</section>
<!-- Business Plan Section End -->


<!-- Cool Fetatures Section Start -->
{{-- <section id="features" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center features-text section-header">
                    <div>
                        <h2 class="section-title">Services We Provide</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> eiusmod tempor
                                incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row featured-bg">
            <!-- Start Col -->
            <div class="p-0 col-lg-6 col-md-6 col-xs-12">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border1">
                    <div class="float-left feature-icon">
                        <i class="lni-coffee-cup"></i>
                    </div>
                    <div class="float-left feature-info">
                        <h4>Easy to Customize</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more
                            than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="p-0 col-lg-6 col-md-6 col-xs-12">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border2">
                    <div class="float-left feature-icon">
                        <i class="lni-briefcase"></i>
                    </div>
                    <div class="float-left feature-info">
                        <h4>Business Template</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more
                            than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="p-0 col-lg-6 col-md-6 col-xs-12">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border1">
                    <div class="float-left feature-icon">
                        <i class="lni-invention"></i>
                    </div>
                    <div class="float-left feature-info">
                        <h4>Clean & Trendy Design</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more
                            than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="p-0 col-lg-6 col-md-6 col-xs-12">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border2">
                    <div class="float-left feature-icon">
                        <i class="lni-layers"></i>
                    </div>
                    <div class="float-left feature-info">
                        <h4>Tons of Sections</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more
                            than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="p-0 col-lg-6 col-md-6 col-xs-12">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border3">
                    <div class="float-left feature-icon">
                        <i class="lni-reload"></i>
                    </div>
                    <div class="float-left feature-info">
                        <h4>Free Future Updates</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more
                            than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="p-0 col-lg-6 col-md-6 col-xs-12">
                <!-- Start Fetatures -->
                <div class="feature-item">
                    <div class="float-left feature-icon">
                        <i class="lni-support"></i>
                    </div>
                    <div class="float-left feature-info">
                        <h4>Premier Support</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more
                            than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->


        </div>
        <!-- End Row -->
    </div>
</section> --}}
<!-- Cool Fetatures Section End -->


<!-- Recent Showcase Section Start -->
@include('pages.landing.galeri')
<!-- Recent Showcase Section End -->


<!-- Our Pricing Plan Section Start -->
{{-- <section id="pricing" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center pricing-text section-header">
                    <div>
                        <h2 class="section-title">Pricing Plans</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row pricing-tables">
            <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="text-center pricing-table">
                    <div class="pricing-details">
                        <h3>Free</h3>
                        <h1><span>$</span>00</h1>
                        <ul>
                            <li>Free Instalation</li>
                            <li>500MB Storage</li>
                            <li>Single User</li>
                            <li>5 GB Bandwith</li>
                            <li>Minimal Features</li>
                            <li>No Dashboard</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Purchase</a>
                    </div>
                </div>
            </div>
            <!--  End Col -->
            <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="text-center pricing-table">
                    <div class="pricing-details">
                        <h3>standard</h3>
                        <h1><span>$</span>19.99</h1>
                        <ul>
                            <li>Free Instalation</li>
                            <li>2 GB Storage</li>
                            <li>Upto 2 users</li>
                            <li>50 GB Bandwith</li>
                            <li>All Features</li>
                            <li>Sales Dashboard</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Purchase</a>
                    </div>
                </div>
            </div>
            <!--  End Col -->
            <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="text-center pricing-table">
                    <div class="pricing-details">
                        <h3>Business</h3>
                        <h1><span>$</span>29.99</h1>
                        <ul>
                            <li>Free Instalation</li>
                            <li>5 GB Storage</li>
                            <li>Upto 4 users</li>
                            <li>100 GB Bandwith</li>
                            <li>All Features</li>
                            <li>Sales Dashboard</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Purchase</a>
                    </div>
                </div>
            </div>
            <!--  End Col -->

        </div>
        <!-- End Row -->
    </div>
</section> --}}
<!-- Our Pricing Plan Section End -->

<!-- Client Testimoninals Section Start -->
@include('pages.landing.ulasan')
<!-- Client Testimoninals Section End -->


<!-- Team section Start -->
{{-- <section id="team" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center team-text section-header">
                    <div>
                        <h2 class="section-title">Team Members</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="/assets/landing/img/team/01.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="text-center team-inner">
                            <h5 class="team-title">Patric Green</h5>
                            <p>Lead Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->

            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="/assets/landing/img/team/02.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="text-center team-inner">
                            <h5 class="team-title">Celina D Cruze</h5>
                            <p>Front-end Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->

            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="/assets/landing/img/team/03.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="text-center team-inner">
                            <h5 class="team-title">Daryl Dixon</h5>
                            <p>Content Writer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->

            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="/assets/landing/img/team/04.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="text-center team-inner">
                            <h5 class="team-title">Mark Parker</h5>
                            <p>Support Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->


        </div>
        <!-- End Row -->
    </div>
</section> --}}
<!-- Team section End -->


<!-- Blog Section -->
{{-- <section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center blog-text section-header">
                    <div>
                        <h2 class="section-title">Latest Blog Posts</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="/assets/landing/img/blog/01.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="single-post.html">How Slick Will Transform <br>Your Business</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry.</p>
                        <a href="" class="read-more">5 Min read</a>
                    </div>
                    <div class="author">
                        <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                        <span class="float-right date"><i class="lni-calendar"></i><a href="#">10 April,
                                2020</a></span>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="/assets/landing/img/blog/02.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="single-post.html">Growth Techniques for <br>New Startups</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry.</p>
                        <a href="" class="read-more">5 Min read</a>
                    </div>
                    <div class="author">
                        <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                        <span class="float-right date"><i class="lni-calendar"></i><a href="#">10 April,
                                2020</a></span>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="/assets/landing/img/blog/03.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="single-post.html">Writing Professional <br>Emails to Customers</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry.</p>
                        <a href="" class="read-more">5 Min read</a>
                    </div>
                    <div class="author">
                        <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                        <span class="float-right date"><i class="lni-calendar"></i><a href="#">10 April,
                                2020</a></span>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->
    </div>
</section> --}}
<!-- blog Section End -->


<!-- Contact Us Section -->
@include('pages.landing.kontak')
<!-- Contact Us Section End -->
@endsection

@push('addon-script')
@endpush