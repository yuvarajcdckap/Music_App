<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <div role="alert">
                                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                    Oops ! Something went wrong
                                </div>
                                <!-- <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            </div> -->
                            </div>

                            <?php
                            if (isset($_SESSION["invaild details'"])) {
                            ?>
                                <span><?php echo $_SESSION["invaild details'"] ?></span>
                                <?php
                                unset($_SESSION["invaild details'"]);
                            } else {
                                if (isset($_SESSION["success"])) {
                                ?>
                                    <span><?php echo $_SESSION["success"]; ?></span>
                            <?php
                                    unset($_SESSION["success"]);
                                }
                            }
                            ?>

                            <form action="/login" method="post">

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="username" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid username " name="user_name" require />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" require />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#!" class="text-body">Forgot password?</a>
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submitBtn">Login</button>
                                </div>
                            </form>
                            <div class="guestDiv">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submitBtn"><a class="guestBtn" href="/normalUserLogin">Guest User</a></button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>