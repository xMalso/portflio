<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Homepage - Mr Mohamed Alsowmely</title>
    <link rel="stylesheet" href="CSS/reset.css" type=" text/css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>

<body>

    <!-- Name and degree -->
    <header id="header">

        <h1>
            Mohamed Alsowmely
        </h1>
        <h2>
            Undergraduate Computer Science Student
        </h2>

    </header>

    <!-- login Form -->

    <section id="log__in">

        <form class="login">

            <div class="form__item">
                <label class="form__item--label">Email</label>
                <input class="input" name="user_email" type="email" required></input>
            </div>

            <div class="form__item">
                <label class="form__item--label">Password</label>
                <input class="input" name="user_email" type="password" required></input>
            </div>

            <!-- login Button which directs to main page -->

            <button id="contact__submit" class="form__submit form__submit2">
                <a href="index.php">Login</a>
            </button>

        </form>




    </section>

</body>
</html>