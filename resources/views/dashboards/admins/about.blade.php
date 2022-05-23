@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading  d-flex  justify-content-between">
                        <div class="row ">
                            <div class="col-md-6">
                                Edit About
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    </div>

                    <form class="form-horizontal" method="POST">
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
                            <label for="file" class="control-label">Paragraph</label>
                            <div class="col-md-12">

                                <textarea name="parag" id="" cols="30" rows="10">{{$aboutedit->parag}}</textarea>

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

@include('dashboards.admins.components.footer')
