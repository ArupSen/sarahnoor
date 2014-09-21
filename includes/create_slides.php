<?php
// -- create_slides.php --
// set the slide navigation and create images with captions
// for the collection pages
?>
<div id="NAV-ID" class="crsl-nav">
  <a href="#" class="previous"><?php
  img_tag('arrow-left.jpg','','');
  ?></a>
  <a href="#" class="next"><?php
  img_tag('arrow-right.jpg','','');
  ?></a>
</div>
<div class="crsl-items" data-navigation="NAV-ID">
  <div class="crsl-wrap">
<?php
$count = count($collection_images);
for ($i = 0; $i < $count; $i++) {
  echo '<figure class="crsl-item">';
  img_tag($collection_images[$i][0].'.jpg','','');
  echo '<p>'.$collection_images[$i][1].'</p>';
  echo '</figure>';
}
?>
  </div><!-- end of .crsl-wrap -->
</div><!-- end of .crsl-items -->
