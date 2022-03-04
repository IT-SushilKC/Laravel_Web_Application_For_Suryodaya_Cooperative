
@if ( Session::get('userlogin-successfully'))
					    <div class="alert alert-primary">
							{{ Session::get('userlogin-successfully') }}
						</div>
@endif
<div class="main">
    <!--Carousel Section-->
    <section class="hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide"  data-ride="carousel">
        
            <div class="carousel-inner">
            @foreach($sliders as $item)
                <div class="carousel-item {{$item->status==1?'active':''}}">   
                <img class="img-slider text-align-center" src="{{asset('./asset/img/slider')}}/{{$item->image}}" alt="Los Angeles"/>
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
        <div class="notice  wow slideInRight"data-wow-duration=".5s">
            <div class="notice-bar">
                <h5 class="text-light text-center p-2 py-2">Notice</h5>
            </div>
            <div class="container container-xl notice-marquee">
            @foreach($notice as $items)
                <marquee behavior="" direction="right"><i class="fa fa-arrow-right mr-3"></i>
                    {{$items->description}}
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
                            <h2>Deposit</h2>
                            <p class="detail-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut
                                laoreet.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="services-wrapper services-two">
                            <i class="fa fa-hand-holding-usd"></i>
                            <h2>Loan</h2>
                            <p class="detail-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut
                                laoreet.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="services-wrapper services-three">
                            <i class="fa fa-comment-dollar"></i>
                            <h2>Remittance</h2>
                            <p class="detail-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut
                                laoreet.</p>
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
                    @foreach($homenews as $items)
                    <div class="col-md-4">
                        
                        <div class="news-item wow slideInUp" data-wow-duration=".8s">
                        
                            <img class="img-fluid" src="{{asset('./asset/img/news')}}/{{$items->image}}" alt="">
                            <div class="down-content">
                                <div class="post-date"><i class="fa fa-calendar"></i>{{$items->created_at}}</div>
                                <h4>
                                {{\Illuminate\Support\Str::limit($items->title, 30)}}</h4>
                                <p>{{\Illuminate\Support\Str::limit($items->description, 150)}}</p>
                                <a href="single-news/{{$items->id}}" class="filled-button"><i class="fa fa-arrow-right mr-1"> </i>Read More</a>
                            </div> 
                        </div> 
                      
                    </div> @endforeach
                   
                    
                </div>{{$homenews->links()}}
               
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
                                <h4>Agriculture Loan</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-building"></i>
                                <h4>Business Loan</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-briefcase"></i>
                                <h4>Career Loan</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="fa fa-user-graduate"></i>
                                <h4>Education Loan</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                        </div>

                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- Loans -->

    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="{{asset('./asset/img/details-3.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    <h3>ATM</h3>
                    <p class="font-italic ">Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima
                        quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul class="details-color">
                        <li><i class="fa fa-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="fa fa-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="fa fa-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                    <p class="details-color">
                        Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem.
                        Et nihil magni debitis consequatur est.
                    </p>
                    <p class="details-color">
                        Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum
                        soluta explicabo vel fugiat eum non.
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{asset('./asset/img/details-4.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Mobile Banking Services</h3>
                    <p class="font-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <p class="details-color">
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul class="details-color">
                        <li><i class="fa fa-check"></i> Et praesentium laboriosam architecto nam .</li>
                        <li><i class="fa fa-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt
                            consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
                        <li><i class="fa fa-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Details Section -->
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">

                        <div class="partner-item">
                            <img src="{{asset('./asset/img/ime.jpg')}}" title="1" alt="1">
                        </div>

                        <div class="partner-item">
                            <img src="{{asset('./asset/img/prabhu.jpg')}}" title="2" alt="2">
                        </div>

                        <div class="partner-item">
                            <img src="{{asset('./asset/img/samsara.jpg')}}" title="3" alt="3">
                        </div>

                        <div class="partner-item">
                            <img src="{{asset('./asset/img/himal.jpg')}}" title="4" alt="4">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>