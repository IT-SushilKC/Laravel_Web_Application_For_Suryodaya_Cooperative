<div>
    <section class="hero-wrap hero-wrap-2"
        style="background: url('{{asset('./asset/img/slide-bg-2.jpg')}}'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Gallery</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a> /</span><span class="">Gallery
                            </i></span></p>
                </div>
            </div>
        </div>
    </section>


    
</div>

<div class=" pd-bottom-50" style="margin-top: 80px" id="grid">
    <div class="container-fluid">
        <div class="row m-4">
            @foreach($gallery as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-post-wrap style-overlay">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('./asset/img/gallery') }}/{{ $item->image }}" alt="img">
                        
                    </div>
                    <div class="details">
                        <div class="post-meta-single">
                            <p><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</p>
                        </div>
                        <h6 class="title">{{$item->title}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>  
</div>
<div class="text-center">
    {{ $gallery->links() }}
    </div>