<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    body
    {
        background-attachment: fixed;
        background-image: url(<?php echo base_url();?>./liyue.png);
    }
    header 
    {
        background-color: transparent;
        padding: 30px;
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
                    <h5 class="card-title">Name : <?= $character['name_char']; ?></h5>
                    <h6 class="card-title">Gender : <?= $character['gender']; ?></h6>
                    <h6 class="card-title">Rarity Star : <?= $character['star']; ?></h6>
                    <h6 class="card-title">Organization : <?= $character['organization']; ?></h6>
                    <h6 class="card-title">Origin : <?= $character['origin']; ?></h6>
                    <h6 class="card-title">Constellation : <?= $character['constellation']; ?></h6>
                    <h6 class="card-title">Element : <?= $character['element']; ?></h6>
                    <h6 class="card-title">Weapon : <?= $character['weapon']; ?></h6>
                </div>
            </div>
            <div class="card bg-transparent">
                <div class="card-body text-center">
                    <h4 class="card-title">Voice Actor Japanese : <?= $character['vo_japanese']; ?></h4>
                    <h4 class="card-title">Voice Actor Chinese : <?= $character['vo_chinese']; ?></h4>
                    <h4 class="card-title">Voice Actor Chinese : <?= $character['vo_english']; ?></h4>
                </div>
            </div>
        </div>
        <a href="<?= base_url(); ?>character" class="btn btn-transparent">Back</a>
    </div>
</body>