@include('dashboards.admins.components.header')

<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Back</a></li>
                        <li class="breadcrumb-item" aria-current="page">News</li>
                    </ol>
                </nav>
                <div class="panel panel-default">
                    <div class="panel-heading   d-flex  justify-content-between">

                        <div class="col-md-6">
                            All News
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addnews') }}" class="btn btn-success mb-3">Add New News</a>
                        </div>

                    </div>
                    <div class="panel-body">

                        <div class="panel-body table-responsive">
                            <table class="table table-striped" style=" border-collapse: collapse;">
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
                                $i = 1;
                                ?>
                                <tbody>
                                    @foreach ($shownews as $news)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><img style="height:4rem; width: 4rem"
                                                    src="{{ asset('asset/img/news') }}/{{ $news->image }}" /></td>
                                            <td>{{ $news->title }}</td>
                                            <td class="col-md-7">{{ $news->description }}</td>
                                            <td class="col-md-2">
                                                <a href="/admin/deletenews/{{ $news->id }}"
                                                    class="btn btn-danger"><i class="mdi mdi-trash-can"></i></a>
                                                <a href="/admin/editnews/{{ $news->id }}" class="btn btn-primary"><i
                                                        class="mdi mdi-square-edit-outline"></i></a>
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
