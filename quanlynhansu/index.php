<?php
include 'Employee.php';
include 'EmployeeManager.php';
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
        <legend>ADD NEW EMPLOYEE</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">First name:</label>
            <input type="text" id="disabledTextInput" class="form-control" name="firstName" placeholder="First Name">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Last name:</label>
            <input type="text" id="disabledTextInput" class="form-control" name="lastName" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Birthday</label>
            <input type="date" id="disabledTextInput" class="form-control" name="date" placeholder="Birthday">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Address</label>
            <input type="text" id="disabledTextInput" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Job</label>
            <input type="text" id="disabledTextInput" class="form-control" name="job" placeholder="Job">
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="index.php"> <button type="submit" class="btn btn-primary">CANCEL</button></a>
    </fieldset>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $job=$_POST['job'];
    $Employee = new Employee($firstName,$lastName,$date,$address,$job);
    $EmployeeManager=new EmployeeManager();
    $EmployeeManager->add($Employee);
    header('location:TABLE.php');
}
?>
