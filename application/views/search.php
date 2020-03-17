<div style="padding:30px; background-color: white; margin-top: 20px; margin-bottom: 30px;">
  <h1 align="center">Hasil penelusuran untuk <b><?= $keyword; ?></b></h1>

</div>
<title>Search</title>
<div class="card-deck" style="padding: 50px; padding-top: 10px;">
        <?php $i = 0; foreach ($searchRes as $item) :  ?>
        <a href="<?= base_url('index.php/controller/kosdetail/').$item['id']; ?>">
        <div class="card" style="max-width: 280px; max-height: 390px;">
          <img src="<?= base_url($item['kos_img']) ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $item['nama_kos'] ?></h5>
            <p class="card-text"><?= $item['alamat'] ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><?= $item['harga'] ?></small>
          </div>
        </div>
        </a>
        <?php if (($i +1)%4 == 0 && $i != 0){ ?>  
          </div>
          <div class="card-deck" style="padding: 50px; padding-top: 20px;">
        <?php } ?>
 
      <?php $i++; endforeach ?>
</div>