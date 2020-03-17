
<div class="container" style="padding-top:30px;padding-bottom: 30px;">
  <div style="display:flex;">
    <div class="" style="padding-left: 80px;">
      <div class="">
        <img src="<?= base_url($kos['kos_img']); ?>" style="width:300px; weight:300px;  ">
      </div>
     
    </div>
    <div class="" style="padding-right:200px; padding-left:35px;">
      <h2><?= $kos['nama_kos'];?></h2>
      <h3><?= $kos['alamat'];?></h3>
      <h4><?= $kos['kontak'];?></h4>
    </div>
    <div style="width:262px">
      <div class="" style="border:1px solid black; width:100%; height:102px; padding-top: 25px; padding-left:10px;">
        <div class="">
          <p> <?= $kos['kategori'];?></p>
        </div>
        <div class="">
          <p><?= $kos['harga'];?></p>
        </div>
      </div>
      <div class="" align="center">
        <div class="" style="padding:5% 0 5%;">
          <button type="button" name="button" style="width:100%; height:40px; border-radius:4px;"
          onclick="">Transfer Sekarang </button>
        </div>
        <div class="">
          <button type="button" name="button" style="width:100%; height:40px; border-radius:4px;"> Back </button>
        </div>
      </div>
    </div>
  </div>

</div>
