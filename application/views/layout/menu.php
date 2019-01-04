<style type="text/css">
.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container" style="border-width: 0px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item <?php echo $home ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>" style="font-family: trajan pro; font-size: 25px;"><u>HOME</u></a>
            </li>
            
                <div class="dropdown">
                  <li class="nav-item <?php echo $genre ?> px-lg-4" style="margin-top: 5px;"><u style="font-family: trajan pro; font-size: 28px;">GENRE</u>
                  <div class="dropdown-content">
                  <a href="<?php echo base_url()?>Genre/action">Action</a>
                  <a href="<?php echo base_url()?>Genre/adventure">Adventure</a>
                  <a href="<?php echo base_url()?>Genre/comedy">Comedy</a>
                  <a href="<?php echo base_url()?>Genre/fantasy">Fantasy</a>
                  <a href="<?php echo base_url()?>Genre/horror">Horror</a>
                  <a href="<?php echo base_url()?>Genre/romance">Romance</a>
                  </div>
                  </li>
                </div>
            
            <li class="nav-item <?php echo $about ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>about" style="font-family: trajan pro; font-size: 25px;"><u>ABOUT</u></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>