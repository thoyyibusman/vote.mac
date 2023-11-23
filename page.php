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
    error_reporting(0);
    $err = "";
    if (isset($_POST['vote'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $place = $_POST['place'];
        $voteto = filter_input(INPUT_POST, 'voteto', FILTER_SANITIZE_STRING);
        $img = $_FILES['profile']['name'];
        
        if ($place == '' || $name == '' || $email == '' || $phone == '' || $voteto == '') {
            $err = "Fill the form properly";
        } else {

            $sql1 = "SELECT * FROM candidate WHERE email = '$email'";
            $sql1;
            $result1 = mysqli_query($connect, $sql1);

            if (mysqli_num_rows($result1) > 0) {
                header('location: voted.php');
            } else {


                $sql = "INSERT INTO candidate(name,email,contact,place,profile,vote_to) VALUES('$name','$email','$phone','$place','$img','$voteto')";


                $result = mysqli_query($connect, $sql);
                if ($result) {
                    move_uploaded_file($_FILES['profile']['tmp_name'], 'images/' . $img);
                    ?>
                    <script>
                        alert('Succussfully Voted')
                    </script>

                    <?php
                }

                header('location:index.php');

            }
        }
    }

    ?>
    <h2 class="text-center mb-4 text-light">Mark your vote</h2>
<div class="row ">
    <div class="col-lg-3 col-md-6 col-sm-10 m-auto">
    <form action="" class="form-control pt-4" method="POST" enctype="multipart/form-data">
        
        <input type="text" class="form-control" placeholder="Name" name="name"><br><br>
        
        <input type="email" class="form-control" placeholder="Email" name="email"><br><br>
        
        <input type="text" class="form-control" placeholder="Contact" name="phone"><br><br>
        
        <input type="text" class="form-control" placeholder="Place" name="place"><br><br>
        
        <select name="voteto" class="form-control"  id="voteto" >
            <option value="" disabled selected>Mark vote</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
            <option value="red">Red</option>
        </select><br>
        <input type="text" class="form-control" placeholder="Image" onfocus="(this.type = 'file')"  name="profile"><br><br>

        <input type="submit"  class="btn btn-success w-100" name="vote" value="Vote">
    </form>
    </div>
    <span class="text-center mt-3 text-danger"><?php echo $err  ?></span>
</div>

   

</body>

</html>