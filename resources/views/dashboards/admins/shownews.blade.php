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
                                <a href="{{route('admin.addnews')}}" class="btn btn-success">Add New News</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    @if ( Session::get('updatenews'))
					    <div class="alert alert-primary">
							{{ Session::get('updatenews') }}

                            @endif
                        @if ( Session::get('deletenews'))
					    <div class="alert alert-primary">
							{{ Session::get('deletenews') }}
						</div>
					@endif
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          <th>Image</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                        @foreach ($shownews as $news)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td><img style="height:4rem; width: 4rem" src="{{asset('asset/img/news')}}/{{$news->image}}"/></td>
                                            <td>{{$news->title}}</td>
                                            <td class="col-md-7">{{$news->description}}</td>
                                           <td> 
                                               <a href="/admin/deletenews/{{$news->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                               <a href="/admin/editnews/{{$news->id}}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
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