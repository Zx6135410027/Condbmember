<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="contianer">
    <div class="row">
    <div class=  "col-sm-6"> 

    <div class="h4 text-center alert alert-success mb-4 mt-4" role="alert">เพิ่มข้อมูลสมาชิก</div>
     <from method="POST" action="insert_member.php">
     <label>ชื่อ:</label>
     <input type ="text" name="fname"  class="form-control"placeholder="ชื่อ" require ><br>
     <label>นามสกุล:</label>
     <input type ="text" name="lname"  class="form-control"placeholder="นามสกุล" require ><br>
     <label>เบอร์โทรศัพท์:</label>
     <input type ="number" name="telephone"  class="form-control"placeholder="เบอร์โทรศัพท์" require ><br>
     <input type = "submit" value="submit" class="btn btn-success">
     <a href ="show_member.php" class="btn btn-danger ">Cancel</a>
</from>

    <div>
    </div>

</div>
</body>
</html>