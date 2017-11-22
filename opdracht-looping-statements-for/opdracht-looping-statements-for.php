<?php

    $rijen = 11;
    $kolommen = 11;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht for loop</title>
    <style>
        .oneven{background-color: green}
    </style>
</head>
<body>
    <h1>Opdracht for loop deel 1</h1>
    
    <table>
    <?php for ( $rij = 0; $rij < $rijen; ++$rij): ?>
            <tr>
			    
						<td>rij</td>
			</tr>
					<?php endfor ?>
		</table>
    
    <table>
			<?php for ( $rij = 0; $rij < $rijen; ++$rij): ?>
				<tr>
					<?php for ( $kolom = 0; $kolom < $kolommen; ++$kolom): ?>
						<td>kolom</td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>
		
		<h1>Opdracht for loop deel 2</h1>
		
		<table>
			<?php for ( $rij = 0; $rij < $rijen; ++$rij): ?>
				<tr>
					<?php for ( $kolom = 0; $kolom < $kolommen; ++$kolom): ?>
						<td class="<?php echo (($rij*$kolom)%2 > 0)?'oneven':''?>">
						    <?= $rij * $kolom?>
                        </td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>
</body>
</html>