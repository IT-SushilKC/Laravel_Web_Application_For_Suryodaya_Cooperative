<div>
    <section class="hero-wrap hero-wrap-2"
    style="background: url('{{asset('./asset/img/slide-bg-2.jpg')}}'); background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Management Team</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a> /</span><span class="">Team
                        </i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="main-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 pl-lg-5 pt-5 shadow">

                <div class="container">
                    <div class="row">
                        @foreach($team as $item)
                        <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="">
                            <div class="team-member">
                                <figure>

                                    <img src="{{asset('asset/img/Team')}}/{{$item->image}}" alt="Image" class="img-fluid">
                                </figure>
                                <div class="p-3">
                                    <h3>{{$item->name}}</h3>
                                    <span class="position">{{$item->post}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
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

</div>
