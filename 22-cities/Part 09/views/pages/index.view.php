<h1>List of Cities:</h1>
<ul>
    <?php foreach ($entries as $city): ?>
        <li>
            <a href="city.php?<?php echo http_build_query(['id' => $city->id]); ?>">
                <?php echo e($city->getCityWithCountry()); ?>
                <?php /* echo e($city->getFlag());*/ ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php
$pageLimit = ceil($pagination['count'] / $pagination['perPage']);
$page = $pagination['page'];
?>

<?php if ($pageLimit > 1): ?>
    <ul class="pagination">
        <?php if ($page > 1): ?>
            <li class="pagination__li">
                <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => ($page - 1)]); ?>">⏴</a>
            </li>
        <?php endif; ?>

        <?php if ($page < $pageLimit): ?>
            <li class="pagination__li">
                <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => ((($page + 1) > $pageLimit) ? $page : $page + 1)]); ?>">⏵</a>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>