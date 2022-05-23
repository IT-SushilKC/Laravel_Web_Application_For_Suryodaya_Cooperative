@include('dashboards.admins.components.header')

<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Back</a></li>
                        <li class="breadcrumb-item" aria-current="page">Team Member</li>
                    </ol>
                </nav>
                <div class="panel panel-default">
                    <div class="panel-heading   d-flex  justify-content-between">

                        <div class="col-md-6">
                            All Team Member
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.membershipadd') }}" class="btn btn-success mb-3">Add New
                                Membership</a>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="panel-body table-responsive">
                            <table class="table table-striped" style=" border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Post</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                ?>
                                <tbody>
                                    <thead>
                                        @foreach ($membership as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>
                                                <th>{{ $item->name }}</th>
                                                <th><img class="img-round" style="height:3rem; width: 3rem"
                                                        src="{{ asset('asset/img/Membership') }}/{{ $item->image }}">
                                                </th>
                                                <th>{{ $item->post }}</th>
                                                <td class="pt-3">
                                                    <a href="/admin/deleteteam/{{ $item->id }}" type="submit"
                                                        class="btn btn-danger btn-sm mdi mdi-delete"
                                                        style="font-size: 1rem"></a>
                                                    <a href="/admin/editteam/{{ $item->id }}"
                                                        class="btn btn-primary btn-sm mdi mdi-account-edit"
                                                        style="font-size: 1rem"> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </thead>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('dashboards.admins.components.footer')
