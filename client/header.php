<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="./public/discuss.png" alt="Logo"  style="width: 100px; height: 100px;">
    </a>
    
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php if(isset($_SESSION['user']) && isset($_SESSION['user']['username'])){?>
<li class="nav-item">
    <a class="nav-link" href="?login=true">Logout</a>
</li>
<?php } ?>

<?php if(!isset($_SESSION['user']) || !isset($_SESSION['user']['username'])){?>
<li class="nav-item">
    <a class="nav-link" href="?login=true">Login</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?signup=true">SignUp</a>
</li>
<?php } ?>
        

        
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Latest Questions</a>
         
        </li>
      </ul>
    </div>
  </div>
</nav>