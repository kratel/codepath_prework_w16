<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="tipcalc.css">
</head>
<body>
<table>
	<tr>
		<th>Tip Calculator</th>
	</tr>
	<tr>
		<td>
	<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
			<!-- grab subtotal if it was previously entered and set it to default -->
			<table class="formt">
			<tr>
				<td class="sub_in">
			Bill Subtotal: $<input type="text" name="subtotal" <?php if(!empty($_POST["subtotal"])) {echo "value='".$_POST["subtotal"] ."'";} ?>><br>
			</td>
			</tr>
			<tr>
			<td class="rad">
			<?php
			$c = 0;
			//check for previously submitted values
			if(!empty($_POST["tiprad"])) {
				if($_POST["tiprad"]==15){
					$c = 1;
				}
				if($_POST["tiprad"]==20){
					$c = 2;
				}
				if($_POST["tiprad"]=="other"){
					$c = 3;
				}
			}
			for($i =0; $i<=3; $i++) {
			?>
				<?php if($i==3): ?>
					<br><input type="radio" name="tiprad" value="other" <?php if($i==$c){echo "checked";} ?>>Custom :<input class="cust" type="text" name="cust_tip" <?php if(!empty($_POST["cust_tip"])) {echo "value='".$_POST["cust_tip"] ."'";} ?>>%
				<?php else: ?>
				<input type="radio" name="tiprad" value="<?php echo $i*5+10; ?>" <?php if($i==$c){echo "checked";} ?>> <?php echo $i*5+10; ?>%
			<?php endif ?>
			<?php 
			}
			?>
			</td>
			</tr>
			<tr>
				<td>
					Split: <input type="text" name="split" <?php if(!empty($_POST["split"])) : echo "value='".$_POST["split"] ."'"; else: echo"value='1'"; endif; ?>>person(s)
				</td>
			</tr>
			<tr>
			<td class="submittd">
			<input type="submit" value="Submit">
			</td>
			</tr>
		</table>
		
	</form>
</td>
	</tr>
	<tr><td>
		<!-- will only appear after form is submitted -->
		<?php if (!empty($_POST)): ?>
		<!-- validate form inputs -->
		<?php if (empty($_POST["subtotal"]) || !is_numeric($_POST["subtotal"]) || ($_POST["subtotal"] <= 0)):
			echo "Please include a numeric Subtotal greater than 0. <br>";
		?>
		<?php else:
		$billsub = $_POST["subtotal"];
		$billsub = round($billsub,2); 
		endif; ?>
		<?php 
		if ($_POST["tiprad"]=="other"):
			if (empty($_POST["cust_tip"]) || !is_numeric($_POST["cust_tip"]) || ($_POST["cust_tip"] <= 0)):
				echo "Please select a tip % OR include a numeric Custom Tip greater than 0. <br>";
			else:
				$tiprad = $_POST["cust_tip"];
			endif;
		else:
			$tiprad = $_POST["tiprad"];
		endif; 
		if (empty($_POST["split"])|| !is_numeric($_POST["split"]) || ($_POST["split"] < 1) || ($_POST["split"] != round($_POST["split"]))):
			echo "Please include a postive integer for the number of people. <br>";
		else:
			$split = $_POST["split"];
		endif;
		?>
		<!-- form processing -->
		<table class="results">
			<tr>
				<td>
		<?php
		if (!empty($billsub) && !empty($tiprad) && !empty($split)){
			$tip = $billsub*($tiprad/100);
			$tip = round($tip,2);
			$total = $tip + $billsub;
			$total = round($total,2);
			echo "Tip: $" .$tip;
			echo"</td> </tr>";
			echo"<tr> <td>";
			echo "Total: $" .$total;
			if ($split > 1){
				$sptip = round(($tip/$split),2);
				$sptotal = round(($total/$split),2);
				echo"</td> </tr>";
				echo"<tr> <td>";
				echo"Tip each: $" .$sptip;
				echo"</td> </tr>";
				echo"<tr> <td>";
				echo"Total each: $" .$sptotal;

			}


		}

		?>
		</td>
		</tr>



		<?php endif; ?>
		</table>
	</td>
	</tr>
</table>
</body>


</html>