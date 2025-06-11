<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type='Submit' value='Sair' name='Logout'>
        <?php
        if(isset($_POST['Logout'])){
            header('Location:../php/logout.php');
        }
        ?>
    </form>
</body>
</html>