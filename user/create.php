<?php
include_once'Add.php';
include_once'user.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<form method="post" action="">
    <fieldset >
        <legend>CREATE NEW USER</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Name Input</label>
            <input type="text" id="disabledTextInput" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Email Input</label>
            <input type="text" id="disabledTextInput" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Role Input</label>
            <input type="text" id="disabledTextInput" class="form-control" name="role" placeholder="Role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="index.php"> <button type="submit" class="btn btn-primary">Cancel</button></a>
    </fieldset>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $user=new user($role,$name,$email);
    addUser($user);
    header('location:index.php');
}
?>