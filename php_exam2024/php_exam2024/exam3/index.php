<?php
    $product = array("หมูทอด","ผักชุด","ซุปกระดูกหมูก้อน","ปูอัด","น้ำจิ้ม","ตะเกียบ","หม้อไฟฟ้า");
    $price = array("30","45","15","105","35","20","799");
?>

<table border="1">
    <tr>
        <th>รายการที่ซื้อ</th>
        <th>ราคา</th>
    </tr>
    <?php
    $started = 0;
    $total = 0;

    while($started < count($product)){
    ?>
        <tr>
            <td><?php echo $product[$started]; ?></td>
            <td><?php echo $price[$started];?></td>
        </tr>
    <?php 
    $total += $price[$started];
    $started++; 

    }?>
    <tr>
        <td>
            ราคารวม
        </td>
        <td>
            <?php echo $total?>
        </td>
    </tr>
</table>