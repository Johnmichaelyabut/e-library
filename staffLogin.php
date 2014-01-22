<html>
<head>
	<title>E-Library</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css">
	<link type = "text/css" rel = "stylesheet" href = "css/global.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body>
  <div class = "container-fixed-top">
      <?php include "Banner.php";?>
        <div class="content">
          <div class="container Well">
            <div class="page-header">
              <h1>Login to E-Library</h1>
            </div>
            <div class="row">
              <div class="span6 offset3">
                <h4 style = "padding: 20px;text-align: center;background-color: #EEEEEC;border: 1px solid #DDD;"><i class="icon-lock"></i>  E-Library  </h4>
                <div style = "padding: 30px 0 20px 0;border: 1px solid #DDD;">
                  <div style = "text-align:center">
                    <form class="form-horizontal form-signin-signup" action = "staffHomePage.php">
                      <input type="text" name="email" placeholder="Email" style = "width:70%;height:30px;margin-bottom: 15px;">
                      <input type="password" name="password" placeholder="Password" style = "width:70%;height:30px;margin-bottom: 15px;">
                      <div style="width: 85%;">
                        <div class="clearfix"></div>
                      </div>
                      <input type="submit" value="Log-in" class="btn btn-primary btn-large" style = "width:40%">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End: MAIN CONTENT -->
        <!-- Start: FOOTER -->
        <?php include "footer2.php";?>
        <!-- End: FOOTER -->
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.min.js"></script>
  </div>
</body>
</html>