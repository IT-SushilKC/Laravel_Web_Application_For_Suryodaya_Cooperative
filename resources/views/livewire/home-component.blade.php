@if (Session::has('userlogin-successfully'))
    <script>
        swal("Thanks!", "{!! Session::get('userlogin-successfully') !!}", "success", {
            button: "OK",
        });
    </script>
@endif
<div class="main">
    <!--Carousel Section-->
    <section class="hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $item)
                    <div class="carousel-item {{ $item->status == 1 ? 'active' : '' }}">
                        <img class="img-slider text-align-center"
                            src="{{ asset('./asset/img/slider') }}/{{ $item->image }}" alt="Empty Img" />
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
    <section>
        <div class="notice  wow slideInRight" data-wow-duration=".5s">
            <div class="notice-bar">
                <h5 class="text-light text-center p-2 py-2">Notice</h5>
            </div>
            <div class="container container-xl notice-marquee">
                @foreach ($notice as $items)
                    <marquee behavior="" direction="right"><i class="fa fa-arrow-right mr-3"></i>
                        {{ $items->description }}
                    </marquee>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="board wow slideInUp" data-wow-duration=".8s">
            <h4 class="text-center py-5 text-light">सुशासनयुक्त, समुदायमा आधारित र सहकारी अभियानमा नेतृत्व लिन सक्षम
                नेपालको
                उत्कृष्ट सहकारी संस्था ।</h4>
        </div>
    </section>
    <section>
        <!-- services section -->
        <div class="services wow slideInUp" data-wow-duration=".8s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="services-wrapper services-one">
                            <i class="fa fa-piggy-bank"></i>
                            <h2>Saving</h2>
                            <p class="detail-color">Suryodaya Cooerative is providing the following saving products for their valued members. And Customer provides different credits.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="services-wrapper services-two">
                            <i class="fa fa-hand-holding-usd"></i>
                            <h2>Loan</h2>
                            <p class="detail-color">In cooperation with various consumer shops, discount cards are
                                being provided to its members
                                to save them from the rising inflation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="services-wrapper services-three">
                            <i class="fa fa-comment-dollar"></i>
                            <h2>Remittance</h2>
                            <p class="detail-color">In cooperation with various consumer shops, discount cards are being provided to its members
                                to save them from the rising inflation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="news">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="section-heading wow fadeIn" data-wow-duration=".8s">
                            <h2>Latest <em>News</em></h2>
                            <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                        </div>
                    </div>
                    @foreach ($homenews as $items)
                        <div class="col-md-4">

                            <div class="news-item wow slideInUp" data-wow-duration=".8s">

                                <img class="img-fluid"
                                    src="{{ asset('./asset/img/news') }}/{{ $items->image }}" alt="">
                                <div class="down-content">
                                    <div class="post-date"><i class="fa fa-calendar"></i>
                                        {{ \Carbon\Carbon::parse($items->created_at)->format('M d, Y') }}</div>
                                    <h4><a href="single-news/{{ $items->id }}">
                                        {{ \Illuminate\Support\Str::limit($items->title, 39) }}</a></h4>
                                    <p>{{ \Illuminate\Support\Str::limit($items->description, 150) }}</p>
                                    <a href="single-news/{{ $items->id }}" class="filled-button"><i
                                            class="fa fa-arrow-right mr-1"> </i>Read More</a>
                                </div>
                            </div>

                        </div>
                    @endforeach


                </div>
                <div class="text-center">
                    {{ $homenews->links() }}
                </div>

            </div>

        </div>

    </section>

    <!-- =======Loans Section ======= -->
    <section id="loans" class="loans mt-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><em>Loans</em></h2>
                        <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">

                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-leaf"></i>
                                <h4><a href="/loans"> Agriculture Loan</a></h4>
                                <p>RMCL pleasure to announce agriculture loan to finance for agriculture production,
                                    processing, purchase of seeds, fertilizers, insecticides, agriculture equipment..
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-building"></i>
                                <h4><a href="/loans">Business Loan</a></h4>
                                <p>Business Loan has developed for operation and extension business. it also provides to
                                    non establish Business.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-briefcase"></i>
                                <h4><a href="/loans">Career Loan</a></h4>
                                <p>
                                    This loan is provided to operate & extend small and medium size industry.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-user-graduate"></i>
                                <h4><a href="/loans">Education Loan</a></h4>
                                <p>Education loan has been designed to complete studies for those student who do not
                                    have financial recourse to complete study in Nepal and Abroad..
                                </p>
                            </div>
                        </div>

                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- Loans -->

    <section id="team" class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading mb-2">
                        <h2>Management <em>Teams</em></h2>
                        <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="owl-team owl-carousel">
                    @foreach ($team as $items)
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle " style="width:200px;"
                                    src="{{ asset('./asset/img/Team') }}/{{ $items->image }}" alt="..." />
                                <div class="text-center mt-3">
                                    <h4 style="width:200px; text-align:center;">{{$items->name}}</h4>
                                    <p style="width:200px;" class="text-muted">{{$items->post}}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->

    <div style="text-align: center;">
        <img src="{{asset('./asset/img/growth.png')}}" alt="">
    </div>

    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">

                        <div class="partner-item">
                            <img src="{{ asset('./asset/img/ime.jpg') }}" title="1" alt="1">
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('./asset/img/prabhu.jpg') }}" title="2" alt="2">
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('./asset/img/samsara.jpg') }}" title="3" alt="3">
                        </div>

                        <div class="partner-item">
                            <img src="{{ asset('./asset/img/himal.jpg') }}" title="4" alt="4">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
