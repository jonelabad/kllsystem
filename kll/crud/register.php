<?php 
include '../database/connection.php';

if (isset($_POST['submit'])) {
    $Course = $_POST['Course'];
    $StudentNumber = $_POST['StudentNumber'];
    $Lastname = $_POST['Lastname'];
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Suffix = $_POST['Suffix'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $POB = $_POST['POB'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Re_Email = $_POST['Re_Email'];
    $FB_Account = $_POST['FB_Account'];
    $Contact = $_POST['Contact'];

    $insert_user = $conn->prepare("INSERT INTO `tbl_users` (Course, StudentNumber, Firstname, Lastname, Middlename, Suffix, Gender, DOB, POB, Address, Email, Re_Email, FB_Account, Contact) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    try {
        $insert_user->execute([$Course, $StudentNumber, $Lastname, $Firstname, $Middlename, $Suffix, $Gender, $DOB, $POB, $Address, $Email, $Re_Email, $FB_Account, $Contact]);
        echo "<script>
            alert('User form successfully submitted');
            window.location.href = '../index.php';
        </script>";
    } catch (PDOException $e) {
        echo "<script>
            alert('Error: " . $e->getMessage() . "');
        </script>";
    }
}
?>
