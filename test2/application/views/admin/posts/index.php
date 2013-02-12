<h3>List Posts</h3>
<?php echo anchor('posts/add', 'Add'); ?><br/>
<?php if ($this->session->flashdata('success')): ?>
    <i><?php echo $this->session->flashdata('success'); ?><i/>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <i><?php echo $this->session->flashdata('error'); ?><i/>
        <?php endif; ?>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Title</td>
                <td>Nomor</td>
                <td>Version</td>
                <td>History</td>
                <td>Type</td>
                <td>Action</td>
            </tr>
            <?php if (!empty($posts)): ?>
                <?php $no = 1; ?>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $post['image']; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $post['nomor']; ?></td>
                        <td><?php echo $post['version']; ?></td>
                        <td><?php echo $post['history']; ?></td>
                        <td><?php echo $post['type']; ?></td>
                        
                        <td>
                            <a href="<?php echo site_url('posts/edit/' . $post['id']); ?>">Edit</a> |
                            <a href="<?php echo site_url('posts/delete/' . $post['id']); ?>" onclick=" return confirm('Are you sure?')">Delete</a>
                            <td><?php echo "<b><a href='".base_url()."./public/media/posts/".$post['image']."'>[ Download ]</a></b>"?></td>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            <?php endif; ?>

        </table>