<!doctype html>
<html lang="en">
  <head>
    <?php 
        include "./src/header.php";
        require "./config/config_db.php";

        $query = "SELECT * FROM film";
        $get = mysqli_query($conn, $query);
        $i = 0;
    ?>
    <title>NETFLOX</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand mr-5" href="#">NETFLOX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active mr-3">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="#">Schedule</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="#">News</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-orange my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        </div>
    </nav>    
    <header>
        <div class="jumbotron jumbotron-fluid position-relative mx-auto">
            <img src="./src/pict/eternal_big.jpg" class="img-fluid" alt="...">
            <div class="container eternal-logo">
              <img src="./src/pict/eternal_logo.png" class="img-fluid" alt="...">  
            </div>
        </div>
    </header>
    <main class="container mt-5 pt-5">
        <h3 class="text-center text-orange">Watch Now</h3>
        <a href="./src/create.php" class="btn btn-orange d-block mx-auto mt-5 col-md-3 col-lg-2 col-sm-4 col-5">Add New Movie +</a>
        <?php foreach ($get as $key => $film) { ?>
            <?php if($i === 0) {?>
                <div class="row mt-5">
                    <div class="card bg-dark text-light mx-auto" style="width: 18rem;">
                        <img src=<?= $film['thumbnail']?> class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title overflow-hidden"><?= $film['title']?></h5>
                        <p class="card-text"><?= $film['year']?></p>
                            <a href="./src/movie-details.php" class="btn btn-orange">See Details</a>
                        </div>
                    </div>
            <?php $i++; } elseif($i % 3 != 0) {?>
                    <div class="card bg-dark text-light mx-auto" style="width: 18rem;">
                        <img src=<?= $film['thumbnail']?> class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title overflow-hidden"><?= $film['title']?></h5>
                        <p class="card-text"><?= $film['year']?></p>
                            <a href="./src/movie-details.php" class="btn btn-orange">See Details</a>
                        </div>
                    </div>
            <?php $i++; } elseif($i % 3 === 0) {?>
                </div>
                <div class="row mt-5">
                    <div class="card bg-dark text-light mx-auto" style="width: 18rem;">
                        <img src=<?= $film['thumbnail']?> class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title overflow-hidden"><?= $film['title']?></h5>
                        <p class="card-text"><?= $film['year']?></p>
                            <a href="./src/movie-details.php" class="btn btn-orange">See Details</a>
                        </div>
                    </div>
            <?php $i++; } ?>
        <?php } ?>
                </div>
    </main>
    <footer>
        <span class="text text-orange footer-text d-block mx-auto">Programing Class 2021</span>
    </footer>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>