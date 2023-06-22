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

    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
            }
        .card-registration .select-arrow {
            top: 13px;
        }
        .img-fluid{
            max-width: 100%;
            height: 100%;
        }
    </style>
    <title>Register_Form</title>
</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block p-2">
                    <img src="https://images.unsplash.com/photo-1573496547376-81418527a728?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase"> registration</h3>
                    <form action="insertRegister.php" method="POST">
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="fname" id="" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="lname" id="" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="text" name="uname" id="" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Email</label>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="password" name="pass" id="" encrypt="sha1" pattern=".{6,}" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m1">Password</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="password" name="cpass" id="" encrypt="sha1" pattern=".{6,}" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Confirm Password</label>
                          </div>
                        </div>
                      </div>


                      <p  class="mb-5 pb-lg-2" style="color: #393f81;">If you already have an account, <a href="login.php"
                            style="color: #393f81;">just login</a></p>
                            <a href="index.php" style="color: #393f81;">Back</a>

                      <div class="d-flex justify-content-end pt-3">
                        <button type="submit" value="Submit" class="btn btn-dark btn-sm btn-block">Submit</button>
                        
                      </div>
                    </form>
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