<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>

   <div class="save_div">
       <form action="saveUserProcess.php" method="get">
           <input type="text" placeholder="name here" name="name" required class="inputs"><br>
           <input type="email" placeholder="email address" name="email" required class="inputs"><br>
           <input type="password" placeholder="enter password" name="password" required class="inputs"><br>
           <input type="submit" value="submit" name="btn_save" class="sbtn"><br>
           <a href="viewUsers.php" class="vlink">View Users</a><br>
       </form>

   </div>
</body>
</html>