<?php
// -- pyramids.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$collection_images = array(
  array('bangle','Pyramid Bangle<br />
Diamond wt.ct: .27ct<br />
Metal wt. g: 8.810 <br />
Composed of 18k yellow gold'),
  array('Bracelet1','Pyamid Bracelet Alternating Diamonds (Large)<br />
Diamond wt.ct: 3.5ct<br />
Metal wt.g: 28<br />
Composed of 18k yellow gold'),
  array('Earrings1','Swirl Ring<br />
  Diamond wt.ct: .40ct<br />
  Metal wt. g: 0.938 <br />
  Composed of 18k yellow gold'),
  array('Earrings2','Multi Row Ear Cuff<br />
  Diamond wt.ct: .38ct<br />
  Metal wt. g: 1.378 <br />
  Composed of 18k yellow gold'),
  array('Necklace1','Triple Hoop Ear Cuff <br />
  Diamond wt.ct: .30ct<br />
  Metal wt. g: 1.648 <br />
  Composed of 18k yellow gold'),
  array('Necklace2','Single Ear Cuff<br />
  Diamond wt.ct: .15ct<br />
  Metal wt. g: 0.856<br /> 
  Composed of 18k yellow gold')
);
require_once INCPATH.'create_slides.php';
?>
<?php footer(); ?>
