<?php
// -- footer.php --
?>

</div><!-- end of contents -->
<div id="footer">
  <!-- <a href="http://arupdesigns.co.uk" onclick="window.open('http://arupdesigns.co.uk');return false"><?php // img_tag('ad_icon.png','site by arup designs'); ?></a> -->
</div>
</div> <!-- end of wrap -->
<!-- the Google Analytics tracker -->
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  try {
  var pageTracker = _gat._getTracker(""); // add the tracker ID
  pageTracker._trackPageview();
  } catch(err) {}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php
echo JSPATH.'responsiveCarousel.min.js';
?>"></script>
<script>
jQuery(document).ready(function($){
  $('.crsl-items').carousel({ overflow: true, visible: 1, itemMinWidth: 300, itemMargin: 200 });
  // hover to reveal the item details
  $('figure img').after('<p>');
  $('figure p').hide();
  $('figure').on('mouseenter', function() {
    $(this).find('p').fadeIn();
  });
  $('figure').on('mouseleave', function() {
    $(this).find('p').fadeOut();
  });
  // about page
  $('#contents').find('.col-md-3').eq(0).find('img').addClass('birds');
});
</script>
</body>
</html>
