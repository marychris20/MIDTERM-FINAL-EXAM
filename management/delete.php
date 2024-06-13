<?
include "conn.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `management` WHERE id=$id";
    $conn->query(sql);
}
header('location:/management/index.php');
exit;
?>