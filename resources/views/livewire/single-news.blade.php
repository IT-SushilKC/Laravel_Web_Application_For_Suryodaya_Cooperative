<x-header />
<section class="hero-wrap hero-wrap-2"
    style="background: url('./assets/img/slide-bg-2.jpg'); background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Details News</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a> /</span><span
                        class="">Details News
                        </i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="main-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 pl-lg-5">
                <div class="single-news wow fadeIn">
                    <div class="blog-image">
                        <img src="{{ asset('./asset/img/news/') }}/{{ $news->image }}" alt="">
                    </div>
                    <div class="news-details">
                        <h3><a>{{ $news->title }}</a></h3>
                        <div class="post-date"><a href="#"><i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</a></div>
                        <p>{{ $news->description }}</p>
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="sidebar-area wow fadeIn">
                    <div class="side-content side-bars">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#"><i class="fas fa-check"></i> About Suryodaya</a></li>
                            <li><a href="#"><i class="fas fa-check"></i> Loans Apply</a></li>
                            <li><a href="#"><i class="fas fa-check"></i> Our Team Members</a></li>
                            <li><a href="#"><i class="fas fa-check"></i> Caving Products</a></li>
                        </ul>
                    </div>
                    <div class="side-content side-bars">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#"><i class="fas fa-check"></i>Loans Services</a></li>
                            <li><a href="#"><i class="fas fa-check"></i>Remitance Services</a></li>
                            <li><a href="#"><i class="fas fa-check"></i>Ambulance Services</a></li>
                            <li><a href="#"><i class="fas fa-check"></i>Saving Services</a></li>
                            <li><a href="#"><i class="fas fa-check"></i>Other</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer />
