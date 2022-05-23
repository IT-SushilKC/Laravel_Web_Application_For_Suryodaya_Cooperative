<div>
    <section class="hero-wrap hero-wrap-2"
        style="background: url('{{ asset('./asset/img/slide-bg-2.jpg') }}'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Downloads</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a> /</span><span
                            class="">Downloads</i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section ftco-no-pt bg-light ftco-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pl-lg-5 shadow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th class="col-md-6">Description</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            @foreach ($data as $items)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $items->title }}</td>
                                    <td><a href="{{ asset('./asset/img/download') }}/{{ $items->file }}"><span
                                                style="font-size: 20px" class="fa fa-download"></span></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
</div>
