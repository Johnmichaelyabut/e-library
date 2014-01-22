<html>
<head>
  <title>E-Library</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css">
  <link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
  <link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body>
  <div class = "container-fixed-top bder">
      <?php include "Banner.php";?>
          <div class = "container-fluid">
            <div class = "span3 well marg1 bg">
              <div>
                <div class = "row well well1">
                  <h3>Search:</h3><br>
                    <form action = "studentHomePage.php">
                      <input type="text" placeholder = "Book Title..." class = "input-searchBook">
                      <input type="text" placeholder = "Book Author..." class = "input-searchBook">
                      <input type="text" placeholder = "Book Category..." class = "input-searchBook">
                      <button type="submit" class="btn btn-success searchbtn">Search&nbsp;&nbsp;<img src="img/search.png" class = "pic3"></button>
                    </form>                     
                </div>
              </div>
              <div class ='row well well1'>
                <h3>Categories</h3>
                <hr>
                <div class = "categories well">
                  <?php for($i = 1; $i <= 10; $i++):?>
                    <a href='#'>Mathematics</a><br>
                    <a href='#'>Fiction</a><br>
                    <a href='#'>Science</a><br>
                    <a href='#'>Programming</a><br>
                    <a href='#'>Filipino</a><br>
                  <?php endfor?>
                </div>
              </div>
            </div>
              <div class = "spantb well marg bg" id = "container">
                <div class = "container-fluid well1">
                  <div class = "span5">
                    <img src="img/java.jpg" class = "pic4">
                  </div>
                  <div class = "span4">
                    <h3 style = "margin-top:8
                    0px">Title:</h3>
                    <label class = "label2">Javascript Programming Language</label>
                    <h3>Author:</h3>
                      <label class = "label2">Ray Toal</label>
                      <label class = "label2">John David N. Dionisio</label>
                    <h3>Classificaion:</h3>
                      <label class = "label2">Limited</label>
                    <h3>No. of days to be Borrowed:</h3>
                      <label class = "label2">2 Days</label>
                    <h3>Category:</h3>
                      <label class = "label2">Programming</label>
                    <div class="bs-docs-example" style="padding-bottom: 24px;margin-top:60px">
                      <a data-toggle="modal" href="#myModal" class="btn btn-primary btnReserve">Reserve</a>
                    </div>                     
                    <?php include "studentLogin.php";?>
                  </div>                  
                </div>
              </div>
          </div>
        <!-- End: MAIN CONTENT -->
        <!-- Start: FOOTER -->
        <?php include "footer.php";?>
        <!-- End: FOOTER -->
    <script src="js/jquery.1.10.2.js"></script>
    <script type="text/javascript" src = "js/student_ajax.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </div>
</body>
</html>