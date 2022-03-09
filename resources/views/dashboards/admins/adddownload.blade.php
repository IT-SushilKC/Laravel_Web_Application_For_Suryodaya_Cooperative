@include('dashboards.admins.components.header')       
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Add New Files</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.slidershow')}}" class="btn btn-success">All Files</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                    @if ( Session::get('addfile'))
					    <div class="alert alert-danger">
							{{ Session::get('addfile') }}
						</div>
					@endif
                        <form class="form-horizontal" action="{{route('admin.uploadfile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label" >File Title</label>
                                <div class="col-md-4">
                                    <input type="text" name="title" class="input-file" id="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label" >Upload File</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" class="input-file" id="filesPrev" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" ></label>

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboards.admins.components.footer')