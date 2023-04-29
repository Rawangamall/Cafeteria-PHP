<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <title>log in</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-400 p-5 shadow rounded">
        <form method="post" action="index.php">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="img/undraw_rocket.svg" class="w-25">
                <h3 class="display-4 fs-1 text-center">log in </h3>
            </div>
            <div class="mb-3">
                <label  class="form-label" >Email </label>
                <input type="email" class="form-control" name="email"  > 
            </div>
            <div class="mb-3">
                <label  class="form-label" >password </label>
                <input type="password" class="form-control" name="password"> 
            </div>

            <button class="btn btn-primary" type="submit"> login</button>
            <a  href="signup.php">forget password</a>
        </form>
    </div>

</body>
</html>