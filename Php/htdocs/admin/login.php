<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/div.css">
    <link rel="stylesheet" href="css/layout.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <meta name="viewport" charset="utf-8" content="width-davice-width, initial-scale=1" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <title>Login</title>
</head>

<body>
    
<section class="vh-100" style="background-color: #3b3c41;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://images.unsplash.com/photo-1573496547376-81418527a728?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; max-width: 100%; height: 100%;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="loginCheck.php" method="POST">
                      <?php if (isset($msg)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $msg; ?>
                            </div>
                        <?php } ?>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Login</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-outline mb-4">
                          <input type="text" name="uname" id="" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Email address</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="pass" id=""class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <!--<button class="btn btn-dark btn-lg btn-block" type="button">Login</button>-->
                            <p>
                                <input type="reset" value="Cancle" class="btn btn-danger  btn-lg btn-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;
                                <input type="submit" value="Submit" class="btn btn-dark btn-lg btn-block">
                            </p>
                        </div>
      
                        <P>
                            <input type="checkbox" name="confirm" id="" placeholder="Remember">Remember
                            &nbsp;&nbsp;&nbsp;&nbsp
                        </P>
                        
                        <p class="" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>
                        <a href="index.php" style="color: #393f81;">Back</a>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>

</html>