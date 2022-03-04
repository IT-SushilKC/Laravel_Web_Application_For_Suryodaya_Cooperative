@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Slides
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addnotice')}}" class="btn btn-success">Add New Notice</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if ( Session::get('deletenotice'))
					    <div class="alert alert-primary">
							{{ Session::get('deletenotice') }}
						</div>
					@endif
                                <div class="table-responsive">
                                    <table class="table">
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
                                                <a href="" type="submit" class="btn btn-danger btn-sm">Delete</a>
                                                <a href="" type="submit" class="btn btn-primary btn-sm">Edit</a>
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