<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="jumbotron">
            <h1 class="text-center">
              Liste des étudiants DSI 22 G2 2019
            </h1>
        </div>

    <a href="create.php"> <button class="btn btn-primary">Ajouter etudient</button></a>
     <br><br>
    <table class="table" border="1">
        <th>ID</th>
        <th>Firstname</th>
        <th>Lasname</th>
        <th>Email</th>
        <th>Phone</th>
    <?php
include 'dbconnexion.php';
$rep=$cnx->query('SELECT * FROM students');
while($data=$rep->fetch()){
    echo '<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
}
?>
</table>
</div>
 
</body>
</html>
