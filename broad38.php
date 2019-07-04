<?php   //54

include_once 'call_.php';
session_start();
$var1 = new Student(9,78,50);
$sum = $var1->sum();
$avg = $var1->avg();
echo "Sum {$sum} . Avg  {$avg} ";
$_SESSION['$var1'] = $var1;

?>

<a href = 'broad39.php?var1=<?php echo $var1;?>'>Next page</a>
