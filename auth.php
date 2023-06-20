<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Website With Login & Registration | Codehal</title>
        <link rel="stylesheet" href="style.css">

    </head>

     <body>

         <header>
             <h2 class="Website">Website</h2>
             <nav class="navigation">
                 
                 <button class="btnLogin-popup">Login</button>
             </nav>
         </header>

  
               
         <div class="wrapper">
             <span class="icon-close"><ion-icon name="close"></ion-icon></span>

             <div class="form-box Login">
                 <h2>Login</h2>
               
                 <form action="signin.php" method="POST">
                     <div class="input-box">
                         <span class="icon"><ion-icon name="mail"></ion-icon></span>
                         <input type="text" name="email" id="email" required>
                         <label>Email</label>
                     </div>
                     <div class="input-box">
                         <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                         <input type="password" name="password" id="password" required>
                         <label>Password</label>
                     </div>
                     <div class="remember-forgot">
                         <label><input type="checkbox">Remember me</label>
                         <a href="#">Forgot Password?</a>
                     </div>
                     <button type="submit" class="btn" id="loginBtn" >Login</button>
                     <!-- End of Form -->
                 </form>
                
                 <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>

             </div>

             <div class="form-box register">
                 <h2>Registration</h2>
                 <form action="POST">

                     <div class="input-box">
                         <span class="icon"><ion-icon name="person"></ion-icon></span>
                         <input type="text" required>
                         <label>Username</label>
                     </div>

                     <div class="input-box">
                         <span class="icon"><ion-icon name="mail"></ion-icon></span>
                         <input type="email" required>
                         <label>Email</label>
                     </div>

                     <div class="input-box">
                         <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                         <input type="password" required>
                         <label>Password</label>
                     </div>
                     <div class="remember-forgot">
                         <label><input type="checkbox">agree to the terms & conditions</label>

                     </div>
                     <button type="submit" class="btn">Register</button>
                     <div class="login-register">
                         <p>Already have an account? <a href="#" class="Login-link">Login</a></p>
                     </div>
                 </form>
             </div>

                

         </div>
         <script src="script.js"></script>
         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
         <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     </body>
</html>