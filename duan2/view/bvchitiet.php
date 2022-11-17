<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/chitiet.css">
</head>
<body>

<?php
include'./header-costumer.html';
include'../model/db.php';
if (isset($_GET['id_bv'])) {
    $id = $_GET['id_bv'];
} else {
    $id = 0;
}
$sql = "Select * from post  where id_post=$id ";
$sql_update = " update post set view=view+1 where id_post=$id ";

$result = $conn->prepare($sql_update);

if ($result->execute()) {
} else {
    echo "Đẩy lên thất bại";
}


if(isset($_GET['id_bv'])){
    $id_bv=$_GET['id_bv'];
}
$sql=" Select * from post where id_post = '$id_bv'";
$kq=$conn ->query($sql);
foreach( $kq as $row){



?>
<div class="name"><p><?php echo$row['post_name']?></p> </div>

<img src="../img/<?php echo $row['img']?>" alt="">
<div class="tg"><p>Tac gia :</p><?php echo$row['author']?></div>





<?php }?>


    
</body>
</html>

