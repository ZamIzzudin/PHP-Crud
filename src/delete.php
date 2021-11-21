<?php
    require "../config/config_db.php";

    $id = $_GET['id'];

    $query = "DELETE FROM film_genre WHERE id_film=$id";
    $delete_genre = mysqli_query($conn, $query);

    if(isset($delete_genre) && $delete_genre === true){
        $query = "DELETE FROM poster WHERE id_film=$id";
        $delete_poster = mysqli_query( $conn, $query );
        
        if (isset($delete_poster) && $delete_poster === true) {
            $query = "DELETE FROM film WHERE id=$id";
            $delete_film = $conn->query($query);
        }
    }
   header("Location:../index.php?delete=".$delete_film);
?>