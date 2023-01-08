<?php if(!isset($_COOKIE["comply_cookie"])) { ?>
    <div class="alert alert-danger alert-dismissible fade show fixed-bottom col-md-4 offset-md-6 col-md-5 shadow wow bounceInUp" data-wow-duration="2s" data-wow-delay="5s" role="alert">
      <i class="fa-regular fa-cookie"></i>
      <br>
      <?= _usecookies ?>
    <br>
        <button type="button" class="btn btn-sm btn-danger cookie-accept" data-bs-dismiss="alert" aria-label="Close"><?= _Iagree ?></button>
      <a class="btn btn-sm btn-danger" href="#" role="button"><?= _Moreinfo ?></a>

    </div>
<?php } ?>
