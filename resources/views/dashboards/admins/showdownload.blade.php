@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Download 
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>S.N.</th>
                                          <th>Name</th>
                                          <th>File</th>
                                        </tr>
                                      </thead>
                                      <?php
                                        $i= 1;
                                      ?>
                                      <tbody>
                                        @foreach ($data as $items)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$items->title}}</td>
                                            <td><a href="{{asset('./asset/img/download')}}/{{$items->file}}"><span style="font-size: 25px" class="mdi mdi-download"></span></a></td>
                                           <td> 
                                                <a href="/admin/deletedownload/{{ $items->id }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
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