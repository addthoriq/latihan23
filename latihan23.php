<html>
	<head>
		<title>Latihan 23</title>
	</head>
	<body>
		<form action="" method="post">
			<table>
				<thead>
					<tr>
					<th></th>
					<th></th>
					<th>Mencari Nilai Terbesar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>variabel a</td>
					<td>:</td>
					<td><input type="text" name="a"/></td>
					</tr>
					<tr>
					<td>variabel b</td>
					<td>:</td>
					<td><input type="text" name="b"/></td>
					</tr>
					<tr>
					<td>variabel c</td>
					<td>:</td>
					<td><input type="text" name="c"/></td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><button type="submit">Terbesar</button><button type="reset">Batal</button></td>
					</tr>
				</tbody>
			</table>
		</form>
		<table>
			<?php
			$a = isset($_POST['a'])?$_POST['a']:"";
			$b = isset($_POST['b'])?$_POST['b']:"";
			$c = isset($_POST['c'])?$_POST['c']:"";
			$max = max($a, $b, $c);

			function besar($masuk,$a,$b,$c){
		if (empty($masuk)){
			echo "";
		}
		elseif($masuk == $a){
			echo "Variabel a";
		}
		elseif($masuk == $b){
			echo "Variabel b";
		}
		elseif($masuk == $c){
			echo "Variabel c";
		}
			}
			echo "
			<tr>
			<td>Variabel a = ".$a."</td>
			</tr><tr>
			<td>Variabel b = ".$b."</td>
			</tr><tr>
			<td>Variabel c = ".$c."</td>
			";
			?>

		</table>
		<br>
		Variabel dengan Nilai Terbesar = <?php
		besar($max,$a,$b,$c);
		?>
	</body>
</html>
