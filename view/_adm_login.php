<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin auth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web/css/style.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Admin authorization page</h1>
    <div class="form-wrap">
        <form action="adm-login-action.php" method="post">
            <div class="form-group">
                <label for="login">Login</label>
                <input name="login" type="login" class="form-control" id="login" placeholder="Login">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="pass" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</body>
</html>