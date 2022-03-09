

<!-- Start Multiform HTML -->
<section class="multi_step_form">
    <form id="msform" class="contact-form" wire:submit.prevent="store" enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Verify User</li>
            <li>Upload Documents</li>
            <li>Verify Location</li>

        </ul>
        <!-- fieldsets -->
        <fieldset  wire:ignore>
           
          <div class="container">
         
              <div class="row">
                  <div class="col-md-12 mb-2">
                  <h3>Verify Your Personal Information</h3>
                  </div>
                  <div class="form-group col-md-12 ">
                        <input type="text" wire:model="firstname" class="form-control " id="exampleInputPassword1" placeholder="First Name">
                  </div>
                  <div class="form-group col-md-12 ">
                        <input type="text" wire:model="lastname" class="form-control " id="exampleInputPassword1" placeholder="Last Name">
                  </div>
                  <div class="input-group col-md-12">
                  <select class="custom-select form-control" wire:model="loan">
                    <option selected>Loan Type</option>
                    <option value="o" >Business Loan</option>
                    <option value="1" >Education Loan</option>
                    <option value="2" >Agriculture Loan</option>
                    <option value="3" >Housing Loan</option>
                </select>
                  </div>
                  <div class="form-group col-md-12 ">
                        <input type="text" class="form-control" wire:model="education"  id="exampleInputPassword1" placeholder="Degree/Education">
                  </div>
                  <div class="form-group col-md-12 ">
                        <input type="date" class="form-control " wire:model="dob" id="exampleInputPassword1" placeholder="Date Of Birth">
                  </div>
                  <div class="form-group col-md-12 ">
                        <input type="number" class="form-control " wire:model="age" id="exampleInputPassword1" placeholder="Age">
                  </div>
                 
              </div>
          </div>
            <button type="button" class="action-button previous_button">Back</button>
            <button type="button" class="next action-button">Continue</button>
        </fieldset>
        <fieldset wire:ignore.self>
           
            <div class="container">
            <h3 class="mb-2">Verify Your Contact</h3>
            
                <div class="row">
                <div class="form-group col-md-12 ">
                        <input type="email" class="form-control " wire:model="email" id="exampleInputPassword1" placeholder="E-mail">
            </div>
                <div class="form-group col-md-12 ">
                        <input type="text" class="form-control " wire:model="phone" id="exampleInputPassword1" placeholder="Phone">
            </div>
            <div class="form-group col-md-12 ">
                        <input type="text" class="form-control " wire:model="telephone"id="exampleInputPassword1" placeholder="Telephone">
            </div>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" wire:model="image" id="upload">
                    <label class="custom-file-label" for="upload"><i class="ion-android-cloud-outline"
                            wire:model="image"></i>Upload Your Image</label>
                </div>

            </div>
                </div>
            </div>
            <button type="button" class="action-button previous previous_button">Back</button>
            <button type="button" class="next action-button">Continue</button>
        </fieldset>

        <fieldset wire:ignore>
            
            <div class="container">
            <h3 class="mb-2">Verify Your Location</h3>
                <div class="row">
                <div class="form-group col-md-12 ">
                        <input type="text" class="form-control " wire:model="peraddress" id="exampleInputPassword1" placeholder="Permanent Address">
            </div>
            <div class="form-group col-md-12 ">
                        <input type="text" class="form-control " wire:model="temaddress" id="exampleInputPassword1" placeholder="Temporary Address">
            </div>
            <div class="form-group col-md-12 ">
                        <input type="text" class="form-control " wire:model="zipcode" id="exampleInputPassword1" placeholder="Zip-Code">
            </div>
            <div class="form-group col-md-12 ">
                <textarea name="" id="" class="form-control" rows="3" wire:model="objective" placeholder="Objectives of Loan"></textarea>
            </div>
                </div>
            </div>
           
            <button type="button" class="action-button previous previous_button">Back</button>
            <button type="submit" wire:click="store" class="action-button">Finish</button>
        </fieldset>
    </form>
</section>
