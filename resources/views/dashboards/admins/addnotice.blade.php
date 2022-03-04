
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
                                <a href="{{route('admin.shownotice')}}" class="btn btn-success">All Notice</a>
                            </div>
                        </div>
                    </div>
                    
                    @if ( Session::get('notice'))
					  
            <div class="alert alert-primary">
      {{ Session::get('notice') }}
    </div>
  
  @endif
                    <div class="panel-body">
                 
<div class="card col-md-9 offset-md-3">
   
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('admin.addnotice')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Write Notice</label>
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