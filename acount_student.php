<?php
$name = $_POST['name'];
$curriculum = $_POST['curriculum'];
$year = $_POST['year'];
$section = $_POST['section'];
$studentID = $_POST['studentID'];
$password = $_POST['password'];

if (!empty($name|| !empty($studentID)|| !empty($password))) {
            $host = "localhost";
            $dbname = "root";
            $dbPassword = "";
            $dbname = "assessment";

            //create connection
            $conn = new mysqli ($host, $dbName, $dbStudentID, $dbPassword);

            if($conn->connect_error){                

                        die("Connection failed." .$conn->connect_error);
            } else {
                        $SELECT = "SELECT studentID FROM account_student WHERE studentID='".$studentID."'";
                        $INSERT = "INSERT INTO account_student (name, curriculum, year, section, studentID, password) VALUES(?,?,?,?,?,?)";

            //Prepare statement
                $stmt = $conn->query($SELECT);
                if($stmt->num_rows == 0){
                    

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssisss",$name,$curriculum,$year,$section,$studentID,$password);
                    $stmt->execute();
                    header("location: landingPage.html");
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