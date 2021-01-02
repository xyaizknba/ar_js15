<?php
date_default_timezone_set("America/Mexico_City");
echo "var ipVisitante=\"".$_SERVER["REMOTE_ADDR"]."\";\n"; 
echo "dteHoy=new Date(".date("Y").",".(date("m")-1).",".date("d").");\n";   
 
?>

