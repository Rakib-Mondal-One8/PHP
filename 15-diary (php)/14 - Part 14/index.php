<?php

require __DIR__ . "/inc/functions.inc.php";
require __DIR__ . "/inc/db-connect.inc.php";

date_default_timezone_set('Europe/Berlin');

$stmt = $pdo->query("SELECT COUNT(*) FROM entries");
$count = $stmt->fetchColumn();  // number of rows inside the database 


$perPage = 3;

$page = (int) ($_GET['page'] ?? 1);
if ($page < 1) $page = 1;

$pageLimit = ceil($count / $perPage);

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

        <?php if ($result['image'] !== NULL): ?>
            <div class="card__image-container">
                <img class="card__image" src="uploads/<?php echo $result['image']; ?>" alt="" />
            </div>
        <?php endif; ?>

        <div class="card__desc-container">
            <?php
            $dateExplode = explode('-', $result['date']);

            $timestamp = mktime(12, 0, 0, $dateExplode[1], $dateExplode[2], $dateExplode[0]);
            $result['date'] = date('d.m.Y');
            ?>
            <div class="card__desc-time"><?php echo e($result['date']); ?></div>
            <h2 class="card__heading"><?php echo e($result['title']); ?></h2>
            <p class="card__paragraph">
                <?php echo nl2br(e($result['message'])); ?>
            </p>
        </div>
    </div>
<?php endwhile; ?>

<?php if ($pageLimit > 1): ?>
    <ul class="pagination">
        <?php if ($page > 1): ?>
            <li class="pagination__li">
                <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => ($page - 1)]); ?>">⏴</a>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $pageLimit; $i++) : ?>
            <li class="pagination__li">
                <a class="pagination__link <?php if ($page === $i) echo 'pagination__link--active'; ?>" href="index.php?<?php echo http_build_query(['page' => $i]); ?>"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $pageLimit): ?>
            <li class="pagination__li">
                <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => ((($page + 1) > $pageLimit) ? $page : $page + 1)]); ?>">⏵</a>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>

<?php require __DIR__ . "/views/footer.view.php"; ?>