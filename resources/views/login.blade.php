<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-SIDAK | {{ $title }}</title>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap');"
        rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">
    </head>
    <body >

        <div class="split1 left">
            <nav class="navbar bg-login">
                <div class="container-fluid">
                    <a href="#">
                    <img src="../img/Group 3776.svg" width="400" height="70" class="d-inline-block align-text-top" href="{{ url('login') }}">
                    </a>
                </div>
            </nav>

            <a>
                <img class ="kiri1" src="../img/Group 2.svg" width="475" height="475" style="mt-6"/>
            </a>

        </div>
          
        <div class="split2 right">

            <h3 class="center b-strong">Selamat Datang</h3>

            <div class="container py-5" style="width:600px;">
                {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
                  {{-- <div class="col-12 col-md-8 col-lg-6 col-xl-5"> --}}
                    <div class="card shadow-2-strong" style="border-radius: 0.5rem;">
                      <div class="card-body p-5 text-center">
                        <form action="/login-authenticate" method="POST">
                          @csrf
                          <div class="form-group" style="text-align: left;">
                            <label for="exampleDropdownFormEmail2" style="color: rgb(27, 22, 22);font-weight: 500;">Username</label>
                            <input name="username" type="text" class="form-control" id="exampleDropdownFormEmail2" placeholder="Username" required>
                          </div>
                          <div class="form-group" style="text-align: left;">
                            <label for="exampleDropdownFormPassword2" style="color: rgb(27, 22, 22);font-weight: 500;">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" required>
                          </div>
                          <div class="form-check" style="text-align: left">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">
                              Remember me
                            </label>
                          </div>
                          <button type="submit" class="btn btn-primary" style="padding: 0.5rem 12.5rem; margin-top: 1.5rem;
                          font-weight: 500;">Sign In</button>
                        </form>
            
                        {{-- <hr class="my-4">
            
                        <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                          type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                        <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                          type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> --}}
            
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </body>
</html>
