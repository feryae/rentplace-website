<link rel="icon" href="<?=base_url('img/icon.png')?>" type="image/gif">

<style type="text/css">
  body{
    background-color: #ebb734;  }

    a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}
</style>


<link rel="stylesheet" href="<?= base_url('essentials/css/view_css/header.css')?>">

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="height:60px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand ml-5" href="<?= base_url() ?>" style="text-decoration: none;">
    <img src="<?= base_url('img/logo.png')?>" class="img_fluid" id="navBannerImage" >
  </a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item leftNav active ml-5">
      <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
    </li>
    <li class="nav-item leftNav">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter3">Kontak</a>
    </li>
    <li class="nav-item leftNav">
      <a class="nav-link" href="#">Tentang</a>
    </li>
    <li class="pl-3 ">
      <form class="form-inline my-2 my-lg-0 " style="background:white;" action="<?= base_url('index.php/controller/search'); ?>" method="post">
        <input type="search" name="keyword" id="navInput" placeholder="Ketik kost atau nama lokasi... "  style="border-style:hidden;">
          <img src="<?= base_url('img/search.svg') ?>" width="25"   alt="">
          <button hidden id="navSearch" type="submit" ></button>
      </form>
    </li>
  </ul>
  <?php if($this->session->userdata('status') != "login"){ ?>
    <ul class="navbar-nav mr-5">
      <li>
        <a  href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a> | <a href="#"  data-toggle="modal" data-target="#exampleModalCenter2">Register</a>
      </li>
    </ul>
  <?php }else{ ?>
      <ul class="navbar-nav mr-5">
      <li>
        <?= $this->session->userdata('name');?> | <a href="<?=base_url('index.php/controller/logout')?>">Logout</a> 
      </li>
    </ul>
  <?php } ?>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" align="center">
  <div class="modal-dialog modal-dialog-centered" role="document">
    
    <div class="modal-content">
    <form action="<?= base_url('index.php/controller/login'); ?>" method="post">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalCenterTitle" style="padding-left:200px">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <p align="center">Masuk ke e-Kost</p>
       
          <div style="padding-bottom:15px;">
            <input type="text" class="form-control" name="username" value="" placeholder="Username">
          </div>
          <div>
            <input type="password" class="form-control" name="password" value="" placeholder="Password">
          </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </form>
    </div>

  </div>
</div>


<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    
    <div class="modal-content">
      <form action="<?= base_url('index.php/controller/register'); ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle2" style="padding-left:200px">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p align="center">Daftar sebagai Member e-Kost.</p>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="usernamereg" value="" placeholder="Username">
        </div>
        <div style="padding-bottom:15px;">
          <input type="password" class="form-control" name="passwordreg" value="" placeholder="Password">
        </div>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="email" value="" placeholder="Email">
        </div>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="name" value="" placeholder="Name">
        </div>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="phone" value="" placeholder="Phone">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
          </form>
    </div>

  </div>
</div>

<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle3" style="padding-left:200px">Kontak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p align="center">Form Kontak</p>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="" value="" placeholder="Nama Lengkap">
        </div>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="" value="" placeholder="Email">
        </div>
        <div style="padding-bottom:15px;">
          <input type="text" class="form-control" name="" value="" placeholder="Judul">
        </div>
        <div style="padding-bottom:15px;">
          <textarea rows="5" cols="25" class="form-control" name="address" placeholder="Isi" required=""></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Kirim Pesan</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
var input = document.getElementById("navInput");

input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("navSearch").click();
  }
});

</script>