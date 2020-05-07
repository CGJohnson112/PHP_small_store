<?php

include('sections/header.php');
    $id = $_GET['id'];
    $json = file_get_contents('items.json');
    $data = json_decode($json);
    array_unshift($data, null);
    //Makes data array count start at one instead of zero
    //so that id # in .json file can start at one
    unset($data[0]);
    $item = $data[$id];
   
    

      echo'<div class="card" style="width: 18rem;">';
        echo'<img class="card-img-top" src="public/images/' . $item->image . '"alt="Card image cap">';
        echo'<div class="card-body">';
        echo'<h5 class="card-title">' . $item->item . '</h5>';
        echo'<p class="card-text">' . $item->long_descript . '</p>';
        echo'<a href="#" class="btn btn-whatever">Buy on Venmo</a>';
      echo'</div>';
    echo'</div>';
?>

<?php
include('sections/footer.php');
?>
