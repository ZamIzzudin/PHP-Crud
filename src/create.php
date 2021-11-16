<!doctype html>
<html lang="en">
  <head>
    <?php 
        include "./header.php";
        require "../config/config_db.php";
    
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $year = $_POST['year'];
            $director = $_POST['director'];
            $actor = $_POST['actor'];
            $genre = $_POST['genre'];
            $trailer = $_POST['trailer'];
            $thumb = $_POST['thumb'];
            $w_poster = $_POST['w_poster'];
            $synopsis = $_POST['synopsis'];

            $query = "INSERT INTO film(title,year,director,actor,genre,trailer_link,thumbnail,w_poster,synopsis) VALUES('$title','$year','$director','$actor','$genre','$trailer','$thumb','$w_poster','$synopsis')";
        
            $send = mysqli_query($conn,$query);

            $conn->close();
        }
    ?>
    <title>Create</title>
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
        <h1 class="text-orange mb-5">Add New Title</h1>
         <form class="col text-light" action="" method="POST">
             <?php if(isset($send) && $send === true) : ?>
                <div class="alert alert-success" role="alert">
                successfully created user
                </div>
            <?php endif ?>
            <div class="row">
                <div class="form-group col">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" require>
                </div>
                <div class="form-group col">
                    <label for="year">Year Release</label>
                    <input type="text" class="form-control" name="year" require>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" name="director" require>
                </div>
                <div class="form-group col">
                    <label for="actor">Actor</label>
                    <input type="text" class="form-control" name="actor" require>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre" require>
                </div>
                <div class="form-group col">
                    <label for="trailer">Trailer Link</label>
                    <input type="text" class="form-control" name="trailer" require>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="Thumb">Thumbnail Poster Link</label>
                    <input type="text" class="form-control" name="thumb" require>
                </div>
                <div class="form-group col">
                    <label for="w_poster">Wide Poster Link</label>
                    <input type="text" class="form-control" name="w_poster" require>
                </div>
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea class="form-control" name="synopsis" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-orange">Create</button>
        </form>             
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>