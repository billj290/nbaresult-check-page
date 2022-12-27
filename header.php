<?php

$nbatoday=$_GET['nbatoday'];
// echo $nbatoday;
header("location:https://www.nba.com/games?date=$nbatoday");
exit;

?>