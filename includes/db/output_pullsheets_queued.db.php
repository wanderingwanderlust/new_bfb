<?php
$query_table_round = sprintf("SELECT COUNT(*) as count from %s WHERE flightTable='%s' AND flightRound='%s'", $prefix."judging_flights", $row_tables['id'], $round);
$table_round  = mysqli_query($connection,$query_table_round) or die (mysqli_error($connection));
$row_table_round = mysqli_fetch_assoc($table_round);
?>