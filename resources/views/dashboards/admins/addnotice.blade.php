
@include('dashboards.admins.components.header')


<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Add New Notice</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.shownotice')}}" class="btn btn-success mb-2">All Notice</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                 
                        <div class="card ">
                        
                            <div class="card-body">
                            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('admin.addnotice')}}">
                            @csrf
                            <label for="exampleInputEmail1">Write Notice</label>
                                <div class="form-group">
                                
                                <textarea name="description" class="form-control" rows="10" required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                        </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboards.admins.components.footer')