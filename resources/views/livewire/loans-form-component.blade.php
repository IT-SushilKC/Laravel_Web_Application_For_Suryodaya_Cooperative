<section>
<div class="main-form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-success text-white text-center pt-3">
                        <h5>Loan Apply</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" class="contact-form">
                            @csrf
                            
                            <div class="form-section">
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" >
                                <span class="text-danger">@error('firstname'){{ $message }}@enderror</span>
                                <label for="firstname">Last Name:</label>
                                <input type="text" name="lastname" class="form-control" placeholder="First Name">
                                <span class="text-danger">@error('lastname'){{ $message }}@enderror</span>
                                
                            </div>
                            <div class="form-section">
                                <label for="pp">Your Pictures </label>
                                <input type="file" name="pp" class="form-control" >
                                <span class="text-danger">@error('pp'){{ $message }}@enderror</span>
                                <label for="citizenship">Citizenship Document</label>
                                <input type="file" name="citizenship" class="form-control">
                                <span class="text-danger">@error('citizenship'){{ $message }}@enderror</span>
                            </div> 
                            <div class="form-section">
                                <label for="firstname">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" >
                                <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                                <label for="firstname">E-mail</label>
                                <input type="text" name="email" class="form-control" placeholder="Email " >
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div> 
                            <div class="form-section">
                                <label for="tempaddress">Temporary Address</label>
                                <input type="text" name="tempaddress" class="form-control" placeholder="Temp Address" >
                                <span class="text-danger">@error('tempaddress'){{ $message }}@enderror</span>
                                <label for="firstname">Permanent Address</label>
                                <input type="text" name="peraddress" class="form-control" placeholder="Permanent Address" >
                                <span class="text-danger">@error('peraddress'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-section">
                                <label for="firstname">Zip-Code</label>
                                <input type="text" name="zipcode" class="form-control" placeholder="Phone Number" >
                                <span class="text-danger">@error('zipcode'){{ $message }}@enderror</span>
                                <label for="firstname">State</label>
                                <input type="text" name="state" class="form-control" placeholder="Email " >
                                <span class="text-danger">@error('state'){{ $message }}@enderror</span>
                            </div> 
                            <div class="form-navigation mt-4 d-flex justify-content-between">
                                <button type="button" class="previous btn btn-success ">Previous</button>
                                <button type="button" class=" next btn btn-success ">Next</button>
                                <button type="submit" class="btn btn-success ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>