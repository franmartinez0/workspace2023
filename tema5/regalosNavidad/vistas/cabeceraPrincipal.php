<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid w-40">
    <a class="navbar-brand" href="index.php">Regalos de navidad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            cuenta de cliente
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            
            
            <?php
                if (isset($_SESSION['id'])) {
                    echo '<li><a class="dropdown-item" href="index.php?accion=cerrarSesion">Logout</a></li>';
                } else {
                    echo '<li><a class="dropdown-item" href="index.php">Log in</a></li>';
                    echo "</div>";
                }
                ?>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  

