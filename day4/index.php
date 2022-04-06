<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="welcome.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username"><br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <label for="city">City</label>
    <select id="city" name="city">
        <option value="Luxor">Luxor</option>
        <option value="Ismailia">Ismailia</option>
        <option value="Cairo">Cairo</option>
    </select><br>
    <label for="gender">Gender</label>
    <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><br>
    <label for="bod">Birth date</label>
    <input type="date" id="bod" name="bod"><br>
    <label for="skills">Skills</label>
    <input type="checkbox" id="php" name="skills[]" value="php"><label for="php">PHP</label>
    <input type="checkbox" id="html" name="skills[]" value="html"><label for="html">HTML</label><br>
    <input type="checkbox" id="css" name="skills[]" value="css"><label for="css">CSS</label>
    <input type="checkbox" id="js" name="skills[]" value="js"><label for="js">JavaScript</label><br>
    <input type="submit" value="Send">
</form>
</body>
</html>