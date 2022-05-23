@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading   d-flex  justify-content-between">

                        <div class="col-md-6">
                            <h4>Add New Team Member</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.teamshow') }}" class="btn btn-success mb-3">All Members</a>

                        </div>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal"  method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" value="{{$team->name}}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Post</label>
                                <div class="col-md-4">
                                    <input type="text" name="post" class="form-control" value="{{$team->post}}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Salary</label>
                                <div class="col-md-4">
                                    <input type="text" name="salary" class="form-control" value="{{$team->salary}}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Age</label>
                                <div class="col-md-4">
                                    <input type="text" name="age" class="form-control" value="{{$team->age}}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                <input type="file" name="file" class="input-file" id="filesPrev" />
                                <img id="previewImg" src="{{ asset('./asset/img/Team') }}/{{ $team->image }}"
                                    alt="News Image" style="max-width: 130px; margin-top:20px;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#filesPrev").change(function() {
        readURL(this);
    });

</script>
