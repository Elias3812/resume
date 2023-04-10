
<h3><a href="<?php echo Route::get_base_url();?>">&nbsp&nbsp&nbspНа головну  </a></h3>

<?php 
$id = substr(Route::get_url(), -2);
if ($id[0] =='/') {
    $id = $id[1];
}

$result = Database::query("SELECT * FROM `skills` WHERE `id` = {$id}");


?>

<div id="skill">

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h1>".$row['name']."</h1><br><h3>".$row['short description']."</h3><br><p>".$row['description']."</p>";
}
if ($id=='2'){
    ?>
    <form method="POST">
        Ім'я:<br>
        <input type="text" name="firstname" required><br>Прізвище:<br>
        <input type="text" name="lastname" required><br>
        Значення змінної А:<br>
        <input type="number" name="valueA" required><br>Значення змінної B:<br>
        <input type="number" name="valueB" required><br>
        <input type="submit" value="Надіслати">
  
    </form>
  <?php
    if (isset($_POST["firstname"])){
    echo "Ім'я:<br>";
    echo $_POST["firstname"];
    echo "<br>";
    echo "Прізвище:<br>"; 
    echo $_POST["lastname"];
    echo "<br>";
    }
    ?>
    
  <?php
  if (isset($_POST["valueA"])){
    
    echo "a+b=".$_POST["valueA"]+$_POST["valueB"]."<br>";
    echo "a-b=".$_POST["valueA"]-$_POST["valueB"]."<br>";
    echo "a*b=".$_POST["valueA"]*$_POST["valueB"]."<br>";
    if ($_POST["valueB"]!=0){
        echo "a/b=".round($_POST["valueA"]/$_POST["valueB"],2)."<br>";
    }
   
  }
    
}



?>
</div>