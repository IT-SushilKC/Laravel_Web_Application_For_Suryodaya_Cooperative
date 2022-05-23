@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                About 
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          <th>paragraph</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                        @foreach ($abouthome as $items)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td class="col-md-10">{{$items->parag}}</td>
                                           <td> 
                                               
                                                <a href="" type="submit" class="btn btn-info btn-sm"><i style="padding: 120px 0px" class="mdi mdi-square-edit-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
@include('dashboards.admins.components.footer')