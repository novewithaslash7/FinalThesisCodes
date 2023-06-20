<?php
$studentIdNo = $_POST['studentIdNo'];
$name = $_POST['name'];
$curriculum = $_POST['curriculum'];
$password = $_POST['password'];


if(!empty($username)|| !empty($email)|| !empty($password)) { 
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "sample";

            //create connection
            $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

            if($conn->connect_error){                

                        die("Connection failed." .$conn->connect_error);
            } else {
                        $SELECT = "SELECT name FROM account_student WHERE name='".$name."'";
                        $INSERT = "INSERT INTO account_student (student_id, year, section, password, name, curriculum) VALUES(?,?,?,?,?)";

            //Prepare statement
                $stmt = $conn->query($SELECT);
                if($stmt->num_rows == 0){

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("sssss",$studentIdNo,$year,$section,$password,$name,$curriculum);
                    $stmt->execute();
                    header("location: index.html");
                    exit();
                    
                }   else{

                    echo"Someone already register using this email";
                }
                $conn->close();
    }
} else {
            echo"";
            die();
}

?>