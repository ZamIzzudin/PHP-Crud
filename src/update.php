<!doctype html>
<html lang="en">
  <head>
    <?php include "./header.php" ?>
    <title>Update</title>
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
    <main class="container body-crud px-5">
        <h1 class="text-orange mb-5">Edit</h1>
         <form class="col text-light" action="" method="POST">
            <div class="row">
                <div class="form-group col">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="Title" require>
                </div>
                <div class="form-group col">
                    <label for="Year">Year Release</label>
                    <input type="text" class="form-control" name="Year" require>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="Director">Director</label>
                    <input type="text" class="form-control" name="Director" require>
                </div>
                <div class="form-group col">
                    <label for="Actor">Actor</label>
                    <input type="text" class="form-control" name="Actor" require>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="Genre">Genre</label>
                    <input type="text" class="form-control" name="Genre" require>
                </div>
                <div class="form-group col">
                    <label for="Trailer">Trailer Link</label>
                    <input type="text" class="form-control" name="Trailer" require>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="Thumb">Thumbnail Poster Link</label>
                    <input type="text" class="form-control" name="Thumb" require>
                </div>
                <div class="form-group col">
                    <label for="W-Poster">Wide Poster Link</label>
                    <input type="text" class="form-control" name="W-Poster" require>
                </div>
            </div>
            <div class="mb-3">
                <label for="Synopsis" class="form-label">Synopsis</label>
                <textarea class="form-control" id="Synopsis" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-orange">Edit</button>
        </form>             
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>