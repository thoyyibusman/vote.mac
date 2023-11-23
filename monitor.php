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
    <nav>
        <h2>v<span>O</span>te.mac</h2>
    </nav>
    <?php
    include_once('connect.php');

    //green
    $sql = "SELECT * from candidate WHERE vote_to = 'green'";
    $result = mysqli_query($connect, $sql);
    $green = mysqli_num_rows($result);

    //red
    $sql1 = "SELECT * from candidate WHERE vote_to = 'red'";
    $result1 = mysqli_query($connect, $sql1);
    $red = mysqli_num_rows($result1);


    //blue
    $sql2 = "SELECT * from candidate WHERE vote_to = 'blue'";
    $result2 = mysqli_query($connect, $sql2);
    $blue = mysqli_num_rows($result2);

    //yellow
    $sql3 = "SELECT * from candidate WHERE vote_to = 'yellow'";
    $result3 = mysqli_query($connect, $sql3);
    $yellow = mysqli_num_rows($result3);



    ?>
    <div class="result text-center text-light">
        <h1>Current Status</h1>
            <table class="table w-50 m-auto fs-3">
                <tr>
                    <th>GROUP</th>
                    <th>COUNT</th>
                </tr>
                <tr>
                    <td>Green</td>
                    <td>
                        <?php echo $green ?>
                    </td>
                </tr>
                <tr>
                    <td>Blue</td>
                    <td>
                        <?php echo $blue ?>
                    </td>
                </tr>
                <tr>
                    <td>Red</td>
                    <td>
                        <?php echo $red ?>
                    </td>
                </tr>
                <tr>
                    <td>Yellow</td>
                    <td>
                        <?php echo $yellow ?>
                    </td>
                </tr>
            </table>
    </div>
</body>

</html>