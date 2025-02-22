
    <?php
      require "src/config.php";

      //Check database connection:
      $dbConnection = databaseConnect();

    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="/src/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/src/css/jumbotron.css" rel="stylesheet">

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">HBO-ICTMemes</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/upload/">Upload your meme!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tags.php">Tags</a>
          </li>
          <!-- THIS IS CODE FOR A DROPDOWN MENU
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Hey</a>
              <a class="dropdown-item" href="#">Cool mockup ey</a>
              <a class="dropdown-item" href="#">Stole it from bootstrap :)</a>
            </div>
          </li>
          -->
        </ul>
        
        <form method="POST" action="/search.php" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="/account/login.php">Log in</a>
              <a class="dropdown-item" href="/account/">AccountPage</a>
              <a class="dropdown-item" href="/upload/">Upload</a>
              <a class="dropdown-item" href="/support.php">Support</a>
              <a class="dropdown-item" href="#">Log-out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>