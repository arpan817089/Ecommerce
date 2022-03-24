<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href = "style.css">
</head>
<body>
    <div class = "container">
    <div class = "login-box">
    <div class = "row">
    <div class = "col-md-6 login-left">
        <h2><b>LOGIN</b></h2>
        <hr>
        <form action = "validation.php" method = "post">
            <div class = "form-group">
                <label>USERNAME</label>
                <input type = "text" name = "user" class = "form-control" required>
</div>
<div class = "form-group">
                <label>PASSWORD</label>
                <input type = "password" name = "password" class = "form-control" required>
</div>
<br>
<button type = "submit" class = "btn btn-info button"> LOGIN </button> 
</form>
</div>

<div class = "col-md-6 login-right">
        <h2><b>REGISTER</b></h2>
        <hr>
        <form action = "registration.php" method = "post">
            <div class = "form-group">
                <label>USERNAME</label>
                <input type = "text" name = "user" class = "form-control" required>
</div>
<div class = "form-group">
                <label>PASSWORD</label>
                <input type = "password" name = "password" class = "form-control" required>
</div>
<br>
<button type = "submit" class = "btn btn-info button"> REGISTER </button> 
</form>
</div>
</div>
</div>
</div>
</body>
</html>