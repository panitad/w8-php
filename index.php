<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "students";
    $conn = mysqli_connect($host, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    $sql = "SELECT * FROM students ORDER BY class ASC";
    $fetch = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ปณิทัศน์-24</title>
</head>
<body>
    <div class="container pb-4 px-2">
        <h3 class="my-2 text-center fw-bold">รายชื่อนักเรียนใน Database MySQL</h3>
        <table class="table table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th>เลขประจำตัว</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($var = mysqli_fetch_assoc($fetch)) {?>
                    <tr>
                        <td><?php echo $var["s_id"]?></td>
                        <td><?php echo $var["fname"]." ".$var["lname"]?></td>
                        <td><?php echo $var["class"]?></td>
                        <td><?php echo $var["email"]?></td>
                        <td><?php echo $var["username"]?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
        <h3 class="my-2 text-center">นายปณิทัศน์ แซ่เจียม ม.6/10 เลขที่ 24</h3>
    </div>
</body>
</html>
