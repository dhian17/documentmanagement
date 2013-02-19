<h3>Categories</h3>
<?php echo anchor('categories/add', 'Add'); ?><br/>

    
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php if ($categories): ?>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['description']; ?></td>
                    <td>
                        <a href="<?php echo site_url('categories/edit/' . $category['id']) ?>">Edit</a> |
                        <a href="<?php echo site_url('categories/delete/' . $category['id']) ?>" onclick="return confirm('Anda yakin akan menghapus ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

