<?php 

$db = mysqli_connect('remotemysql.com', 'iGxjWW4tCk', 'HJhcXwdGmX', 'iGxjWW4tCk');

if(isset($_POST['new_order'])){
    $order = json_decode($_POST['new_order']);
    $user = $order->user_id;
    //$name = $order->name;
    $goods = $order->goods;
    $quant = $order->quant;
    $amount = $order->amount;

    $sql = "INSERT INTO `Orders` (`user_id`, `goods`, `quantities`, `amount`, `payed`) VALUES ('$user', '$goods', '$quant', '$amount', 0)"

    mysqli_query($db, $sql);

    $id_q = "SELECT `ID` FROM `Orders` WHERE `user_id` = '$user'";
    $res = mysqli_query($db, $id_q);
    $row = mysqli_fetch_assoc($res);

    $id = $row['ID'];

    mysqli_close($db);

    echo $id;

}
// }elseif(isset($_POST['chaeck_order'])){
//     $user = json_decode($_POST['id']) -> user_id;

//     $id_q = "SELECT ID FROM Orders WHERE user_id = '$user'";
//     $res = mysqli_query($db, $id_q);
//     $row = mysqli_fetch_assoc($res);

//     $id = $row['ID'];

//     mysqli_close($db);

//     echo $id;
// }

?>