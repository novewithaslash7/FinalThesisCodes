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
        table, th, td, tr{
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
                <ul><a class="hover:underline font-bold" href="./index.php">Log Out</a></ul>
            </li>
        </div>
    </div>
    <div class="flex flex-col justify-center gap-5 p-5" >
            <!-- filter form -->
            <div>
                <form class="flex gap-3">
                    <!-- year -->
                    <select class="p-3 bg-white border rounded-xl border-solid" name="year" placeholder="Year">
                        <option selected hidden value="">Year</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <!-- section -->
                    <select class="p-3 bg-white border rounded-xl border-solid" name="year" placeholder="Section">
                        <option selected hidden value="">Section</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>

                    <!-- curriculumn -->
                    <select class="p-3 bg-white border rounded-xl border-solid" name="year" placeholder="Year">
                        <option selected hidden value="">Curriculum</option>
                        <option value="BS Information Technology">BS Information Technology</option>
                        <option value="BS Information Systems">BS Information Systems</option>

                    </select>
                    <!-- ACTION -->
                    <input class="bg-gray-100 p-3 border rounded-xl hover:bg-gray-300 " type="submit" value="Filter">
                </form>

            </div>
            <!-- table -->
            <div>
                <table class="table-fixed border border-1 border-solid w-full">
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Section</th>
                        <th>Curriculum</th>
                        <th>Score</th>                        
                        <th>Clasification</th>
                    </tr>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                    </tr>
                </table>
            </div>
        </div>

    
    
    
    
</body>
</html>
