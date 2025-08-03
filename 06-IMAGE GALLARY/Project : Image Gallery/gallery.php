<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>


<?php foreach($imageTitles as $key=>$val){ ?>
        <a href="image.php?id=<?php echo e($key); ?>"> <h3><?php echo e($val); ?></h3> </a>
        <img src="./images/<?php echo rawurlencode($key) ;?>" alt="" />
<?php    } ?>


<?php include './views/footer.php'; ?>
