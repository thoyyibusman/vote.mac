<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vOte.mac</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Poppins:wght@300&family=Rubik+Iso&display=swap" rel="stylesheet">  
      <style>
        body{
            background-image: url('images/601814030e1e391aa65257c6_dgen-vote-s-01.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #456785;
        }
    </style>

</head>

<body>
    <?php
    include_once('connect.php');

    ?>
    <nav>
        <h2>v<span>O</span>te.mac</h2>
    </nav>
    <div class="row w-100 " >
        <div class="col-10 col-md-5 m-auto " >
            <h1 class="text-center text-light" style="font-size: 50px; font-family: 'Black Ops One', cursive;">SYSTEM VOTING</h1><br>
            <h3>Read:</h3>
            <ul style="font-size: 20px;">
                <li>Candidate should want a valid email id</li>
                <li>Each candidate can vote only once</li>
                <li>Validate the details entered before clicking <button class="non" style="cursor:context-menu; background-color:transparent">vote</button>
                    button</li>
            </ul><br>
            <a class="ms-2" href="monitor.php"><button class=" w-25 btn btn-outline-light">Result</button></a>
            <a class="ms-2" href="page.php"><button class="w-50 btn btn-outline-light">Next</button></a>
        </div>

    </div>

</body>

</html>