<?php
    session_start();

    // Check if the user is authenticated and has the 'admin' role
    if (!(isset($_SESSION['status']) && $_SESSION['status'] && isset($_SESSION['role']) && $_SESSION['role'] === 'admin')) {
        // Redirect the user to a login page or display an access denied message
        header("Location: ./index.php"); // Replace login.php with your login page URL
        exit();
    }
?>
<!-- kun naka doc type frontend code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesment Test</title>
    <!-- copy this in each html codes -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;    
        }
    </style>
</head>
<body>
    <div class="w-full flex flex-row justify-between p-5 bg-gray-200">
        <div class="ml-10">
            LOGO
        </div>
        <div class="mr-10">
            <li class="flex flex-row gap-10 items-center">
                <ul><a class="hover:underline font-bold" href="./users.php">Users</a></ul>
                <ul><a class="hover:underline font-bold" href="./questions.php">Questions</a></ul>
                <ul><a class="hover:underline font-bold" href="./scores.php">Scores</a></ul>
                <ul><a class="hover:underline font-bold" href="./functions/logout.php">Log Out</a></ul>
            </li>
        </div>
    </div>

    <div class="h-[100vh] flex flex-row">
        <div class="p-10 flex justify-center items-center h-full w-1/2 m-5 ">
            <div class="bg-gray-200 flex flex-col p-5 border rounded-xl w-full">
                <form action="./functions/actions.php" method="POST" class="flex flex-col justify-center items-center gap-5">
                    
                    <h2>Questions</h2>
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="question" placeholder="Question">

                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="a_answer" placeholder="A Answer">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="b_answer" placeholder="B Answer">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="c_answer" placeholder="C Answer"> 
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="d_answer" placeholder="D Answer">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="correct_answer" placeholder="Correct Answer">
                    <select required class="p-3 bg-white w-full border rounded-xl border-solid" name="type">
                        <option selected hidden value="">Type</option>
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>
                    
                    <input class="bg-gray-100 p-3 w-full border rounded-xl hover:bg-[#F3E99F] " type="submit" name="addQuestion" value="ADD">
                </form>
            </div>
        </div>

        <div class="p-5 py-10 flex justify-center items-start h-full w-1/2 overflow-scroll">
            <div>
                <table class="table-fixed border border-1 border-solid w-full">
                
                <tr>
                    <th>Question</th>
                    <th>A Answer</th>
                    <th>B Answer</th>
                    <th>C Answer</th>
                    <th>D Answer</th>
                    <th>Correct Answer</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                <?php 
                    include "./functions/db.php";
                    
                    $query = "SELECT * FROM questions";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['question'] ?></td>
                    <td><?php echo $row['a_answer'] ?></td>
                    <td><?php echo $row['b_answer'] ?></td>
                    <td><?php echo $row['c_answer'] ?></td>
                    <td><?php echo $row['d_answer'] ?></td>
                    <td><?php echo $row['correct_answer'] ?></td>
                    <td><?php echo $row['type'] ?></td>
                    <td>
                        <div class="flex justify-around">
                            <button>Edit</button>
                            <button>Delete</button> 
                        </div>
                    </td>
                </tr>
                <?php 
                        }
                    }
                ?>
                
            </table>
            </div>
            
        </div>
    </div>
    
    
    
</body>
</html>
