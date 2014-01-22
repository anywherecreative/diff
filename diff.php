<?php
function diff ($old, $new) {
	$old_array = explode(" ", $old);
	$new_array = explode(" ", $new);
	$outRemoved = "";
	$outAdded = "";
	$outFinal = "";
	$close = false;
	if(count($old_array) < count($new_array))
		$times = count($new_array);
	else
		$times = count($old_array);
	for($a = 0;$a < $times;$a++) {
		if($a > count($old_array)) {
			$outAdded = $new_array[$a];
		}
		else if($a > count($new_array)) {
			$outRemoved = $old_array[$a];
		}
		else {
			if($old_array[$a] != $new_array[$a]) {
				$outRemoved .= $old_array[$a];
				$outAdded .= $new_array[$a];
				$close = true;
			}
			if($old_array[$a] == $new_array[$a]) {
				if($close) {
					$close = false;
					$outFinal .= " <span class='del'>$outRemoved</span> <span class='add'>$outAdded</span> ";
					$outRemoved = "";
					$outAdded = "";
				}
				$outFinal .= " " . $old_array[$a];
			}
		}
	}
	$outFinal .= "<span class='del'>$outRemoved</span> <span class='add'>$outAdded</span> ";
	return $outFinal;
}
?>