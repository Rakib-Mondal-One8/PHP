<?php

require __DIR__ . '/inc/all.inc.php';

$char = strtoupper((string) ($_GET['char'] ?? ''));
if (strlen($char) > 1) $char = $char[0];

$data = fetch_names_by_initial($char);

?>
<?php require __DIR__ . '/views/header.php'; ?>

<ul>
    <?php foreach ($data as $name): ?>
        <li>
            <a href="name.php? <?php echo http_build_query(['name' => $name]); ?>">
                <?php echo e($name); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require __DIR__ . '/views/footer.php'; ?>