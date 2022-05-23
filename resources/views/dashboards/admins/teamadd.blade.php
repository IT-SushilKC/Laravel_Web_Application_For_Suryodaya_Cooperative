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
                        <form class="form-horizontal" action="{{ route('admin.teamadd') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" id="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Post</label>
                                <div class="col-md-4">
                                    <input type="text" name="post" class="form-control" id="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Salary</label>
                                <div class="col-md-4">
                                    <input type="text" name="salary" class="form-control" id="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Age</label>
                                <div class="col-md-4">
                                    <input type="text" name="age" class="form-control" id="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Age</label>
                                <div class="col-md-4">
                                    <input type="file" name="image" class="form-control" id="" required />
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
