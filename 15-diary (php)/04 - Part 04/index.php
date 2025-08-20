<?php

require __DIR__ . "/inc/functions.inc.php";
require __DIR__ . "/inc/db-connect.inc.php";


$perPage = 2;
$page = (int) ($_GET['page'] ?? 1);


// page = 1 offset = 0
// page = 2 offset = $perPage
// Page = 3 offset = $perPage * 2;

$offset = ($page - 1) * $perPage;

$stmt = $pdo->prepare("SELECT * FROM `entries` ORDER BY `date` DESC,`id` DESC LIMIT :perPage OFFSET :offset");
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();


?>

<?php require __DIR__ . "/views/header.view.php"; ?>

<h1 class="main-heading">Entries</h1>

<?php while (($result = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) : ?>
    <div class="card">
        <div class="card__image-container">
            <img class="card__image" src="images/pexels-canva-studio-3153199.jpg" alt="" />
        </div>
        <div class="card__desc-container">
            <div class="card__desc-time"><?php echo e($result['date']); ?></div>
            <h2 class="card__heading"><?php echo e($result['title']); ?></h2>
            <p class="card__paragraph">
                <?php echo nl2br(e($result['message'])); ?>
            </p>
        </div>
    </div>
<?php endwhile; ?>

<ul class="pagination">
    <li class="pagination__li">
        <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => ($page - 1)]); ?>">⏴</a>
    </li>
    <li class="pagination__li">
        <a class="pagination__link <?php if ($page === 1) echo 'pagination__link--active'; ?>" href="index.php?<?php echo http_build_query(['page' => 1]); ?>">1</a>
    </li>
    <li class="pagination__li">
        <a class="pagination__link <?php if ($page === 2) echo 'pagination__link--active'; ?>" href="index.php?<?php echo http_build_query(['page' => 2]); ?>">2</a>
    </li>
    <li class="pagination__li">
        <a class="pagination__link <?php if ($page === 3) echo 'pagination__link--active'; ?>" href="index.php?<?php echo http_build_query(['page' => 3]); ?>">3</a>
    </li>
    <li class="pagination__li">
        <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => ($page + 1)]); ?>">⏵</a>
    </li>
</ul>


<?php require __DIR__ . "/views/footer.view.php"; ?>