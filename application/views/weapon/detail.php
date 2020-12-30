<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    body
    {
      background-attachment: fixed;
      background-image: url(<?php echo base_url();?>./mondstadt.png);
    }
    header 
    {
        background-color: transparent;
        padding: 10px;
        text-align: center;
        font-size: 35px;
        color: black;
    }
  </style>

<body>
<header>
</header>
  <div class="container">
    <div class="card-deck">
      <div class="card bg-transparent">
        <div class="card-body text-center">
          <h5 class="card-text">Name : <?= $weapon['name_wp']; ?></h5>
          <h6 class="card-text">Type : <?= $weapon['type']; ?></h6>
          <h6 class="card-text">Rarity Star : <?= $weapon['star']; ?></h6>
          <h6 class="card-text">Base Damage : <?= $weapon['bs_dmg']; ?></h6>
          <h6 class="card-text">Ability : <?= $weapon['ability']; ?></h6>
        </div>
      </div>
      <div class="card bg-transparent">
        <div class="card-body text-center">
          <h5 class="card-text">Ascension 1 : <?= $weapon['asc1']; ?></h5>   
          <h5 class="card-text">Ascension 2 : <?= $weapon['asc2']; ?></h5>   
          <h5 class="card-text">Ascension 3 : <?= $weapon['asc3']; ?></h5>   
          <h5 class="card-text">Ascension 4 : <?= $weapon['asc4']; ?></h5>   
          <h5 class="card-text">Ascension 5 : <?= $weapon['asc5']; ?></h5>   
          <h5 class="card-text">Ascension 6 : <?= $weapon['asc6']; ?></h5>
        </div>
      </div>
    </div>
    <a href="<?= base_url(); ?>weapon" class="btn btn-transparent">Back</a>
  </div>
</body>