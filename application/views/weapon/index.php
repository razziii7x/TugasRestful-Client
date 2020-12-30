<style>
    body
    {
      background-attachment: fixed;
      background-image: url(<?php echo base_url();?>./mondstadt.png);
    }
  </style>

<body>
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Weapon's List</h3>
            <?php if (empty($weapon)) : ?>
                <div class="alert alert-danger" role="alert">
                404 Error
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($weapon as $wp) : ?>
                <li class="list-group-item bg-transparent">
                    <?= $wp['name_wp']; ?>
                    <a href="<?= base_url(); ?>weapon/delete/<?= $wp['id_wp']; ?>"
                        class="badge badge-danger float-right tombol-hapus">Delete</a>
                    <a href="<?= base_url(); ?>weapon/detail/<?= $wp['id_wp']; ?>"
                        class="badge badge-primary float-right">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>weapon/add" class="btn btn-primary">Add New Weapon Data</a>
        </div>
    </div>
</div>
</body>