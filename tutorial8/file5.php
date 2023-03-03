<!DOCTYPE html>
<html>
<head>
	<title>Chess Board</title>
	<style>
		table {
			border-collapse: collapse;
		}

		td {
			width: 50px;
			height: 50px;
			text-align: center;
		}

		.white {
			background-color: white;
		}

		.black {
			background-color: black;
		}

		.piece {
			font-size: 30px;
			color: red;
		}
	</style>
</head>
<body>
	<table>
		<?php
			for ($row = 1; $row <= 8; $row++) {
				echo "<tr>";

				for ($col = 1; $col <= 8; $col++) {
					$class = (($row + $col) % 2 == 0) ? "white" : "black";
					echo "<td class='$class'>";

					// Add chess pieces to the board
					if ($row == 2) {
						echo "<span class='piece'>♟</span>";
					} elseif ($row == 7) {
						echo "<span class='piece'>♙</span>";
					} elseif (($row == 1 || $row == 8) && ($col == 1 || $col == 8)) {
						echo "<span class='piece'>♜</span>";
					} elseif (($row == 1 || $row == 8) && ($col == 2 || $col == 7)) {
						echo "<span class='piece'>♞</span>";
					} elseif (($row == 1 || $row == 8) && ($col == 3 || $col == 6)) {
						echo "<span class='piece'>♝</span>";
					} elseif (($row == 1 || $row == 8) && $col == 4) {
						echo "<span class='piece'>♛</span>";
					} elseif (($row == 1 || $row == 8) && $col == 5) {
						echo "<span class='piece'>♚</span>";
					}

					echo "</td>";
				}

				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
