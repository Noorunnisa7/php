<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    include('db.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table ">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <?php
                        $query = "SELECT * from users";
                        $queryRun = mysqli_query($con , $query);
                        while($fetch = mysqli_fetch_assoc($queryRun)){
                            echo "<tr>";
                            echo "<td>".$fetch['name']."</td>";
                            echo "<td>".$fetch['email']."</td>";
                            echo "<td>".$fetch['phone']."</td>";
                            echo "<td>".$fetch['address']."</td>";
                            echo "<td><a href='update.php?id=".$fetch['id']."' class='btn btn-primary'>Edit</a> <a class='btn btn-danger' href='delete.php?id=".$fetch['id']."'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>