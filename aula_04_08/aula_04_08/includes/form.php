<?php
include __DIR__.'/header.php';
?>
<form method="get">
    <label>A:</label>
    <input type= "number" required name ="a_txt"> <br>
    <label>B:</label>
    <input type= "number" required name ="b_txt"> <br>
    <label>C:</label>
    <input type= "number" required name ="c_txt"> <br>
    <input type="submit" value="Calcular">
</form>
<?php

if(isset($_GET['a_txt'],$_GET['b_txt'],$_GET['c_txt'])){

    if(!empty($_GET['a_txt']) && !empty($_GET['b_txt']) && !empty($_GET['c_txt'])){
        $a=$_GET['a_txt'];
        $b=$_GET['b_txt'];
        $c=$_GET['c_txt'];
        $delta=pow($b,2)-4*$a*$c;
        if ($delta>0){
            $r1=(-$b+sqrt($delta))/(2*$a);
            $r2=(-$b+sqrt($delta))/(2*$a);
            echo "<h2>R1: $r1 <br> R2: $r2 </h2>";
        }else if($delta == 0){
            $r1 =- $b / (2*$a);
            echo "<h2>R: $r1 </h2>";
        } else {
            echo "<h2> Não possui resultado </h2>";
        }
    }  
    

} 
include __DIR__.'/footer.php';
?>