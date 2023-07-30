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
        <div class="p-10 flex justify-center items-center h-full w-1/2 ">
            <div class="bg-gray-200 flex flex-col p-5 border rounded-xl w-full">
                <form action="" class="flex flex-col justify-center items-center gap-5">
                    
                    <h2>Questions</h2>
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="Question">

                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="A Answer">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="B Answer">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="C Answer"> 
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="D Answer">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="Correct Answer">
                    <select class="p-3 bg-white w-full border rounded-xl border-solid" name="type">
                        <option selected hidden value="">Type</option>
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>
                    
                    <input class="bg-gray-100 p-3 w-full border rounded-xl hover:bg-[#F3E99F] " type="submit" value="ADD">
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
                </tr>

                <tr>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>
                
            </table>
            </div>
            
        </div>
    </div>
    
    
    
</body>
</html>
