<section id="testimonial" class="section">
    <div class="container right-position">
        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="text-center video-promo-content">

                    <a id="play-video" class="video-play-button video-popup" href="{{ $pengaturan->link_video }}">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row justify-content-center testimonial-area">
            <div class="pl-20 pr-20 col-lg-10 col-md-12 col-sm-12 col-xs-12"
                style="overflow: hidden;padding-bottom: 60px">
                <div id="client-testimonial" class="text-center owl-carousel">
                    @forelse ( $ulasans as $ulasan )
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">{{ $ulasan->ulasan }}</p>
                                <div class="author-info">
                                    <h5>{{ $ulasan->nama }}</h5>
                                </div>
                            </div>
                            {{-- <div class="client-thumb">
                                <img src="/assets/landing/img/testimonial/01.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                    @empty
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Belum Ada Ulasan</p>
                            </div>
                            {{-- <div class="client-thumb">
                                <img src="/assets/landing/img/testimonial/01.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
</section>