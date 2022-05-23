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
                            <a href="{{ route('admin.addsliders') }}" class="btn btn-success mb-4">Add New Slide</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body table-responsive">
                            <table class="table table-striped" style=" border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Images</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                ?>
                                <tbody>
                                    @foreach ($sliders as $slide)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><img style="height:4rem; width: 4rem"
                                                    src="{{ asset('asset/img/slider') }}/{{ $slide->image }}" />
                                            </td>
                                            <td>{{ $slide->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="/admin/delete/{{ $slide->id }}" type="submit"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboards.admins.components.footer')
