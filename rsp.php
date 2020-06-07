<?php
	
	/*ROCK=0 PAPER=1 SCISSOR=2
	*/
	/*T = ROCK=1 PAPER=2 SCISSOR=3
	*/
	$p1= null;
	$p2= null;
	$p3= null;
	$p4= null;


	$x='';
	$y='';

	$win_p12 = 0;
	$win_p13 = 0;
	$win_p14 = 0;

	$win_p21 = 0;
	$win_p23 = 0;
	$win_p24 = 0;

	$win_p31 = 0;
	$win_p32 = 0;
	$win_p34 = 0;

	$win_p41 = 0;
	$win_p42 = 0;
	$win_p43 = 0;

	function check_winner($x , $y)
		{
			if($x == $y)
			{
				return 0;
			}
			elseif(($x!=1 || $y!=3)&&($x!=3 || $y!=1))
			{	
				return max($x,$y);
			}
			else
				return 1;
		}

	for($i=1 ; $i < 51 ; $i++)
	{
		echo "<b>".$i." ITERATION<b>";	

	$rsp1= array(1, 2, 3);

	$range= rand(0,2);
	$p1=$rsp1[$range];
	
	$range= rand(0,2);
	$p2=$rsp1[$range];

	$range= rand(0,2);
	$p3=$rsp1[$range];

	$range= rand(0,2);
	$p4=$rsp1[$range];

	echo "<table border=1>
			<tr>		
				<th>Player 1</th>
				<th>Player 2</th>
				<th>Player 3</th>
				<th>Player 4</th>
			</tr>
			<tr>";

			switch($p1){
				case 1: echo "<td>Rock</td>";
						break;

				case 2: echo "<td>Paper</td>";
						break;

				case 3: echo "<td>Scissor</td>";
						break;
			}
			switch($p2){
				case 1: echo "<td>Rock</td>";
						break;

				case 2: echo "<td>Paper</td>";
						break;

				case 3: echo "<td>Scissor</td>";
						break;
			}
			switch($p3){
				case 1: echo "<td>Rock</td>";
						break;

				case 2: echo "<td>Paper</td>";
						break;

				case 3: echo "<td>Scissor</td>";
						break;
			}
			switch($p4){
				case 1: echo "<td>Rock</td>";
						break;

				case 2: echo "<td>Paper</td>";
						break;

				case 3: echo "<td>Scissor</td>";
						break;
			}

		/*	$win_p1 += $win_p1;
			$win_p2 += $win_p2;
			$win_p3 += $win_p3;
			$win_p4 += $win_p4;
*/
	echo "</tr>
		<table> <br>";
	echo "<table border=1>
		<tr>
			<th>Total</td>
			<th> </th>
			<th colspan=4>Against</th>
		</tr>
		<tr>
			<th>   </th>
			<th>   </th>
			<th>Player 1</th>
			<th>Player 2</th>
			<th>Player 3</th>
			<th>Player 4</th>
		</tr>
		<tr>
			<th rowspan =4 >Player Wins</th>
			<th>Player 1 </th>
			<td>-</td>
			<td> " ; 
			$win = check_winner($p1,$p2);
			if($win == $p1)
			{
				$win_p12 += 1;
				echo $win_p12;
			}
			else
			{
				echo $win_p12;
			}
			//$win_p1 = 0;
			echo "</td>
			<td>";
			$win = check_winner($p1,$p3);
			if($win == $p1)
			{
				$win_p13 += 1;
				//$win_p1 += 1;
				echo $win_p13;
			}
			else
			{
				echo $win_p13;
			} 
			//$win_p1 = 0;
			echo "</td>
			 <td>";
			$win = check_winner($p1,$p4);
			if($win == $p1)
			{
				$win_p14 += 1;
				echo $win_p14;
			}
			else
			{
				echo $win_p14;
			} 
			//$win_p1 = 0;
			echo "</td>
		</tr>
		<tr>
			<th>Player 2 </th>
			<td>";
			$win = check_winner($p2,$p1);
			if($win == $p2)
			{
				$win_p21 += 1;
				echo $win_p21;
			}
			else
			{
				echo $win_p21;
			} 
			//$win_p2 = 0;
			echo "</td>
			<td>-</td>
			<td>";
			$win = check_winner($p2,$p3);
			if($win == $p2)
			{
				$win_p23 += 1;
				echo $win_p23;
			}
			else
			{
				echo $win_p23;
			}
			//$win_p2 = 0; 
			echo "</td>
			<td>";
			$win = check_winner($p2,$p4);
			if($win == $p2)
			{
				$win_p24 += 1;
				echo $win_p24;
			}
			else
			{
				echo $win_p24;
			} 
			//$win_p2 = 0;
			echo "</td>
		</tr>
		<tr>
			<th>Player 3</th>
			<td>";
			$win = check_winner($p3,$p1);
			if($win == $p3)
			{
				$win_p31 += 1;
				echo $win_p31;
			}
			else
			{
				echo $win_p31;
			}
			//$win_p3 = 0; 
			echo "</td>
			<td>";
			$win = check_winner($p3,$p2);
			if($win == $p3)
			{
				$win_p32 += 1;
				echo $win_p32;
			}
			else
			{
				echo $win_p32;
			}
			//$win_p3 = 0; 
			echo "</td>
			<td>-</td>
			<td>";
			$win = check_winner($p3,$p4);
			if($win == $p3)
			{
				$win_p34 += 1;
				echo $win_p34;
			}
			else
			{
				echo $win_p34;
			}
			//$win_p3 = 0; 
			echo "</td>
		</tr>
		<tr>
			<th>Player 4</th>
			<td>";
			$win = check_winner($p4,$p1);
			if($win == $p4)
			{
				$win_p41 += 1;
				echo $win_p41;
			}
			else
			{
				echo $win_p41;
			}
			//$win_p4 = 0; 
			echo "</td>
			<td>";
			$win = check_winner($p4,$p2);
			if($win == $p4)
			{
				$win_p42 += 1;
				echo $win_p42;
			}
			else
			{
				echo $win_p42;
			} 
			//$win_p4 = 0;
			echo "</td>
			<td>";
			$win = check_winner($p4,$p3);
			if($win == $p4)
			{
				$win_p43 += 1;
				echo $win_p43;
			}
			else
			{
				echo $win_p43;
			}
			//$win_p4 = 0; 
			echo "</td>
			<td>-</td>
		</tr>
	</table><br><br>";

}
?>
<html>
	<head>
		<title>ROCK PAPER SCISSOR</title>
		<style>
			table {
				border-collapse: collapse;
				border-style: solid;
				align-content: center;
    			margin: .3em;
    			width: 700px;
 		 	}
 		 	th {
 				padding: 3px;
			}

			td {
 				text-align: center;
 			}
 			b{
 				font-size: 20px;
 			}
		</style>
	</head>
	<body>
			<form action="<?php PHP_SELF_POST ?>" method="GET">
				
			</form>

	</body>
</html>