<div class="container">
   <div class="row jarakatas justify-content-center">
      <div class="col-md-6">
         <div class="card">
            <img src="https://i.dailymail.co.uk/i/pix/2012/11/08/article-2229776-15EA3162000005DC-226_634x197.jpg" class="card-img-top align-self-center" alt="...">
            <div class="card-body">
               <h5 class="card-title">Register <b class="text-info">Account</b> <i class="fa fa-edit text-info"></i></h5>
               <hr class="mt-0 mb-2 text-muted">
               <form method="post" action="?page=act-register">
                  <?php
                  if (isset($_SESSION['register_success'])) { ?>
                     <div class="alert alert-success" role="alert">
                        <i class="fa fa-check-circle"></i> <?= $_SESSION['register_success'];
                                                            unset($_SESSION['register_success']);  ?>
                     </div>
                  <?php
                  } else if (isset($_SESSION['register_failed'])) { ?>
                     <div class="alert alert-danger" role="alert">
                        <i class="fa fa-info-circle"></i> <?= $_SESSION['register_failed'];
                                                            unset($_SESSION['register_failed']); ?>
                     </div>
                  <?php
                  } else if (isset($_SESSION['register_cek_failed'])) { ?>
                     <div class="alert alert-danger" role="alert">
                        <i class="fa fa-info-circle"></i> <?= $_SESSION['register_cek_failed'];
                                                            unset($_SESSION['register_cek_failed']);  ?>
                     </div>
                  <?php
                  }
                  ?>

                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp" required>
                  </div>
                  <div class="form-group">
                     <label for="email">Email address</label>
                     <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" name="password" id="password" required>
                  </div>
                  <div class="form-group form-check">
                     <div class="row">
                        <div class="col-md-7">
                           <p class="font-weight-bold display-4">
                              <span class="text-warning text-shadow"><?= $_SESSION['angka1'] = rand(1, 30) ?></span> <span class="text-muted">+</span> <span class="text-default text-shadow"><?= $_SESSION['angka2'] = rand(1, 30) ?></span> =
                           </p>
                        </div>
                        <div class="col-md-5 mt-2 ml-0">
                           <input type="text" class="form-control form-control-lg" name="cek">
                        </div>
                     </div>
                  </div>
                  <button type="submit" name="submit-register" class="btn btn-primary shadow-lg"><i class="fa fa-edit"></i> Register</button>
               </form>
            </div>
         </div>

      </div>
   </div>
</div>