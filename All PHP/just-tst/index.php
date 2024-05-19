<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jut Test</title>
</head>
<body>
<?php
echo 'I\'m Ferdaus from best wp developer';


function name_is_ferdaus(){
  $name_one = 'This name is Ferdaus';
  return $name_one;
}
function name_secound(){
  $name_two = name_is_ferdaus();
  echo $name_two;
}



?>
</body>
</html>