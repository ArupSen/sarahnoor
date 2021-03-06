<?php
// -- pretty.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$collection_images = array(
  array('ring1','Multi Row Ring<br />
  Diamond wt.ct: .78ct<br />
  Composed of 18k yellow gold<br />
'),
  array('ring2','Baby Baguette Ring<br />
  Diamond wt.ct: .43ct<br />
  Composed of 18k yellow gold<br />
'),
  array('ring3','Swirl Ring<br />
  Diamond wt.ct: .40ct<br />
  Composed of 18k yellow gold<br />
'),
  array('cuff1','Multi Row Ear Cuff<br />
  Diamond wt.ct: .38ct<br />
  Composed of 18k yellow gold<br />
'),
  array('cuff2','Triple Hoop Ear Cuff <br />
  Diamond wt.ct: .30ct<br />
  Composed of 18k yellow gold<br />
'),
  array('cuff3','Single Ear Cuff<br />
  Diamond wt.ct: .15ct<br />
  Composed of 18k yellow gold<br />
'),
  array('earrings-use','Baby Baguette Earring<br />
  Diamond wt.ct: .55ct<br />
  Composed of 18k yellow gold<br />
')
);
for ($i = 0; $i < count($collection_images); $i++) {
  $collection_images[$i][1] = $collection_images[$i][1].'Available in rose and white gold';
}
require_once INCPATH.'create_slides.php';
?>
<?php footer(); ?>
