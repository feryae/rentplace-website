<title>Home</title>
<style media="screen">
#body-row {
  margin-left:0;
  margin-right:0;
}
#sidebar-container {
  min-height: 100vh;
  background-color: #333;
  padding: 0;
}

.sidebar-expanded {
  width: 190px;
}

#sidebar-container .list-group a {
  height: 50px;
  color: white;
}


.sidebar-separator-title {
  background-color: #333;
  height: 35px;
}
.sidebar-separator {
  background-color: #333;
  height: 25px;
}

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #222;
}

.carousel-cell {
  width: 100%;
  height: 300px;
  margin-right: 10px;
  /* center images in cells with flexbox */
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel.is-fullscreen .carousel-cell {
  height: 100%;
}

.carousel-cell-image {
  display: block;
  max-height: 100%;
}

.carousel.is-fullscreen .carousel-cell-image {
  max-width: 100%;
}

.flickity-page-dots {
  bottom: 20px;
}
/* white circles */
.flickity-page-dots .dot {
  width: 12px;
  height: 12px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;
}
/* fill-in selected dot */
.flickity-page-dots .dot.is-selected {
  background: white;
}

</style>


<div class="row" id="body-row" style="padding:40px">

    <div class="col">
      <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1 , "wrapAround" : true, "autoPlay": 3000}'>
        <div class="carousel-cell">
          <img class="carousel-cell-image"
            data-flickity-lazyload="<?= base_url('img/test.jpg');  ?>" />
        </div>
        <div class="carousel-cell">
          <img class="carousel-cell-image"
            data-flickity-lazyload="<?= base_url('img/test1.jpg'); ?>" />
        </div>
        <div class="carousel-cell">
          <img class="carousel-cell-image"
            data-flickity-lazyload="<?= base_url('img/test2.jpg'); ?>" />
        </div>
      </div>
      <div class="row" style="padding-top:20px; padding-left:15px;">
    
      </div>
      <div class="card-deck">
   
        <?php $i = 0; foreach ($recommend as $item) :  ?>
        <div class="card">
          <img src="<?= base_url($item['kos_img']) ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $item['nama_kos'] ?></h5>
            <p class="card-text"><?= $item['alamat'] ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><?= $item['harga'] ?></small>
          </div>
        </div>
        <?php if (($i + 1)%4 == 0 && $i != 0){ ?>  
          </div>
          <div class="card-deck" style="padding-top: 20px;">
        <?php } ?>
 
      <?php $i++; endforeach ?>
    </div>
</div>

</div>

