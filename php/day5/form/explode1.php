<html>
<?php

if(isset($_POST['sentence']))
{
	echo $_POST['sentence'];
	
	$sentence = $_POST['sentence'];
	
}

else
{
	echo "Fill the box first";
}

$words = array();
$word = " ";

$length = strlen($sentence);


for($i=0; $i<$length; $i++)
{
   if($sentence[$i] == " " || $i == $length-1 )
   {
	  if($i == $length-1)
	  {
		  $word  .= $sentence{$i};
	  }	
       
        array_push($words,$word);
		$word = " ";
		
   }
   else
   {
	 $word .= $sentence{$i};
   }
}
print_r($words);

?>
<body>
<form action="explode1.php" method="post">

 Input sentence: 
 <textarea name="sentence"></textarea>
 <button type="submit">Submit</button>

</form>


</body>
</html>