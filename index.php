<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Futuristic TODO List</title>
</head>
<script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="card bg-dark text-white">
            <div class="card-body text-center">
                <h2 class="text-warning mb-4">TODO LIST</h2>
                <form action="insert.php" method="post" class="d-flex justify-content-center align-items-center">
                    <input type="text" name="list" class="form-control me-2" placeholder="Add new item" required>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i></button>
                </form>
            </div>
        </div>

        <?php
            include "config.php";
            $sql = mysqli_query($con, "SELECT * FROM `todo`");
            $i = 1;
        ?>

        <div class="card mt-4 bg-dark text-white">
            <div class="card-body">
                <table class="table table-dark table-striped">
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <div>
                                
                                <td><?php echo $i++?></td>
                                <td><?php echo $row['list']?></td>
                                <td style="width: 10%;"><a href="hal-update.php?ID=<?php echo $row['id']?>"
                                        class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                                <td style="width: 10%;"><a href="delete.php?ID=<?php echo $row['id']?>"
                                        class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            </div>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>