@include('dashboards.admins.components.header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.loanapplyform')}}">Back</a></li>
    <li class="breadcrumb-item" aria-current="page">Cu-Details</li>
  </ol>
</nav>
<section id="about" class="about">
    <!-- ======= About Me ======= -->
    <div class="about-me container bg-white p-3">
      <div class="section-title">
        <h3 class="mb-4 text-dark text-center text-bold">Learn more about {{\Illuminate\Support\Str::ucfirst($loansabout->user)}}</h3>
      </div>
      <div class="row mt-3">
        <div class="col-lg-2" data-aos="fade-right">
          <img src="{{ asset('./asset/img/loans') }}/{{ $loansabout->image }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-10 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3 class="mb-2">{{\Illuminate\Support\Str::ucfirst($loansabout->user)}}</h3>
          <p class="font-italic">
            In this clients loans apply for different purpose.
          </p>
          <div class="row mt-3">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Loan Type: </strong>{{\Illuminate\Support\Str::ucfirst($loansabout->loan)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email: </strong>{{$loansabout->email}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone: </strong>{{$loansabout->phone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{\Illuminate\Support\Str::ucfirst($loansabout->city)}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Provience:</strong> {{$loansabout->provience}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Premanent Address:</strong> {{\Illuminate\Support\Str::ucfirst($loansabout->peraddress)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Temporary Address:</strong> {{\Illuminate\Support\Str::ucfirst($loansabout->tempaddress)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Apply Date: </strong> {{ \Carbon\Carbon::parse($loansabout->created_at)->format('M d, Y') }}</li>
              </ul>
            </div>
            <div class="col-md-12 mt-3">
            <h3>Objectives of Loan</h3>
              <p class="mt-3">{{$loansabout->objective}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End About Me -->
</section>
@include('dashboards.admins.components.footer')