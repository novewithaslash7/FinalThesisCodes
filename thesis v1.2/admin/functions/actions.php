<?php

    include "./db.php";

    // add user
    if(isset($_POST['addUser'])){
        $name = $_POST['name'];
        $curriculum = $_POST['curriculum'];
        $year = $_POST['year'];
        $section = $_POST['section'];
        $student_id = $_POST['student_id'];
        $password = $_POST['password'];

        $SELECT = "SELECT student_id FROM users WHERE student_id='".$student_id."'";
        $INSERT = "INSERT INTO users (student_id, name, curriculum, year, section, password) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->query($SELECT);
        if($stmt->num_rows == 0){
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss", $student_id, $name, $curriculum, $year, $section, $password);

            if ($stmt->execute()) {
                echo "Todo created successfully";
                header("location: ../users.php");
                exit();
            } else {
                // echo "Error: " . $stmt->error;
                header("location: ../users.php?msg");
            }
        }else{
            echo"Someone already register using this email";
        }
        // Close the statement and connection
        
        $conn->close();
    };

    // delete user


    
    // add question
    if(isset($_POST['addQuestion'])){
        $question = $_POST['question'];
        $a_answer = $_POST['a_answer'];
        $b_answer = $_POST['b_answer'];
        $c_answer = $_POST['c_answer'];
        $d_answer = $_POST['d_answer'];
        $correct_answer = $_POST['correct_answer'];
        $type = $_POST['type'];

        $INSERT = "INSERT INTO questions (question, a_answer, b_answer, c_answer, d_answer, correct_answer, type) VALUES (?,?,?,?,?,?,?)";
        
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssss", $question, $a_answer, $b_answer, $c_answer, $d_answer, $correct_answer, $type);

        if ($stmt->execute()) {
            header("location: ../questions.php");
            exit();
        } else {
            // echo "Error: " . $stmt->error;
            header("location: ../questions.php?msg");
        }
        
        // Close the statement and connection
        
        $conn->close();
    };
    // update question

    // delete question


    
    // get scores with filter


    // get scores

    



?>