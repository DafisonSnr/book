<?php
 require_once './includes/header.php';
 require_once './config/config.php';
 $sql = "select * from users";
 $check = $conn->query($sql);
?>

<div class="container">
    <select name="" id="" onchange="userInfo(this.value)">
    <option value="">Select</option>
    <?php while ($row = mysqli_fetch_assoc($check)){?>
        <option value="<?=$row['id']?>"><?=$row['username']?></option>

   <?php }?>
    </select>
    <span id="txtHint"></span>
</div>


<?php require_once './includes/footer.php'?>