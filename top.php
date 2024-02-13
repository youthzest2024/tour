
<h2>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Navigation Bar</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .header-top {
        background-color: #f8f9fa; /* Changed to a light gray background */
        padding: 10px 0; /* Added padding for better spacing */
    }

    .navbar-brand img {
        max-height: 100px; /* Adjusted maximum height of the logo */
        width: auto;
    }

    .navbar-nav {
        margin: auto; /* Centering the navbar items */
    }

    .nav-item {
        margin-right: 20px; /* Added margin between navigation items */
    }

    .nav-link {
        color: #343a40; /* Changed link color to dark */
        font-weight: bold; /* Set font weight to bold */
        font-size: 15px /* Set font size to 11px */
    }

    .nav-link:hover {
        color: #007bff; /* Changed link color on hover */
    }

    .navbar-toggler {
        border-color: #007bff; /* Changed toggle button color */
    }
</style>
</head>
<body>

<div class="header-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/1707640150285.png" class="img-responsive" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#section-1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="card.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/loginform.php">Admin Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
</h2>