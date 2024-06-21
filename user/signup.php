<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
    <nav>
        <a href="index.php"><img src="assets/images/logo_forgatach-removebg-preview.png" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign Up</h2>
        <form action="script/register.php" method="POST">
            <div class="form-control">
                <input type="text" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="form-control">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-control">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="form-help">
                <div class="remember-me">
                    <input type="checkbox" id="showPassword" name="password">
                    <label for="remmeber-me">Show Password</label>
                </div>
            </div>
            <button type="submit">Sign Up</button>
            <p>Already Join us? <a href="signin.php">Sign In</a></p>
            <div class="form-help"> 
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.getElementById("showPassword").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            this.textContent = "Hide";
        } else {
            passwordField.type = "password";
            this.textContent = "Show";
        }
    });
</script>
</body>
</html>