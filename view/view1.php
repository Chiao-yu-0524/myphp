<?php //搭配broad44_view.php
$data = $_GET['data'];
foreach($data as $key => $value){
    $$key = $value ; //變數中的變數($title$key  >> $$key)

}


?>

<h1> <?php echo $title; ?> </h1>
<hr/>
Hello, <?php echo $who; ?>
<hr/>
copyleft Brad.