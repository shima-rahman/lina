function explode_fun($string)
{

	$string_len=strlen($string);
	$word="";
	$words=array();
	for($i=0;$i<$tring_len;$i++)
	{
		if($string[$i]=" ")
		{
			array_push($words,$word);
		}
		else
		{
			$word=$word.$string[$i];
		}
	}

	return $words;
}