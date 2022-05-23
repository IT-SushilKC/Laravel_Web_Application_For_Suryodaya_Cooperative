@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading  d-flex  justify-content-between">
                  
                            <div class="col-md-6">
                                All Slides
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addnotice')}}" class="btn btn-success mb-3">Add New Notice</a>
                            </div>
                 
                    </div>
                    <div class="panel-body">
                        <div class="panel-body table-responsive">
                            <table class="table table-striped" style=" border-collapse: collapse;">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                        @foreach ($shownotice as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->description}}</td>
                                           <td> 
                                                <a href="/admin/editnotice/{{$item->id}}" type="submit" class="btn btn-primary btn-sm">Edit</a>
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