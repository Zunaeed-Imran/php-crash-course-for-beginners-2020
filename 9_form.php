<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="form.php" method="get">
   <input type="text" name="name">
   <button type="submit">Sub</button>
 </form>
</body>
</html>

<?php

if(isset($_REQUEST['name'])){
    echo "Hello how are you {$_REQUEST['name']}"; // REQUEST METHOD IS work for both form (get or post) both
}

?>