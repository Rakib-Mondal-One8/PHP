<ul>
    <?php foreach ($data as $name): ?>
        <li>
            <a href="name.php? <?php echo http_build_query(['name' => $name]); ?>">
                <?php echo e($name); ?>
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
                <a class="pagination__link" href="char.php?<?php echo http_build_query(['page' => ($page - 1),'char' => $char]); ?>">⏴</a>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $pageLimit; $i++) : ?>
            <li class="pagination__li">
                <a class="pagination__link <?php if ($page === $i) echo 'pagination__link--active'; ?>" href="char.php?<?php echo http_build_query(['page' => $i,'char'=>$char]); ?>"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $pageLimit): ?>
            <li class="pagination__li">
                <a class="pagination__link" href="char.php?<?php echo http_build_query(['page' => ((($page + 1) > $pageLimit) ? $page : $page + 1),'char'=>$char]); ?>">⏵</a>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>