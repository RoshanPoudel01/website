{{-- <section class="footer">
    <div class="container">
        <div class="col-md-4">
            <h5><strong>Contact Details</strong></h5>
            <ul>
                <li>Government of Nepal</li>
                <li>Ministry of Health and Population</li>
                <li>Phone:+977- 014262543, 4262802</li>
                <li>Fax:+977-01-4262696</li>
                <li>Email:info (@) mohp.gov.np</li>

            </ul>
        </div>
        <div class="col-md-4">
            <div class="pagedetails">
                <ul>
                    <li>Page Last Updated On : 2018-12-05 10:51:31</li>
                    <li>Current Time : 09:21:41 AM</li>
                    <li>Visitor Counter : 1997</li>
                </ul>
                <h5><strong>Stay Connected</strong></h5>
                <div class="icons">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div class="icons">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="icons">
                <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 twittes">
            <a href="#">Tweets by mohp</a>
        </div>
    </div>
</section>
<section class="copyright">
    <div class="container">
        <div class="col-md-12">
            <p>
            Copyright © 2018. All Rights Reserved.
            </p>
        </div>
    </div>
</section> --}}
<script src="{{asset('assets/js/jquery-2.2.2.min.js')}}"></script>

<script src="{{asset('assets/library/bootstrap/js/bootstrap.min.js')}}"></script>

{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script> --}}


{{-- <script src="{{asset('assets/js/transition.min.js')}}"></script> --}}


<script src="{{asset('assets/library/bxslider/jquery.bxslider.min.js')}}"></script>
            <script>
                $(document).ready(function(){
                  $('.bxslider').bxSlider({
                      auto:true
                  });
                });
            </script>
            <script type="text/javascript">
                (function($){
    $(document).ready(function(){
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);
            </script>
            <script>
            function tick(){
                $('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
            }
            setInterval(function(){ tick () }, 4000);
</script>
