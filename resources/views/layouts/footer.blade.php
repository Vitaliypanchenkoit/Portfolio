<div id="tooplate_bottom_wrapper">
	<div id="tooplate_bottom">
    	<div class="col col_4">
        	<h4>Information</h4>
      		 <ul class="list_bullet">
                <li><a href="#">About us</a></li>
                <li><a href="#">Our partners</a></li>
            </ul>
        </div>
        <div class="col col_4">
        	<h4>Services &amp; Support</h4>
      		<ul class="list_bullet">
                <li><a href="#">Need help</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </div>
        <div class="col col_4 tSwitter">
        	<h4>Pages</h4>
      		<ul class="list_bullet">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('categories') }}">Categories</a></li>
                <li><a href="{{ route('about') }}" class="selected">About</a></li>
                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                <li><a href="{{ route('contact') }}" class="last">Contact</a></li>
            </ul>


        </div>
        <div class="col col_4">
        	<h4>Social network</h4>
            <p style="font-size: 14px;">Join us</p>

            <div class="clear h30"></div>
            <a href="#"><img src="{{ asset('template/images/facebook.png') }}" alt="Facebook" /></a>
            <a href="#"><img src="{{ asset('template/images/google.png') }}" alt="Google" /></a>
            <a href="#"><img src="{{ asset('template/images/skype.png') }}" alt="Skype" /></a>
            <a href="#"><img src="{{ asset('template/images/twitter2.png') }}" alt="Twitter" /></a>
        </div>

        <div class="clear"></div>
    </div> <!-- END of bottom -->
</div> <!-- END of bottom wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	Copyright © 2018 Bulletin board
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>
</html>