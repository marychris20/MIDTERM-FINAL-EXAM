<?php
include 'conn.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $Priority = $_POST['priority'];
    $Assigned = $_POST['assigned'];
    $q = "INSERT INTO `management`(`id`, `title`, `description`, `priority`, `assigned`) VALUES (`$id`,` (`$Title`), (`$Description`), (`$Assigned`)";
}
?>
<!doctype html>
<html lang="en">

<title>System Management</title>
<hea>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Issue Management System</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Add New</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col- lg-6 m-auto">
            <form method="post">


                <br><br>
                <div class="card">

                    <div class="card-header bg-primary">
                        <h1 class="text-white text-center"> Create New Title</h1>
                    </div><br>

                    <label>ID</label>
                    <input type="text" name="id" class="form-control"><br>

                    <label>Title</label>
                    <input type="text" name="title" class="form-control"><br>

                    <label>Description</label>
                    <input type="text" name="description" class="form-control"><br>

                    <label>Priority</label>
                    <input type="text" name="priority" class="form-control"><br>

                    <label>Assigned</label>
                    <input type="text" name="assigned" class="form-control"><br>

                    <button class="btn btn-sucess" type="submit" name="submit">Submit</button>
                    <a class="btn btn-info" type="submit" href="index.php">Cancel</a>
                </div>
            </form>
        </div>
    </body>

</html>