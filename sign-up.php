<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="signup-form">
            <h1>Sign Up</h1>
            <form action="#">
                <div class="input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass">
                </div>
                <div class="input">
                    <label for="conf_pass">Confirm password</label>
                    <input type="password" name="confirm_pass" id="conf_pass">
                </div>
                <div class="input">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>