<?php if (!empty($loginError)): ?>
    <p>An error occured, the username and password combination could not be found.</p>
<?php endif; ?>

<h1>Login</h1>

<form method="POST" action="index.php?<?php echo http_build_query(['route' => 'admin/login']) ?>">
    <input type="hidden" name="_csrf" value="<?php echo e(csrf_token()); ?>">

    
    <label for="login-username">Username:</label>
    <input type="text" name="username" value="<?php if (!empty($_POST['username'])) echo $_POST['username']; ?>" id="login-username" />

    <label for="login-password">Password:</label>
    <input type="password" name="password" value="" id="login-password" /> <br>

    <input type="submit" value="Login!">
</form>