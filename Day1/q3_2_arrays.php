<?php
$mat1=array(
 array(47,56),
 array(11,27)
);
$mat2=array(
 array(79,38),
 array(29,4)
);
echo"Matrix 1<br>";
foreach($mat1 as $m1){
 foreach($m1 as $m){
 echo $m." ";
 }
 echo "<br>";
}
echo"<br><br>Matrix 2<br>";
foreach($mat2 as $m1){
 foreach($m1 as $m){
 echo $m." ";
 }
 echo "<br>";
}
echo"<br><br>Matrix Addition<br>";
for($i=0;$i<2;$i++){
 for($j=0;$j<2;$j++){
 echo $mat1[$i][$j]+$mat2[$i][$j]." ";
 }
 echo "<br>";
}
?>
