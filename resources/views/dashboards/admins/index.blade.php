@include('dashboards.admins.components.header')


<div>
    <!-- /top tiles -->
<div class="container" style="padding: 30px 0">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
              <div class="card-people mt-auto">
                <img class="img-fluid" src="{{ asset('admin_asset/img/people.svg') }}" alt="people" style="background-size: cover">
                <div class="weather-info">
                  <div class="d-flex">
                    
                    <div class="ml-2">
                      <h4 class="location font-weight-normal">Welcome</h4>
                      <h6 class="font-weight-normal">Sushil KC</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin transparent">
            <div class="row">
              <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                  <div class="card-body">
                    <p class="mb-4">Total Users</p>
                    <p class="fs-30 mb-2">{{ \App\Models\User::all()->count() }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                  <div class="card-body">
                    <p class="mb-4">Total Customers</p>
                    <p class="fs-30 mb-2">{{ \App\models\LoansForm::all()->count() }}</p>
                  </div>
                </div>
              </div>
            </div>
       
          </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            Recent Users 
                        </div>
                       
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped" style=" border-collapse: collapse;">
                        <thead class="text-primary">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($adminuser as $items)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $items->name }}</td>
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->role == 1 ? 'Admin' : 'User' }}</td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
                <div class="mt-4 text-center">
                    {{ $adminuser->links() }}
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card" style="min-height: 485px">
                <div class="card-header card-header-text">
                    <h3 class="card-title">Messages</h3>
                </div>
                <div class="card-content">
                    <div class="streamline">
                        @foreach($contact as $items)
                        <div class="sl-item sl-primary">
                            <div class="sl-content">
                                <small class="text-muted">{{ $items->created_at->diffForHumans() }}</small>
                                <p>{{$items->message}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-4 text-center">
                    {{ $adminuser->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

</div>



@include('dashboards.admins.components.footer');
