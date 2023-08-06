<?php
    session_start();

    // Check if the user is authenticated and has the 'admin' role
    if (!(isset($_SESSION['status']) && $_SESSION['status'] && isset($_SESSION['role']) && $_SESSION['role'] === 'user')) {
        // Redirect the user to a login page or display an access denied message
        header("Location: ../index.php"); // Replace login.php with your login page URL
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="w-screen flex justify-center align-center p-10">
        <p class="font-bold text-xl">Easy</p>
    </div>
    <!-- to loop -->
    <div class="w-screen h-screen bg-gray-100 p-5 flex flex-col justify-center items-center">
        
        <div class="flex w-1/2 p-20 flex-col justify-center items start">
            <p>Question?</p>
            <div>
                <input type="radio"  name="question1Answer" value="1">
                <label >1</label><br>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="2">
                <label >2</label><br>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="3">
                <label >3</label>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="4">
                <label >4</label> 
            </div>
        </div>         
         
    </div>

    <div class="w-screen flex justify-center align-center p-10">
        <p class="font-bold text-xl">Medium</p>
    </div>
    <!-- to loop -->
    <div class="w-screen h-screen bg-gray-100 p-5 flex flex-col justify-center items-center">
        
        <div class="flex w-1/2 p-20 flex-col justify-center items start">
            <p>Question?</p>
            <div>
                <input type="radio"  name="question1Answer" value="1">
                <label >1</label><br>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="2">
                <label >2</label><br>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="3">
                <label >3</label>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="4">
                <label >4</label> 
            </div>
        </div>         
         
    </div>

    <div class="w-screen flex justify-center align-center p-10">
        <p class="font-bold text-xl">Hard</p>
    </div>
    <!-- to loop -->
    <div class="w-screen h-screen bg-gray-100 p-5 flex flex-col justify-center items-center">
        
        <div class="flex w-1/2 p-20 flex-col justify-center items start">
            <p>Question?</p>
            <div>
                <input type="radio"  name="question1Answer" value="1">
                <label >1</label><br>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="2">
                <label >2</label><br>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="3">
                <label >3</label>
            </div>
            <div>
                <input type="radio"  name="question1Answer" value="4">
                <label >4</label> 
            </div>
        </div>         
         
    </div>

    <div class="w-screen flex justify-center align-center p-10">
        <!-- temp -->
        <a href="./end.php">
            <button class="p-5 hover:bg-gray-200 border-black border-4 border-solid rounded rounded-full font-bold">Submit</button>
        </a>
        
    </div>
    
</body>
</html>