
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<body class="text-center">
    <form class="form-signin col-5 mt-5 " action="controladorLogin.php" method="POST">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Log in </h1>
      <label for="inputEmail" class="sr-only">Email:</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="password" required="">
      
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit" name="formLogin">Entar</button>
      
    </form>
  

</body>