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


    <!-- name, degree -->

    <header id="header">
        <div class="main__nav">

            <div class="titles">

                <h1>
                    Mohamed Alsowmely
                </h1>
                <h2>
                    Undergraduate Computer Science Student
                </h2>

            </div>

            <!-- link to navigate to login page -->

            <div class="login__link">

                <h2><a href="login(OPEN_FIRST).php">Sign in</a></h2>

            </div>
        </div>

        <!-- Nav link/items -->
        <nav id="nav">
            <a id="stranded-link" href="index.php">About-Myself</a>
            <a id="stranded-link" href="hobbies.php">My-Hobbies</a>
            <a id="stranded-link" href="cv.php">My-CV</a>
            <a id="stranded-link" href="links.php">Links</a>
            <a id="stranded-link" href="blog.php">Blog</a>

            <span> </span>
        </nav>


    </header>

    <!-- login form -->

    <section id="log__in">

        <form class="login">

            <!-- title box -->

            <div class="form__item">
                <label class="form__item--label">Title</label>
                <input class="input" name="title" type="text" required></input>
            </div>

            <!-- message box -->

            <div class="form__item">
                <label class="form__item--label">Message</label>
                <textarea class="input" name="message" type="text" required></textarea>
            </div>

            <!-- buttons to post or clear -->

            <div class="form__options">

                <div class="form__option">
                    <button id="contact__submit" class="form__submit form__submit2">
                        Post
                    </button>
                </div>

                <div class="form__option">
                    <button id="contact__submit" class="form__submit form__submit2">
                        Clear
                    </button>
                </div>

            </div>

        </form>


    </section>

</body>
</html>