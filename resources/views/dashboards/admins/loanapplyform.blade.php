@include('dashboards.admins.components.header')

<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
           
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Customers
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>Email</th>
                                          <th>Loan Type</th>
                                          <th>Phone Number</th>
                                          <th>Temporary Address</th>
                                          <th>Permanent Address</th>
                                          <th>Date Of Birth</th>
                                          <th>Zip-Code</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                      @foreach ($loansform as $items)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$items->firstname}}</td>
                                            <td>{{$items->lastname}}</td>
                                            <td>{{$items->email}}</td>
                                            <td>{{$items->loan }}</td>
                                            <td>{{$items->phone}}</td>
                                            <td>{{$items->temaddress}}</td>
                                            <td>{{$items->peraddress}}</td>
                                            <td>{{$items->dob}}</td>
                                            <td>{{$items->zipcode}}</td>
                                           
                                           <td> 
                                               
                                                <a href="" type="submit" class="btn btn-primary btn-sm pr-2 pl-2"><i class="mdi mdi-eye" style="font-size: 15px;"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                            </tbody>
                                        
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

@include('dashboards.admins.components.footer')