<nav class="navbar navbar-expand-sm navbar-light bg-light">
<a href="#" class="navbar-left mr-5"><img style="max-width:150px; margin-top: -7px;" src="/assets/images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active ml-5">
        <a class="nav-link font-weight-bold active" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link font-weight-bold" href="#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Join the Movement!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contact Us</a>
          <a class="dropdown-item" href="#">About Us</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Messages</a>
        </div>
      </li>
     </ul>
     <ul class="navbar-nav ml-auto ms-auto">
     <?php if (session_status() == PHP_SESSION_NONE) : ?>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="?controller=Login&action=renderloginview">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="?controller=Register&action=renderregisterview">Register</a>
      </li>
      <?php endif; ?>
      <?php if (!isset($_SESSION)) : ?>
      <?php elseif($_SESSION['loggedIn']==true) : ?>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="?controller=Logout&action=logout">Logout</a>
      </li> 
     <?php endif; ?>
    </ul>
  </div>
</nav>