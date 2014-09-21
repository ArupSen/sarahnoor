<?php
// -- contact.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-5">
<?php img_tag('contact-page.jpg','','contact-pic'); ?>
</div><!-- .col-md-5 -->
  <div class="col-md-3">
<div class="numbers">
<dl>
    <dt>General inquiries</dt>
<dd>info<span>@</span>sarahnoor.com</dd><dd> 0207 193 8858</dd>
    <dt>Orders and wholesale</dt> <dd>orders<span>@</span>sarahnoor.com</dd>
    <dt>Press</dt> <dd>sophie<span>@</span>5thhousepr.com</dd> <dd>0207 580 8519</dd>
<dt class="credits"><a href="#">Terms and conditions</a></dt>
  <div class="social-icons">
    <a href="http://instagram.com/sarahnoorjewellery/" title="follow me on instagram" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/sarahalhassan_" title="follow me on twitter" target="_blank"><i class="fa fa-twitter-square"></a></i>
  </div>
    <dt class="credits">Illustration by</dt> <dd class="credits">Florian Meacci</dd> 
    <dt class="credits">Website design by</dt> <dd class="credits">Alyson Mowat</dd> 
</dl>
</div><!-- .col-md-3 -->
</div>
</div>
<?php footer(); ?>
