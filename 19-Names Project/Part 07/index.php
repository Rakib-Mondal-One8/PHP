<?php
require __DIR__ . '/inc/all.inc.php';


$overview = gen_name_overview();
?>
<?php require __DIR__ . '/views/header.php'; ?>

<h1>Most common names:</h1>
<ol>
    <?php foreach ($overview as $row): ?>
        <li>
            <a href="name.php?<?php echo http_build_query(['name' => $row['name']]); ?>">

                <?php echo e($row['name']); ?>

            </a>
        </li>
    <?php endforeach; ?>
</ol>

<?php require __DIR__ . '/views/footer.php'; ?>