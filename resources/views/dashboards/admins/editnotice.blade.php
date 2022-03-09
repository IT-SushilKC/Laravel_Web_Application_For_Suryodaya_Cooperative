
@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                               Edit Notice
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addnotice')}}" class="btn btn-success">Add New Notice</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        
						
					
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                
                               <textarea name="description" id="" class="form-control" rows="10">{{$noticeedit->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
      </div>
      </div>
</div>
                </div>
            </div>
        </div>
    
    </div>
</div>


@include('dashboards.admins.components.footer')