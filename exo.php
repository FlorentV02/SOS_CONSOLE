<?php 

include ('includes/head.php');

$variable[] = $post[1,2,3];

$variables_imploded = implode(",",$variable);

echo $variables_imploded;

"SELECT * 
FROM software_capability 
where software_capability_id IN 
(".$variables_imploded.")";

?>