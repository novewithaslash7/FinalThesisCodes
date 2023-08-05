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
                <form action="./functions/actions.php" method="POST" class="flex flex-col justify-center items-center gap-5">
                    
                    <h2>Users</h2>
                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="name" placeholder="Name">
                    <select class="p-3 bg-white w-full border rounded-xl border-solid" name="curriculum">
                        <option selected hidden value="">Curriculum</option>
                        <option value="BS Information Technology">BS Information Technology</option>
                        <option value="BS Information Systems">BS Information Systems</option>

                    </select>
                    
                    <div class="flex w-full flex-row gap-2">
                        
                        <select class="p-3 bg-white w-1/2 border rounded-xl border-solid" name="year">
                            <option selected hidden value="">Year</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        
                        <select class="p-3 bg-white w-1/2 border rounded-xl border-solid" name="section">
                            <option selected hidden value="">Section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        
                    </div>                

                    <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="student_id" placeholder="Student ID">
                    <input required class="p-3 w-full border rounded-xl border-solid" type="password" name="password" placeholder="Password">
                    
                    <input class="bg-gray-100 p-3 w-full border rounded-xl hover:bg-[#F3E99F] " type="submit" name="addUser" value="ADD">
                    <!-- <a class="hover:bg-[#F3E99F]" href="./register.php"></a> -->
                </form>
            </div>
        </div>

        <div class="p-10 flex justify-center items-start h-full w-1/2 overflow-scroll">
            <div>
                <table class="table-fixed border border-1 border-solid w-full">
                
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Curriculum</th>
                        <th>Year</th>
                        <th>Section</th>
                        <th>Actions</th>
                    </tr>
                <?php 
                    include "./functions/db.php";
                    
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $row['student_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['curriculum'] ?></td>
                        <td><?php echo $row['year'] ?></td>
                        <td><?php echo $row['section'] ?></td>
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
