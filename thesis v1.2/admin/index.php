<!-- kun naka doc type frontend code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesment Test</title>
    <!-- copy this in each html codes -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-center items-center  h-[100vh] bg-[url(../../bg1.JPG)] bg-cover">
        <div class="p-5
            w-1/3
            border-0
            rounded-xl
            bg-[#FF6D60]/70
            ">
            <form action="./functions/loginFunc.php" method="POST" class="flex flex-col justify-center items-center gap-5">
                
                <h2>Welcome to ICT Assessment Test | Admin</h2>
                <input required class="p-3 w-full border rounded-xl border-solid" type="text" name="username" placeholder="Username">
                <input required class="p-3 w-full border rounded-xl border-solid" type="password" name="password" placeholder="Password">
                <input class="bg-gray-100 p-3 w-full border rounded-xl hover:bg-[#F3E99F] " type="submit" name="login" value="SIGN IN">
                <!-- <a class="hover:underline" href="./register.php">Don't Have an Account? SIGN UP</a> -->
            </form>
        </div>
        
    </div>
    
    
    
</body>
</html>
