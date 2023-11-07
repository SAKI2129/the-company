<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>
</head>

<body>
    <?php
    require "../classes/Users.php";

    session_start();
    include "nav.php";

    $user = new User;
    $user_data = $user->getUser($_GET['user_id']);
    ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="../action/edit-user.php" method="post">
                    <h2 class="text-center text-uppercase display-6">Edit User</h2>

                    <input type="hidden" name="user_id" value="<?= $user_data['id']?>">

                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" required value="<?= $user_data['first_name'] ?>"class="form-control mb-2">

                    <label for="last-name" class="form-label">Last name</label>
                    <input type="text" name="last_name" id="last_name" required value="<?= $user_data['last_name'] ?>"class="form-control mb-2">

                    <label for="username" class="form-label fw-bold">Username</label>
                    <input type="text" name="username" id="username" required value="<?= $user_data['username'] ?>"class="form-control mb-3">

                    <button type="submit" class="btn btn-warning me-2">Save</button>
                    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>