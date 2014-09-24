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
<dd><a href="mailto:info@sarahnoor.com">info<span>@</span>sarahnoor.com</a></dd><dd> <a href="tel://0207 193 8858">0207 193 8858</a></dd>
    <dt>Orders and wholesale</dt> <dd><a href="mailto:orders@sarahnoor.com">orders<span>@</span>sarahnoor.com</a></dd>
    <dt>Press</dt> <dd><a href="mailto:sophie@5thhousepr.com">sophie<span>@</span>5thhousepr.com</a></dd> <dd><a href="tel://0207 580 8519">0207 580 8519</a></dd>
<dt class="credits"><a href="website-terms-and-conditions.pdf">Terms and conditions</a></dt>
  <div class="social-icons">
    <a href="http://instagram.com/sarahnoorjewellery/" title="follow me on instagram" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/sarahalhassan_" title="follow me on twitter" target="_blank"><i class="fa fa-twitter-square"></a></i>
  </div>
    <dt class="credits">Illustration by</dt> <dd class="credits"><a href="mailto:florian.meacci@live.fr">Florian Meacci</a></dd> 
    <dt class="credits">Website design by</dt> <dd class="credits"><a href="mailto:alysonmowat@gmail.com">Alyson Mowat</a></dd> 
</dl>
</div><!-- .col-md-3 -->
</div>
</div>
<?php footer(); ?>
