<?php
 include("dbconnection.php"); // <-- Make sure this connects to your DB
echo "i am here";
if (isset($_POST['uempid'])) {
    $empid = $_POST['uempid'];
    $stmt = $conn->prepare("SELECT * FROM user WHERE uempid = ?");
    $stmt->bind_param("s", $empid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo 'exists';
    } else {
        echo 'not_exists';
    }
}
?>
