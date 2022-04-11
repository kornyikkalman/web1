<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <title>Peace Players</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat|Ubuntu" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="public/css/custom.css">
   </head>
   <body>
      <main>
         <?php
            include_once 'header.php';
            ?>
         <section class="vh-100 center-form">
            <div class="mask d-flex flex-column align-items-center justify-content-center h-100 gradient-custom-3">
               <div class="container">
                  <div class="row justify-content-center align-items-center vh-100">
                     <div class="col-12 col-md-4 col-lg-7 col-xl-6 vh-100">
                        <div class="card mt-5 mb-5" style="border-radius: 15px;">
                           <div class="card-body p-4">
                              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                              <form>
                                 <div class="form-outline mb-2">
                                    <input type="text" id="----" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Username</label>
                                 </div>
                                 <div class="form-outline mb-2">
                                    <input type="email" id="----" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Email</label>
                                 </div>
                                 <div class="form-outline mb-2">
                                    <input type="password" id="----" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                 </div>
                                 <div class="form-outline mb-2">
                                    <input type="password" id="----" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cdg">Confirm Password</label>
                                 </div>
                                 <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                 </div>
                                 <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <?php
            include_once 'footer.php';
      ?>
   </body>
</html>