<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> <!-- import BS 4.6 lepší podpora pro jQuery, ale může se používat pět -->
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <title>PHP 1O1</title>
</head>
<body>
    <section id="leading">
        <div class="columns-container">
            <div class="column-left">
                <div class="forms-container"> 
                    <h2>Login or Registr</h2>
                    <div class="login-wrapper ">
                        <button class="btn btn-primary login-btn">
                        Login
                        </button>
                        <form class="login-form">
                            <div class="form-group">
                                <label for="login-username">Username:</label>
                                <input type="text" class="form-control" id="login-username">
                            </div>
                            <div class="form-group">
                                 <label for="login-password">Password:</label>
                                <input type="password" class="form-control" id="login-password">
                             </div>
                        </form>           
                    </div>
                    <!-- REGISTR_WRAPPER -->
                    <div class="register-wrapper">
                        <button class="btn btn-primary register-btn">
                        Registr
                        </button>
                        <form class="register-form">
                            <div class="form-group">
                                <label for="register-username">Email:</label>
                                <input type="text" class="form-control" id="login-username">
                            </div>
                                
                            <div class="form-group">
                                <label for="register-username">Username:</label>
                                <input type="text" class="form-control" id="login-username">
                            </div>
                            <div class="form-group">
                                <label for="register-password">Password:</label>
                                <input type="password" class="form-control" id="login-password">
                            </div>
                        </form>
                    </div>   
                </div>

                <div class="waves-container">
                    <div class="wawe-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="52 128.405 350 319.6">
                            <path d="M 52 150 c 101 -88 239 130 350 0|0 298 | -350 0" fill="#F3A095"/>
                            </svg>
                        </div>
                        <div class="wave-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="52 128.405 350 319.6">
                            <path d="M 52 150 c 101 -88 239 130 350 0|0 298 | -350 0" fill="#EC7564"/>
                            </svg>
                        </div>
                        <div class="wave-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="52 128.405 350 319.6">
                            <path d="M 52 150 c 101 -88 239 130 350 0|0 298 | -350 0" fill="EF5742"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-right">
               <div class="container">
                <div class="logo-wrapper">
                    <img src="./img/images.png" alt="PHP 1O1">
                </div>
                <h1>Become a web developer</h1>
                <h3>From begginer to intermediate programmer in one course</h3>
                <button class="btn btn-primary btn-showmore">What can i learn?</button>
               </div> 
            </div>
        </div>
    </section>
    <!-- import boostrab funkcí do projecktu -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>