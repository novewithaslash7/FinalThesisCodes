<?php 
    include "./db.php";

    // login function
    // here is a statement that check is POST with a name of login. If true it will run the code inside
    if(isset($_POST['login'])){
        // session start is a fucntion that prevent unwanted user to go in the other page without login
        session_start();
        // here where the dat was get from the input and save to variable
        $student_id = $_POST['student_id'];
        $password = $_POST['password'];

        // code below is preparing the query with a username checking
        $stmt = $conn->prepare('SELECT * FROM users WHERE student_id = ?');
        //  code below bind the data parameters in the ? in query
        $stmt->bind_param("s", $student_id);
        // code below execute the query
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                session_start();
                // $id = $data['id'];
                $_SESSION['student_id']=$student_id;
                $_SESSION['status']=true;
                // $_SESSION['id'] = $id;
                $_SESSION['role'] = 'user';
                // code below redirect you to add-user page but i use ../ to return in the parent location
                header("location:../landing/index.php");

            }else{
                echo "invalid";
            }
        }else{
            echo "<h2>Invalid Username or Password</h2>";
        } 
    }
?>