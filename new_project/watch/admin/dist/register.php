<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Justrips - login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}
#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
    </head>
    <body class="bg-primary">
    <video autoplay muted loop id="myVideo">
        <source src="rain.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register : 0'Clock</h3></div>
                                    <div class="card-body">
                                        <form action="../code/code.php" name="login" method="post" id="login" >
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Your Name</label>
                                                <input name="u_name" class="form-control py-4" id="" type="text" placeholder="Enter Your Name" minlength="3" maxlength="50" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Your Address</label>
                                                <input name="address" class="form-control py-4" id="" type="text" placeholder="Enter Your Address" minlength="3" maxlength="50" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Mobile Number</label>
                                                <input name="phone" class="form-control py-4" id="" type="number" placeholder="Enter Mobile Number" minlength="10" maxlength="12" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter Email Address" minlength="5" maxlength="50" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input name="u_pwd" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter Password" min="6" max="20" required />
                                                <small></small>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                               
                                                <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                                <a href="../../index.php"  class="btn btn-secondary" >Back to Home</a>
                                                <input type="submit" value="Sign Up" name="btn_register" class="btn btn-primary" />
                                                
                                            </div>
                                        </form><br>
                                        <small></small>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                           <p style="align-content: center;">Facing issue with login ? Please contact developer.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>