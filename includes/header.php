<?php
// included header file which also inserts meta tags
// // the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html>

<html lang="en">
<!--
Site dev by Arup Sen - arupsen48@gmail.com
Site design by Alyson Mowat - alysonmowat@gmail.com
Source code can be found at https://github.com/ArupSen/sarahnoor
-->
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">


  <meta name="description" content="<?php echo ${$filename}['description']; ?>" />
  <meta name="keywords" content="<?php echo ${$filename}['keywords']; ?>" />

  <title>Sarah Noor Jewellery | <?php echo ${$filename}['title']; ?></title>
<!-- Google webfonts Lato -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
  <link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />

</head>
<body id="<?php echo $filename; ?>">
  <div id="wrap" class="container">
<div class="heading">
  <h1><a href="index.php">Sarah &nbsp; Noor</a></h1>
</div>
