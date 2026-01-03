<h1>Affiliate Keywords</h1>
<a href="<?= site_url('admin/affiliates/add') ?>">Add New Keyword</a>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Keyword</th>
            <th>Affiliate URL</th>
            <th>Platform</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($affiliates as $a): ?>
        <tr>
            <td><?= $a->id ?></td>
            <td><?= $a->keyword ?></td>
            <td><a href="<?= $a->affiliate_url ?>" target="_blank"><?= $a->affiliate_url ?></a></td>
            <td><?= $a->platform ?></td>
            <td>
                <a href="<?= site_url('admin/affiliates/edit/'.$a->id) ?>">Edit</a> |
                <a href="<?= site_url('admin/affiliates/delete/'.$a->id) ?>" onclick="return confirm('Delete this keyword?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
