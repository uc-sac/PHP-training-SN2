<?php  
function valueCall($x)  
{  
$x .= 'Call By Value';  
}  
$y = 'Hello PHP';  
valueCall($y);  
echo $y;  
?> 