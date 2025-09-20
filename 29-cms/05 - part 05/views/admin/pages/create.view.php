<h1>Create new Page</h1>

<form method="POST" action="index.php?route=admin/pages/create">
    <label for="title">Title:</label>
    <input type="text" name="title" value="" id="title" />

    <label for="slug">Slug:</label>
    <input type="text" name="slug" value="" id="slug" />

    <label for="content">Title:</label>
    <textarea name="content" id="content"></textarea>

    <input type="submit" value="Submit!">
</form>