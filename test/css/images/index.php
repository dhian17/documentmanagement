<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: TOTALINDO ::.</title>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body><br /><br/><br/><br/><br/>
<div class="control-group center">

<h3>List Posts</h3>
<?php echo anchor('proses/add', 'Add'); ?><br/>
<?php if ($this->session->flashdata('success')): ?>
    <i><?php echo $this->session->flashdata('success'); ?><i/>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <i><?php echo $this->session->flashdata('error'); ?><i/>
        <?php endif; ?>
        
            <?php if (!empty($posts)): ?>
                <?php $no = 1; ?>
                <?php foreach ($posts as $post): ?>
                    <tr><br /><br/>
                        <td><?php echo $no; ?></td>
                        <td><img src="<?php echo base_url().$post['photo']; ?>" width="100" height="100"/></td>
                        <td><?php echo $post['username']; ?></td>
                        <td><?php echo $post['password']; ?></td>
                        <td><?php echo $post['nama_lengkap']; ?></td>
                        <td><?php echo $post['jabatan']; ?></td>
                        <td><?php echo $post['departemen']; ?></td>
                        <td><?php echo $post['email']; ?></td>
                        <td><?php echo $post['mobile']; ?></td>
                        <td><?php echo $post['phone']; ?></td>
                        <td><?php echo $post['fax']; ?></td>
                        
                        <td>
                            <a href="<?php echo site_url('proses/edit/' . $post['id']); ?>">Edit</a> |
                            <a href="<?php echo site_url('proses/delete/' . $post['id']); ?>" onclick=" return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            <?php endif; ?>

        </table></div>
        </body></html>