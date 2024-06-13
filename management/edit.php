<?
include "conn.php";
$Id = "";
$Title = "";
$Description = "";
$Priority = "";
$Assigned = "";

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['id'])) {
        header("localhost:management/index.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM management WHERE id=$Id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while (!$row) {
        header("location:management/index.php");
        exit;
    }
    $Id = $row["id"];
    $Title = $row["title"];
    $Description = $row["description"];
    $Priority = $row["priority"];
    $Assigned = $row["assigned"];

    $sql = "UPDATE management SET Id ='$Id', Title='$Title', Description='$Description', Priority='$Priority', Assigned='$Assigned'";
    $result = $conn->query($sql);

}
?>
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
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"><br>

                    <label>ID</label>
                    <input type="text" name="id" value="<?php echo $id; ?>" class="form-control"><br>

                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $title; ?>" class="form-control"><br>

                    <label>Description</label>
                    <input type="text" name="description" value="<?php echo $description; ?>" class="form-control"><br>

                    <label>Priority</label>
                    <input type="text" name="priority" value="<?php echo $priority; ?>" class="form-control"><br>

                    <label>Assigned</label>
                    <input type="text" name="assigned" value="<?php echo $assigned; ?>" class="form-control"><br>

                    <button class="btn btn-sucess" type="submit" name="submit">Submit</button>
                    <a class="btn btn-info" type="submit" href="index.php">Cancel</a>
                </div>
            </form>
        </div>
    </body>

</html>