<section class="hero-wrap hero-wrap-2"
        style=" background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">News</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a> /</span><span class="">News
                            </i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section ftco-no-pt bg-light ftco-faqs">
        <div class="container mt-5">
            <div class="row">

                <div class="col-lg-9 pl-lg-5 ">
                    <div class="container">
                        <div class="row">
                        @foreach($sectionnews as $items)
                            <div class="col-md-6 mb-5">
                                <div class="news-item">
                                    <img class="img-fluid" src="{{asset('./asset/img/news')}}/{{$items->image}}" alt="">
                                    <div class="down-content">
                                        <div class="post-date"><i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($items->created_at)->format('M d, Y')}}</div>
                                        <h4>
                                        {{\Illuminate\Support\Str::limit($items->title, 30)}}</h4>
                                        <p>{{\Illuminate\Support\Str::limit($items->description, 500)}}</p>
                                        <a href="single-news/{{$items->id}}" class="filled-button"><i class="fa fa-arrow-right mr-1">
                                            </i>Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          
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
