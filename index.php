<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
// if (isset($_SESSION['email'])) {
//     if(!strcmp($_SESSION['email'],"premsharma2299@gmail.com"))
//     {
//         header('location: products1.php');
//     }
//     else {
//         header('location: products.php');
//     }
// }

?>
<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <title></title>
   <style>
      body {
       font-family: "Lato", sans-serif;
    }

    .main-head{
       height: 150px;
       background: #FFF;

    }

    .sidenav {
       height: 100%;
       background-color: #38668E;
       overflow-x: hidden;
       padding-top: 20px;
    }


    .main {
       padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
       .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
       .login-form{
        margin-top: 10%;
     }

     .register-form{
        margin-top: 10%;
     }
  }

  @media screen and (min-width: 768px){
    .main{
     margin-left: 40%; 
  }

  .sidenav{
     width: 40%;
     position: fixed;
     z-index: 1;
     top: 0;
     left: 0;
  }

  .login-form{
     margin-top: 80%;
  }

  .register-form{
     margin-top: 20%;
  }
}

.login-main-text{
 margin-top: 20%;
 padding: 60px;
 color: #fff;
}

.login-main-text h2{
 font-weight: 300;
}

.btn-black{
 background-color: #000 !important;
 color: #fff;
}

.btn-custom{
   background-color: #38668E;
   color: #fff;
}

.btn-admin {
   background-color: #fff ;
   color: #38668E;
}
</style>
</head>
<body>
   <div class="sidenav">
      <div class="login-main-text">
         <h2>Application<br> Login Page</h2>
         <p>Login or register from here to access.</p>
         <a href="#" class="btn btn-admin">Admin Login</a>
      </div>
   </div>
   <div class="main">
      <div class="row">
      
         <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form action="login_submit.php" method="POST">
               <div class="form-group">
                  <label>Email</label>
                  <input type="text" name = "email" class="form-control" placeholder="Email">
               </div>
               <br>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name = "password" class="form-control" placeholder="Password">
               </div>
               <br>
               <button type="submit" class="btn btn-custom">Login</button>
               
            </form>
            <form action="signup.php" method="POST">
            <button type="submit" class="btn btn-custom">Register</button>
            </form>
         </div>
      </div>
      </div>
   </div>

</body>
</html>

