
<html>
<head>
        <title> User Login and Registration </title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action="safe.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" name="login_button"> Login </button>
            </form>
        </div>

    <div class="col-md-6 login-right">
            <h2>Register Here</h2>
            <form action="safe.php" method="POST">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name2" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password2" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="confirmpassword" name="confirmpassword" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="phone" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="dateofbirth" name="dateofbirth" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Social Security Number</label>
                    <input type="ssnumber" name="ssnumber" class="form-control" required>
                </div>
                <button type="submit" name="register_btn" class="btn btn-primary"> Register </button>
            </form>
        </div>

        </div>

</div>
</body>
</html>
