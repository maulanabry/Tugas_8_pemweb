<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/bootstrap.ico">
    <!-- Titles-->
    <title>Registrasi Murid</title>
</head>

<body class="bg-secondary">
<nav class="navbar navbar-primary">
  <form class="form-inline">
    <label for="title" class="text-light font-weight-bold">Tugas 8</label>
  </form>
</nav>
    <!-- Forms -->
    <form class="form-login d-flex text-center"action="ceklogin.php"method="post">

        <!-- Heading -->
        <h1 class="h3 mb-4">Halo, Selamat Datang</h3>
        
        <!-- Labels & input Email -->
        <label for="inputEmail" class="sr-only">Username</label>
        <input 
        type="username"
        id="inputEmail"
        placeholder="username"
        class="form-control mb-2"
        name="username"
        required
        autofocus>

        <!-- Labels & Input Password-->
        <label for="inputPassword" class="sr-only">Password</label>
        <input 
        type="Password"
        id="inputPassword"
        placeholder="Password"
        class="form-control mb-2"
        name="password"
        required
        autofocus>

        <!-- Checkbox -->
        <div class="checkbox text-left">
            <label> <input type="checkbox" value="remember-me"/> Remember me</label>
        </div>

        <!-- Login Button -->
        <button class="btn btn-primary btn-block">Login</button>
    </form>

    <!-- Form ending-->

    <!-- Footer -->
    <footer class="main-footer text-center">
        <p>Tugas 8 &copy;21082010038 </p>
    </footer>
</body>
</html>