<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update</title>
</head>
<script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>

<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `todo` WHERE `id` = '$id'");
$data = mysqli_fetch_array($sql);
?>

<body class="bg-dark ">
    <form action="update.php" method="post">
        <div class="container ">
            <div class=" row align-middle justify-content-center bg-grey mx-auto shadow mt-3 py-3 col-md-6 rounded-5">
                <h2 class="text-center text-warning mb-4">TODO LIST</h2>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-success"><i class="fas fa-circle-check"></i></button>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
</body>

</html>