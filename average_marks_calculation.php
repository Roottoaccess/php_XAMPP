<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stud.css">

    <title>Marks Calculation System</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- This is the navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student_Average_Marks_Calculation_System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/WORK_STATION">Home</a>
                    </li>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- This is the form structure -->
    <div class="container">
        <center><i><u>
                    <h3>Public Education Socity</h3>
                </u></i></center>
        <i><u>
                <h5>Marks should be under 100</h5>
            </u></i>
        <form action="/WORK_STATION/average_marks_calculation.php" method="POST">
            <div class="mb-3">
                <label for="student" class="form-label">Enter the marks of Maths: </label>
                <input type="number" class="form-control" id="maths" name="maths" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="student" class="form-label">Enter the marks of Physics: </label>
                <input type="number" class="form-control" id="physics" name="physics" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="student" class="form-label">Enter the marks of Computer Science: </label>
                <input type="number" class="form-control" id="computer" name="computer" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="student" class="form-label">Enter the marks of English: </label>
                <input type="number" class="form-control" id="english" name="english" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Check Average</button>
        </form>
    </div>

    <!-- Writing the PHP script for backend -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $maths = (int)$_POST['maths'];
        $physics = (int)$_POST['physics'];
        $computer = (int)$_POST['computer'];
        $english = (int)$_POST['english'];

        # Logic behind the calculation......
        $average = ($maths + $physics + $computer + $english) / 4;

        echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Total Marks Average: </strong>' . $average . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>

</body>

</html>