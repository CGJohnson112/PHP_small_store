<?php
include('sections/header.php');
?>

<h1>The PHP STORE!!!</h1>
<div class="card-group">


<?php
$json = file_get_contents('items.json');
$data = json_decode($json);

foreach($data as $item){
  echo '<div class="card">';
    echo '<img class="card-img-top" src="public/images/' . $item->image . '" alt="Card image cap">';
    echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $item->item . '</h5>';
      echo '<p class="card-text">' . $item->descrip . '</p>';
  
      echo '<a href="item.php?id=' . $item->id . '" type="submit" name="submit" class="btn btn-whatever">Choose item</a>';
    
    echo '</div>';
  echo '</div>';

}
?>
</div>

<?php
include('sections/footer.php');
?>