<?php 
    for($i=2;$i>=0;$i--)
    {
        $x=1;        
        for($j=0;$j<=$i;$j++){
            echo ($x. " ");
            $x=$x+1;
        }
        echo "<br>";
    }

echo "<br>";


    $k=65;
    for($i=0; $i<4; $i++)
    {
    for($j=0;$j<$i;$j++)
     {
        echo chr($k)," ";
        $k++;
     }
        echo"</br>";

    }


?>
