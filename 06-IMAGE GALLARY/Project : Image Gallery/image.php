<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php $id = $_GET['id']; ?>

<h1><?php echo $imageTitles[$id]; ?></h1>
<img src="./images/<?php echo e($id) ;?>" alt="" />

<p><?php  echo $imageDescriptions[$id]  ;?></p>

<a href="gallery.php">Back to Gallery</a>
<?php include './views/footer.php'; ?>
