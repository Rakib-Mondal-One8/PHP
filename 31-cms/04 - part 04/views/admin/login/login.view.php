<h1>Create new Page</h1>

<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form method="POST" action="index.php?<?php echo http_build_query(['route' => 'admin/login']) ?>">

    <label for="login-username">Username:</label>
    <input type="text" name="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>" id="login-username" />

    <label for="login-password">Password:</label>
    <input type="password" name="password" value="" id="login-password" /> <br>

    <input type="submit" value="Login!">
</form>