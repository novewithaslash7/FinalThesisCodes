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
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-screen p-10 flex justify-center align-center">
        <div class="w-1/2 p-5 bg-gray-200">
            <p class="text-center font-bold text-3xl mb-5">Instruction</p>
            <!-- do proper paragraph with BR's -->
            <p>
            During the Test:

Read Instructions Carefully: Before beginning each section, read the instructions and questions carefully to understand the requirements.

Manage Your Time: Pace yourself throughout the test to allocate enough time for each section or question. Don't get stuck on a single question; move on and return if necessary.

Answer Each Question: Attempt to answer every question, even if you're unsure. You can revisit unanswered questions if time permits.

Stay Calm and Focused: Maintain a calm and focused mindset. Take deep breaths if you start to feel anxious, and avoid rushing through the questions.

Check Your Work: If time allows, review your answers for errors or omissions. Pay attention to detail.
            </p>
            <div class="flex justify-center align-center gap-10 p-10">
                <a href="./quiz.php">
                    <button class="p-5 hover:bg-gray-400 border-black border-4 border-solid rounded rounded-full font-bold">Proceed</button>
                </a>
                <a href="../landing/">
                    <button class="p-5 hover:bg-gray-400 border-black border-4 border-solid rounded rounded-full font-bold">Cancel</button>
                </a>                
            </div>
        </div>

    </div>
</body>
</html>