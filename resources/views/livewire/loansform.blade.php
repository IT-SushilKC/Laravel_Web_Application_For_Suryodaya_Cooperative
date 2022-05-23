@include('layouts.loan_base')
<main>
    <article>
        <!-- Start Multiform HTML -->
        <section class="multi_step_form">
            <form id="msform" href="/loansform" method="post" enctype="multipart/form-data"
                onsubmit="return submitUserForm();">
                @csrf
                <a href="/" class="btn btn-success text-white mb-3 ">Back</a>
                <!-- Tittle -->
                <div class="tittle">
                    <h2>Loan Apply Form</h2>
                </div>

                <!-- fieldsets -->
                <fieldset>
                    <div class="form-section">
                        <div class="form-group">
                            <select name="loan" id="" class="form-control p-3 ">
                                <option value="Home Loan">Home Loan</option>
                                <option value="Education Loan">Education Loan</option>
                                <option value="House Loan">House Loan</option>
                            </select>
                            <span class="text-danger">
                                @error('loan')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" class="form-control " placeholder="Phone Number">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control " placeholder="City">
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <select name="provience" id="" class="form-control p-3 ">
                                <option>Provience</option>
                                <option value="Provience 1">Provience 1</option>
                                <option value="Provience 2">Provience 2</option>
                                <option value="Provience 3">Provience 3</option>
                                <option value="Provience 4">Provience 4</option>
                                <option value="Provience 5">Provience 5</option>
                                <option value="Provience 6">Provience 6</option>
                                <option value="Provience 7">Provience 7</option>
                            </select>
                            <span class="text-danger">
                                @error('provience')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">

                            <input type="text" name="peraddress" class="form-control " placeholder="Permanent Address">
                            <span class="text-danger">
                                @error('peraddress')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">

                            <input type="text" name="tempaddress" class="form-control "
                                placeholder="Temporary Address">
                            <span class="text-danger">
                                @error('tempaddress')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">

                            <textarea name="objective" id="" class="form-control " rows="3" placeholder="Objectives of Loan"></textarea>
                            <span class="text-danger">
                                @error('objective')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="upload">
                                <label class="custom-file-label" for="upload"><i class="ion-android-cloud-outline"
                                        name="image"></i>Choose file</label>
                                <span class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="g-recaptcha mt-4" data-sitekey="6LdQWKkfAAAAAGd4BzdM5YKBoiT0LOfR_iQBtfsq" id="g-recaptcha-error"></div>
                            </div>
                           

                </fieldset>

                <button type="submit" id="submit" class="action-button">Submit</button>

            </form>
        </section>
        <!-- END Multiform HTML -->
    </article>
</main>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(document).on('click', '#submit', function(){
        var response = grecaptcha.getResponse();

        if(response.length ==0){
            alert('Please you are not a rebot');
            return false;
        }
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="{{ asset('./admin_asset/plugins/jquery/jquery.min.js') }}"></script>
@if (Session::has('loanmsg'))
    <script>
        swal("Thanks!", "{!! Session::get('loanmsg') !!}", "success", {
            button: "OK",
        });
    </script>
@endif
