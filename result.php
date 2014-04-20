<?php
	require 'dbconnect.php';
  $query="SELECT * FROM calc order by datetime desc ";
  $r=mysql_query($query);
  while($fetch=mysql_fetch_array($r))
          {
            echo "<li class='list-group-item'>".$fetch['val1'].$fetch['action'].$fetch['val2']. " = " .$fetch['result']." ( IP ".$fetch['ip']. " , ".$fetch['datetime'].")"."</li>";
          }
?>