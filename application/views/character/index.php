<style>
    body
    {
      background-attachment: fixed;
      background-image: url(<?php echo base_url();?>./liyue.png);
    }
  </style>
  
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Character List</h3>
            <?php if (empty($character)) : ?>
                <div class="alert alert-danger" role="alert">
                404 Error
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($character as $char) : ?>
                <li class="list-group-item bg-transparent">
                    <?= $char['name_char']; ?>
                    <a href="<?= base_url(); ?>character/delete/<?= $char['id_char']; ?>"
                        class="badge badge-danger float-right tombol-hapus">Delete</a>
                    <a href="<?= base_url(); ?>character/detail/<?= $char['id_char']; ?>"
                        class="badge badge-primary float-right">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>character/add" class="btn btn-primary">Add New Character Data</a>
        </div>
    </div>
</div>