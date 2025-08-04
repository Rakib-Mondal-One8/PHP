<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>



<?php if(!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
    <?php $id = $_GET['image']; ?>
    <h1><?php echo e($imageTitles[$id]); ?></h1>
    <img src="./images/<?php echo rawurlencode($id) ;?>" alt="" />
    <p><?php  echo str_replace("\n","<br/>",e($imageDescriptions[$id]));?></p>
<?php else: ?>

    <div class="notice">
        This Image is not found.
    </div>

<?php endif; ?>

<a href="gallery.php">Back to Gallery</a>


<?php include './views/footer.php'; ?>
