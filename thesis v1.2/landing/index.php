<?php
    session_start();

    // Check if the user is authenticated and has the 'admin' role
    if (!(isset($_SESSION['status']) && $_SESSION['status'] && isset($_SESSION['role']) && $_SESSION['role'] === 'user')) {
        // Redirect the user to a login page or display an access denied message
        header("Location: ../index.php"); // Replace login.php with your login page URL
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

    <div class="w-full flex flex-row justify-between items-center p-5 bg-[#EC4646]">
        <div class="ml-10">
           
            <img class="h-[50px]" src="./SOICT.jpg">

        </div>

        <div class="mr-10">
            <li class="flex flex-row gap-10 items-center">
                <ul><a class="hover:underline font-bold" href="./index.php">Home</a></ul>
                <ul><a class="hover:underline font-bold" href="./faculty.php">Faculty</a></ul>
                <ul><a class="hover:underline font-bold" href="./course.php">Courses</a></ul>
                <ul><a class="hover:underline font-bold" href="../functions/logout.php">Log Out</a></ul>
            </li>
        </div>
    </div>

    <div class="flex h-screen bg-[#BBF1FA] gap-3 p-3">
        <!-- image -->
        <div class="w-1/2 p-20 flex justify-center">
            <img src="https://picsum.photos/300/200" alt="">
        </div>
        <!-- title -->
        <div class="flex w-1/2 flex-col justify-center items-end p-10">
            <h1 class="text-7xl text-end font-bold">SOICT Assessment Test</h1>
            <p class="text-end text-xl mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam eum debitis nostrum eaque nihil praesentium accusantium? Exercitationem quas mollitia porro neque odit, recusandae eos saepe rem tenetur dicta dolorem natus!</p>
            
            <a href="../quiz/index.php">
               <button class="w-25 border-4 border-solid border-black rounded-full hover:bg-[#F3E99F] p-5 mt-10">
                    <p class="text-3xl font-bold">Start Test</p>
                </button> 
            </a>
        </div>

        
    </div>
    
</body>
</html>