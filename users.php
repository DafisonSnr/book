<?php 
    require_once './config/config.php';
    $q = $_GET['q'];
    $sql = mysqli_query($conn,"select * from users where id='$q'");

?>
<div class="container">
    <?php
        echo "<table class='table'>
                <tr>
                    <th>Gender</th>
                    <th>month</th>
                    <th>email</th>
                </tr>";
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<tr>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['month']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                }
        echo "</table>";
    ?>
</div>

<?php require_once './includes/footer.php'?>