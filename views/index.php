<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="../action/login.php" method="post" class="border ronuded-2 w-50 mx-auto my-5 p-3">
        <h1 class="text-center text-uppercase dixplay-6">Login</h1>

        <input type="text" name="username" placeholder="USERNAME" class="form-control mb-3"></input>
        
        <input type="text" name="password" placeholder="PASSWORD" class="form-control mb-4"></input>

        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>

        <p class="text-center">
            <a href="register.php" class="text-decoration-none">Create account</a>
        </p>
    </form>
</body>