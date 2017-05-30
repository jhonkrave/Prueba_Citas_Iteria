<?php
if(isset($_POST['start'],$_POST['end'])){
 $array['result'][] = array("id"=>4,"title"=>"cita 1","date_start"=>"2017-05-06T16:00:00","date_end"=>"2017-05-06T17:00:00");
 $array['result'][] = array("id"=>5,"title"=>"cita 2","date_start"=>"2017-05-06T18:00:00","date_end"=>"2017-05-06T18:40:00");
 $array['result'][] = array("id"=>6,"title"=>"cita 3","date_start"=>"2017-05-06T19:00:00","date_end"=>"2017-05-06T19:30:00");
 $array['result'][] = array("id"=>7,"title"=>"cita 4","date_start"=>"2017-05-06T20:00:00","date_end"=>"2017-05-06T20:30:00");
 echo json_encode($array);
}

?>