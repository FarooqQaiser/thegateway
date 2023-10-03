<?php
session_start();
include('dbcon.php');

if (!isset($_POST['update_remarks'])) {
    echo "Invalid request";
    exit;
}

$adminRemarks_id = $_POST['adminRemarks_id']; // Retrieve adminRemarks_id
$jobForm_id = $_POST['jobForm_id']; // Retrieve jobForm_id
$followUP = $_POST['follow_up']; // Retrieve follow_up
$comments = $_POST['comments']; // Retrieve comments

try {
    $query = "UPDATE adminremarks SET followUP=:followUP, comments=:comments WHERE adminRemarks_id=:adminRemarks_id LIMIT 1";
    $statement = $conn->prepare($query);

    $data = [
        ':followUP' => $followUP,
        ':comments' => $comments,
        ':adminRemarks_id' => $adminRemarks_id
    ];

    $query_execute = $statement->execute($data);

    if ($query_execute) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: jobform.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header('Location: jobform.php');
        exit(0);
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
