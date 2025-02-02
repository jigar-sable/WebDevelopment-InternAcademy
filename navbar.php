<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
    <!-- google font cnd link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="./Css/style.css">

</head>

<body>
    <!-- header section starts  -->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="#" class="logo"><i class="fas fa-user-graduate">WebDevp</i></a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="courses.php">course</a></li>
          
                <li><a href="contact.php">contact</a></li>
            </ul>

        </nav>
        <div id="login" class="fas fa-user-circle">

        </div>
    </header>
    <!-- header section ends  -->
    <!-- login form -->
    <div class="login-form">
        <form action="">
            <h2>Login</h2>
            <input type="email" placeholder="username" class="box">
            <input type="password" placeholder="password" class="box">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="#">register now</a></p>
            <input type="submit" class="btn" value="login">
            <i class="fas fa-times"></i>
        </form>
    </div>
</body>
</html>