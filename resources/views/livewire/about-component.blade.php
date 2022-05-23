<section class="hero-wrap hero-wrap-2"
        style="background: url('{{asset('./asset/img/slide-bg-2.jpg')}}'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a> /</span><span class="">About
                            </i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section  ftco-no-pt">
        <div class="container">
            <div class="row d-flex no-gutters mt-5" style="margin-bottom: -70px!important;">
                <div class="col-md-12 shadow">
                  
                        @foreach($about as $items)
                        <p class="detai-color"> {{$items->parag}}  </p>
                        @endforeach
                 
                </div>
            </div>
        </div>
        
    </section>