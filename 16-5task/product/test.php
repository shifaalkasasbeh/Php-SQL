<form action="" method="get"><input type="submit" value="Load Data" name="load"><br>

    <!-- <select name="select" id="" >
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <input type="submit" value=" Filter" name="filter">
     -->

</form>


<?php 
require 'confg.php';

// if(isset($_GET['filter'])){
//     filterById($_GET["select"]);
// }


if(isset($_GET['load'])){
    loaddata();
}



function loaddata(){
global $db;
$sql = 'SELECT * FROM puplishers ';

$statement = $db->query($sql);

$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
	// show the publishers
	foreach ($publishers as $value) {
		echo $value['name'].'<br>';
	}
}
}

?>
<?php 
 $sql = 'SELECT * FROM corses';
 $statement = $db->query($sql);
 $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);?>
<select name="" id="">
<?php  foreach ($publishers as $value) : ?>
    
      
        <option value=""><?php echo $value['name']; ?></option>
    
    <?php endforeach; ?>
</select>