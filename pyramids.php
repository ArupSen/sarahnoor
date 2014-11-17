<?php
// -- pyramids.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$collection_images = array(
  array('bangle','Pyramid Bangle<br />
Diamond wt.ct: .27ct<br />
Composed of 18k yellow gold<br />
'),
  array('Bracelet1','Pyamid Bracelet Alternating Diamonds (Large)<br />
Diamond wt.ct: .50ct<br />
Composed of 18k yellow gold<br />
'),
  array('Earrings1','Mini Pyramid Earrings<br />
  Diamond wt.ct: .27ct<br />
  Composed of 18k yellow gold<br />
'),
  array('Earrings2','Hollow Pyramid Earrings<br />
  Diamond wt.ct: .55ct<br />
  Composed of 18k yellow gold<br />
'),
  array('Necklace1','Mini Pyramid Pendent<br />
  Diamond wt.ct: .20ct<br />
  Composed of 18k yellow gold<br />
'),
  array('Necklace2','Hollow Pyramid Pendent<br />
  Diamond wt.ct: .60ct<br />
  Composed of 18k yellow gold<br />
')
);
for ($i = 0; $i < count($collection_images); $i++) {
  $collection_images[$i][1] = $collection_images[$i][1].'Available in rose and white gold';
}
require_once INCPATH.'create_slides.php';
?>
<?php footer(); ?>
