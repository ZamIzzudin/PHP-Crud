<!doctype html>
<html lang="en">
  <head>
    <?php include "./header.php"?>
    <title>Movie Details</title>
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
            <li class="nav-item mr-3">
                <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
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
        <div class="jumbotron jumbotron-fluid position-relative mx-auto pb-0">
            <img src="./pict/venom_big.jpg" class="img-fluid big-poster" alt="...">
        </div>
    </header>
    <main class="container px-5">
        <div class="row position-relative main-title">
            <img src="./pict/venom_poster.jpg" style="width: 18rem;" class="img-thumbnail" alt="...">
            <div class="col ml-4 pt-3">
                <h1 class="text text-orange mt-3">Venom : Let There be Carnage</h1>
                <h3 class="text text-orange mb-5">2021</h3>
                <p class="text-light">Director : Andy Serkis</p>
                <p class="text-light">Genre : Action, Adventure, Sci-F</p>
                <p class="text-light">Actor : Tom Hardy, Woody Harrelson, Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham</p>
                <div class="row">
                    <a class="btn btn-orange mt-2 pb-2"><i class="bi bi-play-fill"></i> Watch Now</a>
                    <a class="btn btn-orange mt-2 pb-2 mx-3"><i class="bi bi-play-fill"></i> Watch Now</a>
                    <a class="btn btn-orange mt-2 pb-2"><i class="bi bi-play-fill"></i> Watch Now</a>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <h3 class="text text-orange mt-5">Synopsis</h3>
            <p class="text-light text-justify">Tom Hardy returns to the big screen as the lethal protector Venom, one of MARVEL’s greatest and most complex characters. Directed by Andy Serkis, written by Kelly Marcel with the story by Tom Hardy & Marcel, the film also stars Michelle Williams, Naomie Harris and Woody Harrelson, in the role of the villain Cletus Kasady/Carnage.</p>
            <p class="text-light text-justify">Eddie Brock attempts to reignite his career by interviewing serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.</p>
        </div>
        <div class="row">
            <iframe width="560" class="mx-auto my-5" height="315" src="https://www.youtube.com/embed/-FmWuCgJmxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </main>
    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>