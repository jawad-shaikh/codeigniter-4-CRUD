<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h3>EDIT USER!!!</h3>

        <div class="row">
            <form action="/edituser/<?= $users->id ?>" method="POST">
                <input type="text" name="username" value="<?= $users->username ?>" placeholder="username" class="form-control col-md-3">
                <input type="email" name="email" value="<?= $users->email ?>" placeholder="email" class="form-control my-3 col-md-3">
                <input type="text" name="password" value="<?= $users->password ?>" placeholder="password" class="form-control my-3 col-md-3">

                <input type="submit" value="update" class="btn btn-primary col">
            </form>
        </div>
    </div>
</body>

</html>