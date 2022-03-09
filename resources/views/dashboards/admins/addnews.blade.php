@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Add New News</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.shownews')}}" class="btn btn-success">All News</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="panel-body">
                        <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label" >Image</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" class="input-file" id="filesPrev" required />
                                    <img id="previewImg" alt="slide Image" style="max-width: 130px; margin-top:20px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label" >Title</label>
                                <div class="col-md-6">
                                   <textarea name="title" id="" class="form-control"  rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label" >Description</label>
                                <div class="col-md-6">
                                   <textarea name="description" id="" class="form-control"   rows="10"></textarea>
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
@include('dashboards.admins.components.footer')