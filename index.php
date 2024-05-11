<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contuct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
    <div class="container">
        <form action="ctrl.php" method="POST">
        <div class="row pt-5">
            <div class="col-md-6 pb-3" >
                <lable for="FullName" >Full Name</lable>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="col-md-6 pb-3" >
                <lable for="Phone" >Phone Number</lable>
                <input class="form-control" type="number" name="number" required>
            </div>
            <div class="col-md-6 pb-3" >
                <lable for="Email" >Email</lable>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="col-md-6 pb-3" >
                <lable for="Subject" >Subject</lable>
                <input class="form-control" type="text" name="subject" required>
            </div>
            <div class="col-md-6 pb-3" >
                <lable for="Massage" >Massage</lable>
                <input class="form-control" type="text" name="massage" required>
            </div>
            <div class="col-md-6 pt-4" >
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>