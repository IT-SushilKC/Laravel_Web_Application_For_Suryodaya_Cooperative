<x-header/>
<div>
    <section class="hero-wrap hero-wrap-2"
    style="background: url('{{ asset('./asset/img/slide-bg-2.jpg') }}'); background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a> /</span><span
                        class="">Contact Us
                        </i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container mt-5">
        <div class="row block-9">
            
            <div class="col-lg-3">
                <div class="col-md-12 mb-4 contact-info">
                    <h2 class="h4">Contact Info</h2>
                </div>
                <div class="contact_info">
                    <div class="info_item">
                        <i class="fa fa-home"></i>
                        <h6>California, United States</h6>
                        <p>Santa monica bullevard</p>
                    </div>
                    <div class="info_item">
                        <i class="fa fa-phone"></i>
                        <h6>
                            <a href="#">00 (440) 9865 562</a>
                        </h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="fa fa-envelope"></i>
                        <h6>
                            <a href="#">support@colorlib.com</a>
                        </h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <form  class="contact" method="POST" action="/contact">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Send Feedback</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Your Email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                        <span class="text-danger">@error('subject'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" name="message" class="form-control"
                            placeholder="Message"></textarea>
                            <span class="text-danger">@error('message'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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

<!-- ======= Footer ======= -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="{{asset('./admin_asset/plugins/jquery/jquery.min.js')}}"></script>
@if(Session::has('contactmsg'))
<script>
    swal("Thanks!","{!! Session::get('contactmsg') !!}","success",{
        button:"OK",
    });
</script>
@endif
<x-footer/>