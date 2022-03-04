  <!-- ======= Footer ======= -->
  <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="#">Reports</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i> <a href="#">Remitance Services</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#">Banking Serving</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#">Loans Services</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#">Ambulance Services</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#">Other</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Sunilsmarti Rural Municipality-3
                            <br>
                            Rolpa, Nepal <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h4>About Us</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container copy">
            <div class="copyright">
                &copy; Copyright <strong><span>Suryodaya Cooperative</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Sushil KC</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{asset('./asset/js/parsley.min.js')}}"></script>
    <script src="{{asset('./asset/js/script.js')}}"></script>
    <script src="{{asset('./asset/Carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./asset/Animation/wow.min.js')}}"></script>
    <script src="{{asset('./asset/js/datetime.js')}}"></script>
    <script src="{{asset('./asset/js/navbar.js')}}"></script>
    <script src="{{asset('./asset/js/script.js')}}"></script>
    <script>
        
$(function(){
    var $sections = $('.form-section');
    function navigateTo(index){
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length -1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);
    }
    function curIndex(){
        return $sections.index($sections.filter('.current'));
    }
    $('.form-navigation .previous').click(function(){
        navigateTo(curIndex()-1);
    });
    $('.form-navigation .next').click(function(){
        $(".contact-form").parsley().whenValidate({
            group: 'block-' + curIndex()
        }).done(function(){
            navigateTo(curIndex()+1);
        });
    });
    $sections.each(function(index, section){
        $(section).find(':input').attr('data-parsley-group','block'+ index);
    });
    navigateTo(0);
});
    </script>
@livewireScripts

</body>

</html>