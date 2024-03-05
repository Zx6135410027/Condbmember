<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="h4 text-center alert alert-success mt-4" role="alert">แสดงข้อมูลสมาชิก</div>
<a href ="h_member.php" class="btn btn-success mb-4 ">Add+</a>    
    <table class="table table-striped" rel="stylesheet">
    <tr>
       <th>รหัส</th>
       <th>ชื่อ</th>
       <th>นามสกุล</th>
       <th>เบอร์โทรศัพท์</th>
       <th>Edit</th>
       <th>Delete</th>
    </tr>
    <?php
    $sql = "SELECT * FROM member";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
   ?>

    <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["surname"]?></td>
            <td><?=$row["telephone"]?></td>
            <td><a href="edit_member.php?id=<?=$row["id"]?>" class="btn btn-warning ">Edit</a></td>
            <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger " onclick="Del (this.href);return false;">Delete</a></td>
    </tr>
    <?php
    }
    mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
    ?>
    </div>

    </table>

</body>
</html>

<script language="JacaScript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
        if(agree){
            window.location=mypage;
        }
    }
</script>