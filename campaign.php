<?php
// -- press.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$collection_images = array(
  array('campaign1','Multi Row Ring<br />
  Diamond wt.ct: .78ct<br />
  Composed of 18k yellow gold'),
  array('campaign2','Baby BagueLe Ring<br />
  Diamond wt.ct: .43ct<br />
  Composed of 18k yellow gold'),
  array('campaign3','Swirl Ring<br />
  Diamond wt.ct: .40ct<br />
  Composed of 18k yellow gold'),
  array('campaign4','Multi Row Ear Cuff<br />
  Diamond wt.ct: .38ct<br />
  Composed of 18k yellow gold'),
  array('campaign5','Triple Hoop Ear Cuff <br />
  Diamond wt.ct: .30ct<br />
  Composed of 18k yellow gold'),
  array('campaign6','Single Ear Cuff<br />
  Diamond wt.ct: .15ct<br />
  Composed of 18k yellow gold')
);
require_once INCPATH.'create_slides.php';
?>

<?php footer(); ?>
