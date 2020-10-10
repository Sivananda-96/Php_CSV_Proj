<?php

if(!empty($_FILES['csv_file']['name']))
{
 $file_data = fopen($_FILES['csv_file']['tmp_name'], 'r');
 fgetcsv($file_data);
 while($row = fgetcsv($file_data))
 {
  $data[] = array(
   'student_id'  => $row[0],
   'student_name'  => $row[1],
   'gender'=>$row[2],
   'student_phone'  => $row[3]
  );   //we are storing value as key value pair
 }
 echo json_encode($data);
}

?>
