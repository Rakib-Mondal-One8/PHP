<h1>I'm the admin/pages/index.view.php file!</h1>


<table>
    <tr>
        <th>Id</th>
        <th>Slug</th>
        <th>Title</th>
        <th>Content</th>
    </tr>

    <?php foreach ($info as $data): ?>
        <tr>
            <td><?php echo $data->id; ?></td>
            <td><?php echo $data->slug; ?></td>
            <td><?php echo $data->title; ?></td>
            <td><?php echo $data->content; ?></td>
        </tr>

    <?php endforeach; ?>
</table>