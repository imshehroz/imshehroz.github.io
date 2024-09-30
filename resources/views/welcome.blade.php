<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Record Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

        <div class="flex-navbar">
            <div class="flex-logo">SZABIST</div>
            <div class="flex-navlinks">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">FAQs</a>
                <a href="#">Contact</a>
            </div>
            <div class="flex-login">
            <a href="{{ route('login') }}" class="btn btn-success">Log-in</a>
            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </div>
        </div>

        <div class="header-text">
            <div class="text-content">
                <h3>Welcome to</h3>
                <h1>Record Management System</h1>
                <p>SZABIST University Islamabad</p>
                <a href="{{ route('login') }}">Records</a>
            </div>
        </div>

        <ul class="slides">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>

        <footer>
                <a href="#">Conditions of Use</a> |
                <a href="#">Privacy Notice</a> |
                <a href="#">Consumer Health Data Privacy Disclosure</a> |
                <a href="#">Your Ads Privacy Choices</a>
                <br>
                &copy; 1996-2024, [Szabist-University-Islamabad]. All rights reserved.
        </footer>

</body>
</html>
