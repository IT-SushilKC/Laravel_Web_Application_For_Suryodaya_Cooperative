@include('dashboards.admins.components.header')
<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="margin-bottom: -30px">

                            <div class="col-md-6">
                               <h3>Send Message</h3> 
                               <hr>
                            </div>
                        
                    </div>
                    <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST">
                        @csrf
                        <div class="form-group">
                            <div style="padding-bottom: 12px;">
                                <label for="file" class=" control-label "></label>
                            </div>
                            <div class="form-group">
                                <label class=" control-label"></label>
                                <div class="col-md-4">
                                <input type="text" name="phone" value="{{"+977".$smsphone->phone}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Message</label>
                                <textarea name="message" id="" class="form-control" cols="50" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class=" control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Submit message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('dashboards.admins.components.footer')
