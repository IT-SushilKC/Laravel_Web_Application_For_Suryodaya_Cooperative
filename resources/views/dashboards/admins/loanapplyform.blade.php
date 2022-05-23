@include('dashboards.admins.components.header')

<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<meta name="_token" content="{{ csrf_token() }}">
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
           
                <div class="panel panel-default">
                    <div class="panel-heading d-flex  justify-content-between">
                        
                            <div class="col-md-6 mb-4">
                                All Customers
                            </div>
                           
                    </div>
                    <div class="panel-body ">
                    
                                <div class="table-responsive">
                                    <table class="table" style="margin-bottom: 0" id="myTable">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          
                                          <th>Name</th>
                                          
                                          <th>Email</th>
                                          <th>Loan Type</th>
                                          <th>Phone Number</th>
                                          <th>Permanent Address</th>
                                          <th>View</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                      @foreach ($loansform as $items)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{\Illuminate\Support\Str::ucfirst($items->user)}}</td>
                                            <td>{{$items->email}}</td>
                                            <td>{{$items->loan }}
                                            </td>
                                            <td>{{$items->phone}}</td>
                                            <td>{{\Illuminate\Support\Str::ucfirst($items->peraddress)}}</td>
                                                  
                                           <td class="d-inline-block"> 
                                                <a href="/admin/customer-about/{{$items->id}}" type="submit" class="btn btn-primary btn-sm pr-2 pl-2"><i class="mdi mdi-eye" style="font-size: 15px;"></i></a>
                                                <a href="/admin/send-sms/{{$items->id}}" type="submit" class="btn btn-primary btn-sm pr-2 pl-2"><i class="mdi mdi-message" style="font-size: 15px;"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                            
                                        
                            </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
   
 

@include('dashboards.admins.components.footer')