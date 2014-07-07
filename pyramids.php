<?php
// -- pyramids.php --
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
  'bangle','Bracelet1','Earrings1',
  'Earrings2','Necklace1','Necklace2'
);
$collection_text = array(
  'Pyramid Bangle<br />
Diamond wt.ct: .27ct<br />
Metal wt. g: 8.810 <br />
Composed of 18k yellow gold',
  'Pyamid Bracelet Alternating Diamonds (Large)<br />
Diamond wt.ct: 3.5ct<br />
Metal wt.g: 28<br />
Composed of 18k yellow gold',
  'Swirl Ring<br />
  Diamond wt.ct: .40ct<br />
  Metal wt. g: 0.938 <br />
  Composed of 18k yellow gold',
  'Multi Row Ear Cuff<br />
  Diamond wt.ct: .38ct<br />
  Metal wt. g: 1.378 <br />
  Composed of 18k yellow gold',
  'Triple Hoop Ear Cuff <br />
  Diamond wt.ct: .30ct<br />
  Metal wt. g: 1.648 <br />
  Composed of 18k yellow gold',
  'Single Ear Cuff<br />
  Diamond wt.ct: .15ct<br />
  Metal wt. g: 0.856<br /> 
  Composed of 18k yellow gold',
  'Baby BagueLe Earring<br />
  Diamond wt.ct: .55ct<br />
  Metal wt. g: 1.278 <br />
  Composed of 18k yellow gold'
);
$count = count($collection_images);
for ($i = 0; $i < $count; $i++) {
  echo '<figure class="crsl-item">';
  img_tag($collection_images[$i].'.jpg','','');
  echo '<p>'.$collection_text[$i].'</p>';
  echo '</figure>';
}
?>
  </div>
</div>


<?php 
// filename, title, id
// img_tag('','',''); ?>

<?php footer(); ?>
