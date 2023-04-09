
<h3><a href="<?php echo Route::get_base_url();?>">На головну  </a></h3>

<?php 
$id = substr(Route::get_url(), -2);
if ($id[0] =='/') {
    $id = $id[1];
}

$result = Database::query("SELECT * FROM `skills` WHERE `id` = {$id}");



while ($row = mysqli_fetch_assoc($result)) {
    echo "<h1>".$row['name']."</h1><h3>".$row['short description']."</h3><p>".$row['description']."</p>";
}



?>
