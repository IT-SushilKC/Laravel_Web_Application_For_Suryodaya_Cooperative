@include('dashboards.admins.components.header')       
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading  d-flex  justify-content-between">
                      
                            <div class="col-md-6 d-xl-inline">
                                <h4>Add New Slide</h4>
                            </div>
                            <div class="col-md-6 d-xl-inline">
                                <a href="{{route('admin.slidershow')}}" class="btn btn-success mb-3">All Slides</a>
                      
                        </div>
                    </div>
                    
                    @if ( Session::get('upolad'))
					  
                    <div class="alert alert-primary">
							{{ Session::get('upload') }}
						</div>
					
					@endif
                    <div class="panel-body">
                        <form class="form-horizontal" class="form-group" action="addsliders" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label " >Image</label>
                                <div class="col-md-4 ">
                                    <input type="file" name="file" class="custom-file" id="filesPrev" required />
                                    <img id="previewImg" alt="slide Image" style="max-width: 130px; margin-top:20px;">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-4 control-label" >Status</label>
                                <div class="col-md-4">
                                    <select class="form-control " name="status">
                                        <option value="o" >Inactive</option>
                                        <option value="1" >Active</option>
                                    </select>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#previewImg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#filesPrev").change(function(){
    readURL(this);
});
</script>
<script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::get('upload'))
                toastr.success('{{ Session::get('upload') }}');
            @endif
        });

    </script>
@include('dashboards.admins.components.footer')