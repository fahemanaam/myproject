<?php
$delete = mysqli_query"delete * from user";

$query = mysql_affected_rows($delete);

?>