       
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script type='text/javascript' src="js/gallery.js"></script>-->
          <script type='text/javascript' src="js/main.js"></script>
       <!-- end of body  ----->
      <!--<script src="//code.jquery.com/jquery.js"></script>-->
      <!--<script src="js/jquery-1.10.2.min.js"></script>-->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <!----scrolling plugin---->
	<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>

	<script src="js/jssor.sliders.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = { $AutoPlay: true };
            var jssor_slider1 = new $JssorSlider$('slider1_container', options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = $('#slider1_container').parent().width();
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }
            //responsive code end


		
		});
		
</script>
    </body>
</html>