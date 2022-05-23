@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading d-flex  justify-content-between">
                        <div class="col-md-6">
                            All Messages
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body table-responsive">
                            <table class="table table-striped" style=" border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>E-mail</th>
                                        <th>Messages</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                ?>
                                <tbody>
                                    @foreach ($messages as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{ $item->subject}}</td>
                                            <td>{{ $item->email}}</td>
                                            <th>{{$item->message}}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $messages->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboards.admins.components.footer')
