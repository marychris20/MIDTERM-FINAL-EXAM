<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
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
    <div class="container my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Assigned</th>
                    <th>Action</th>
                </tr>
            </thead>
            </tbody>

            <?
            include "conn.php";
            $sql = "select * from management";
            $result = $conn->query($sql);
            if (!$result) {
                die("Invalid Query!");
            }
            while ($row = $result->fetch_assoc()) {
                echo "
        <tr>
            <th>$row[Id]</th>
            <td>$row[Title]</td>
            <td>$row[Description]</td>
            <td>$row[Priority]</td>
            <td>$row[Assigned]</td>
            <td>
                  
                  <a class 'btn-btn-sucess' href='edit.php?=$row[id]'>EDIT</a>
                  <a class 'btn-btn-danger' href='delete.php?=$row[id]'>DELETE</a>
                  </td>
        </tr>
       ";
            }
            ?>
            </tbody>
        </table>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>