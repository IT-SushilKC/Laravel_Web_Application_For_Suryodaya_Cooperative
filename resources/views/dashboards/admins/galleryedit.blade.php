@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading  d-flex  justify-content-between">

                        <div class="col-md-6 ">
                            All Slides
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.galleryshow') }}" class="btn btn-success mb-3">Show Gallery Items</a>
                        </div>

                    </div>
                    <div class="panel-body">

                    </div>

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div style="padding-bottom: 12px;">
                                <label for="file" class=" control-label "></label>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="id" />

                            </div>
                        </div>
                        <div class="form-group">
                            <div style="padding-bottom: 12px;">
                                <label for="file" class=" control-label ">Image</label>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="image" class="input-file" id="filesPrev" />
                                <img id="previewImg" src="{{ asset('./asset/img/gallery') }}/{{ $galleryupdate->image }}"
                                    alt="News Image" style="max-width: 130px; margin-top:20px;" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file" class=" control-label">Title</label>
                            <div class="col-md-12">
                                <textarea name="title" class="form-control" rows="3">{{$galleryupdate->title}}</textarea>
                            </div>
                        </div>
                        


                        <div class="form-group">
                            <label class=" control-label"></label>

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
</div>
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
