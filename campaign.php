<?php
// -- campaign.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$collection_images = array(
  array('campaign1',''),
  array('campaign2',''),
  array('campaign3',''),
  array('campaign4',''),
  array('campaign5',''),
  array('campaign6','')
);
require_once INCPATH.'create_slides.php';
?>

<?php footer(); ?>
