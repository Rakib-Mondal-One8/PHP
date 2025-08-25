<?php

require __DIR__ . '/inc/all.inc.php';

$char = strtoupper((string) ($_GET['char'] ?? ''));
if (strlen($char) > 1) $char = $char[0];

$stmt = $pdo->prepare("SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr");
$stmt->bindValue(':expr', $char . '%');
$stmt->execute();

$data = [];
while (($arr = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
    $data[] = $arr['name'];
}

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