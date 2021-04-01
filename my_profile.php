<?php
    session_start();
    $sql = "SELECT * FROM users WHERE fbsql_username(link_identifier)";
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo $row['name'];
    }
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Success page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: grey;
            font-family: cursive;
        }    
        .card{
            border: solid;
            background-color: skyblue;

        }
        .image{
            border: solid;
        }
    </style>
</head>

<body>

    <div class="card container p-4 my-5">
        <h2 class="text-center p-2 mx-5">My Profile</h2>
        