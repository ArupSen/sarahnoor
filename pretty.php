<?php
// -- colletions.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$collection_images = array(
  array('ring1','Multi Row Ring<br />
  Diamond wt.ct: .78ct<br />
  Metal wt. g: 1.994 <br />
  Composed of 18k yellow gold'),
  array('ring2','Baby BagueLe Ring<br />
  Diamond wt.ct: .43ct<br />
  Metal wt. g: 1.234 <br />
  Composed of 18k yellow gold'),
  array('ring3','Swirl Ring<br />
  Diamond wt.ct: .40ct<br />
  Metal wt. g: 0.938 <br />
  Composed of 18k yellow gold'),
  array('cuff1','Multi Row Ear Cuff<br />
  Diamond wt.ct: .38ct<br />
  Metal wt. g: 1.378 <br />
  Composed of 18k yellow gold'),
  array('cuff2','Triple Hoop Ear Cuff <br />
  Diamond wt.ct: .30ct<br />
  Metal wt. g: 1.648 <br />
  Composed of 18k yellow gold'),
  array('cuff3','Single Ear Cuff<br />
  Diamond wt.ct: .15ct<br />
  Metal wt. g: 0.856<br /> 
  Composed of 18k yellow gold'),
  array('earrings','Baby BagueLe Earring<br />
  Diamond wt.ct: .55ct<br />
  Metal wt. g: 1.278 <br />
  Composed of 18k yellow gold')
);
require_once INCPATH.'create_slides.php';
?>
<?php footer(); ?>
