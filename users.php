<?php 
 if(file_exists(dirname(__FILE__).'/config.php')){
       require_once(dirname(__FILE__).'/config.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h4> See All user list From below</h4>
    <?php 
     $query = $connection->query("SELECT * FROM user");
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
        </tr>
        <?php while($data = $query->fetch_assoc()) :?>
            <tr>
                <td><?php echo $data['id']?></td>
                <td><?php echo $data['username']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['password']?></td>
                <td><?php echo $data['phone']?></td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>