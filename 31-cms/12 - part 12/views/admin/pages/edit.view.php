<h1>Edit new Page</h1>

<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php /* var_dump($page); */?>

<form method="POST" action="index.php?<?php echo http_build_query(['route' => 'admin/pages/edit', 'id' => $page->id]); ?>">
    <input type="hidden" name="_csrf" value="<?php echo e(csrf_token()); ?>">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?php
                                            if (isset($_POST['title'])) echo e($_POST['title']);
                                            else echo e($page->title);
                                            ?>" id="title" />


    <label for="content">Content:</label>
    <textarea name="content" id="content"><?php
                                            if (!empty($_POST['title'])) echo e($_POST['content']);
                                            else echo e($page->content);
                                            ?>
    </textarea>

    <input type="submit" value="Submit!">
</form>