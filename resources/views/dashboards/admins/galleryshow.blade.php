@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading d-flex  justify-content-between">
                       
                            <div class="col-md-6">
                                All Slides
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.galleryadd')}}" class="btn btn-success mb-4">Add New Images</a>
                            </div>
                     
                    </div>
                    <div class="panel-body">
                      
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          <th>Title</th>
                                          <th>Images</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                        @foreach ($gallery as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->title}}</td>
                                            <td><img style="height:4rem; width: 4rem" src="{{asset('asset/img/gallery')}}/{{$item->image}}"/></td>
                                            
                                           <td> 
                                            <a href="galleryedit/{{$item->id}}" class="btn btn-info btn-sm"><i class="mdi mdi-square-edit-outline" style="font-size: 22px;"></i></a>
                                                <a href="galleryshow/{{$item->id}}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete" style="font-size: 22px"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                            </tbody>
                                    </table>
                                    <div class="text-center">
                                        {{ $gallery->links() }}
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

 
@include('dashboards.admins.components.footer')