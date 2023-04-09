<!DOCTYPE html>
<html>
<body>
<?php
$n = 30;             // 1번
$sum = 0;
$prod = 1;
for($i = 1; $i <= $n; $i++)  //n까지의 수 프린트
{ 
    echo $i."\n";
}
function sum($num) {          //합
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    return $sum;
}
echo sum(30);
function factorial($x) {         //곱
	$result = 1;
	for($i=2; $i<=$x; $i++) $result *= $i;
	return $result;
}
echo factorial(30);

function random($num)  //2번
{
    for($i=0;$i<$num;$i++)
    {
        for($j=0;$j<30;$j++)
        {
            $random[$i][$j]=mt_rand(10,100);
        }
        sort($random[$i]);
    }
    return $random;
}

$random=random(1);

for($i=0;$i<sizeof($random);$i++)
    {
        for($j=0;$j<30;$j++)
        {
            echo $random[$i][$j]." ";
        }
        
        echo "<br>";
    }


function fibonacci($n, $first = 0, $second = 1) {     //3번
        $fib = [$first, $second]; 
        for($i=1; $i<$n; $i++) { 
          $fib[] = $fib[$i] + $fib[$i-1]; 
          echo $i ."&nbsp;". $fib[$i] ."&nbsp;". $fib[$i+1]/$fib[$i] ."<br/>"; 
       } 
      } 
      fibonacci(10); 

<form name ="triangle" method="post" action = "figure.php">    //4번
[삼각형 면적] 
가로:<input type="text" name="triangleW" >
세로:<input type="text" name="triangleH" > 
<input type="submit" value="면적은?"> 
=> 
<input type="text" name="" > 
</form> 
<form name="quadrangle" method="post" action="figure.php"> 
[사각형 면적] 
가로:<input type="text" name="quadrangleW" > 
세로:<input type="text" name="quadrangleH" > 
<input type="submit" value="면적은?"> 
=> 
<input type="text" name="" > 
</form> 
<form name="circle" method="post" action="figure.php"> 
[원 면적] 
반지름:<input type="text" name="circleR" > 
<input type="submit" value="면적은?"> 
=> 
<input type="text" name="" > 
</form> 
<form name="parallelepiped" method="post" action="figure.php"> 
[직육면체 체적] 
가로:<input type="text" name="parallelepipedW" > 
세로:<input type="text" name="parallelepipedL" > 
높이:<input type="text" name="parallelepipedH" > 
<input type="submit" value="체적은?"> 
=> 
<input type="text" name="" > 
</form> 
<form name="cylinder" method="post" action="figure.php"> 
[원통 체적] 
반지름:<input type="text" name="cylinderR" > 
높이:<input type="text" name="cylinderH" > 
<input type="submit" value="체적은?"> 
=> 
<input type="text" name="" > 
</form> 
<form name="sphere" method="post" action="figure.php"> 
[구 체적] 
반지름:<input type="text" name="sphereR" > 
<input type="submit" value="체적은?"> 
=> 
<input type="text" name="" > 
</form>




?>
</body>
</html>