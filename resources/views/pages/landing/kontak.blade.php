<section id="contact" class="section">
    <!-- Container Starts -->
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center contact-text section-header">
                    <div>
                        <h2 class="section-title">Beri Ulasan</h2>
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
            <div class="col-lg-6 col-md-12">
                <form id="contactForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama"
                                    required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" placeholder="Berikan Penilaian 1-5" id="msg_subject"
                                    class="form-control" name="msg_subject" required
                                    data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                    required data-error="Please enter your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Budget" id="budget" class="form-control" name="budget"
                                    required data-error="Please enter your Budget">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message"
                                    placeholder="Berikan Ulasan Anda" rows="4" data-error="Write your message"
                                    required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button">
                                <button class="btn btn-common" id="submit" type="submit">Submit</button>
                                <div id="msgSubmit" class="hidden h3"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">

            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-img">
                    <img src="/assets/landing/img/contact/01.png" class="img-fluid" alt="">
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">
            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->
    </div>
</section>