<!DOCTYPE html>

<html lang ="en">

    <head>
        <meta charset="UTF-8">
        <Title>Sign Up</Title>
        <link rel="stylesheet" href="https://stackpath.bootstapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>

    <body>
        
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    Register
                </h2>
                <p> Please fill this form out to create an account</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <div>
                        <p>Already have an account? <a href="login.php">Login here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>

</html>