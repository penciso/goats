<nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
  <a class="navbar-brand text-center" href="#">&emsp;G.O.A.T.S</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li-->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>dashboard" title="Dashboard"><span class="fa fa-user-circle"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="fa fa-cog text-dark"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url() ?>profile/settings"><span class="fa fa-user"></span>&emsp;Edit Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url() ?>logout"><span class="fa fa-sign-out"></span>&emsp;Logout</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>