<h1>Pages List</h1>
<a href="<?= site_url('admin/pages/create') ?>">Create New Page</a>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages as $p): ?>
        <tr>
            <td><?= $p->id ?></td>
            <td><?= $p->title ?></td>
            <td><?= $p->slug ?></td>
            <td><?= $p->status ?></td>
            <td>
                <a href="<?= site_url('site/page/'.$p->slug) ?>">View</a> |
                <a href="<?= site_url('admin/pages/edit/'.$p->id) ?>">Edit</a> |
                <a href="<?= site_url('admin/pages/delete/'.$p->id) ?>" onclick="return confirm('Delete this page?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
