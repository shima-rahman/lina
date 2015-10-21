<html>
	<table border="1">
		<tr>
			<th>Alphabet</th>
			<th>Frequency</th>
			
		
		</tr>
		
		<?php
			$aa = Array("a"=>2,"b"=>4,"c"=>4);
			
			foreach($aa as $alphabet=>$freq)
			{
				
				
				if($freq>5)
				
				{
				
					echo" <tr><td>$alphabet</td><td style=\"background-color:green"></td></tr>";
				
				
				}
				else
				{
				echo "<tr><td>$alphabet</td><td>$freq</td></tr>";
				}
			
			}


        ?>
	</table>
</html>