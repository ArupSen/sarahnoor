<?php
// -- colletions.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="NAV-ID" class="crsl-nav">
  <a href="#" class="previous">&lt;</a>
  <a href="#" class="next">&gt;</a>
</div>
<div class="crsl-items" data-navigation="NAV-ID">
  <div class="crsl-wrap">
<?php
$collection_images = array(
  'ring1','ring2','ring3',
  'cuff1','cuff2','cuff3',
  'earrings'
);
$collection_text = array(
  'Single Ear Cuff<br />
  Diamond wt.ct: .15ct<br />
  Metal wt. g: 0.856<br /> Composed of 18k yellow gold'
);
$count = count($collection_images);
for ($i = 0; $i < $count; $i++) {
  echo '<figure class="crsl-item">';
  img_tag($collection_images[$i].'.jpg','','');
  echo '<p>'.$collection_text[0].'</p>';
  echo '</figure>';
}
?>
  </div>
</div>


<?php 
// filename, title, id
// img_tag('','',''); ?>

<?php footer(); ?>
