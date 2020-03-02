<?php
    if(isset($_POST['submit']))
    {
        include 'connection.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        if($phone = "")
            $phone = 0;
        $msg1 = $_POST['msg1'];
        $msg2 = $_POST['msg2'];

        $sql = "INSERT INTO contact_tbl(`name`, `email`, `company`, `phone`, `msg1`, `msg2`) VALUES ('$name','$email','$company','$phone','$msg1','$msg2');";
        if (mysqli_query($conn, $sql)) {
            // echo'<script>
            //     prompt("Submitted");
            //     echo "window.location="index.php"";
            // </script>';
            header("location:index.html#contact");
         } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
         }
         
         $conn->close();
    }
?>
