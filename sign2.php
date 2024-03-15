<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sign1.css">
    <title>signin-signup</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="password">
                </div>
                <input type="submit" value="Login" class="btn" id="showPopupBtn" onclick="hello()">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn" id="showPopupBtn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>WELCOME BACK!</h3>
                    <p>to keep connected with us <br>enter your personal details</p>
                    <button class="btn" id="showPopupBtn">Sign in</button>
                </div>
                <img src="#" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>HELLO, FRIENDS!</h3>
                    <p>enter your personal details <br> and start your journey with us.</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="#" alt="" class="image">
            </div>
        </div>
    </div>
    <div id="popup-container">
        <form action="index2.php" method="POST">
            <div><h4>Enter Dog Breed You prefer:</h4></div>
            <div><h5>min(4)</h5></div>
            <div>
                <label>German Shephered</label>
                <input type="checkbox" name="name[]" placeholder="Enter Breed Name:" value="German Shepherd" autocomplete="off"><br>
                <label>Pug</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Pug" autocomplete="off"><br>
                <label>Pitbull</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Pitbull" autocomplete="off"><br>
                <label>Labrador</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Labrador" autocomplete="off"><br>
                <label>Golden Retriever</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Golden Retriever" autocomplete="off"><br>
                <label>Beagle</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Beagle" autocomplete="off"><br>
                <label>Pomeranian</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Pomeranian" autocomplete="off"><br>
                <label>Rottweiler</label>
                <input type="checkbox" name="name[]" placeholder="Enter Your name:" value="Rottweiler" autocomplete="off"><br>
            </div>
            <a href="index2.php"><button type="submit" class="btn btn-primary" name=add_to_form>Submit</button></a>
        </form>
        </div>
    <div id="overlay" class="overlay"></div>
    <script src="signup.js"></script>
</body>
</html>