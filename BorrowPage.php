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
              <div class = "spantb well marg bg" id = "container">
                <div class = "well well1 tbl_scrol2">
                  <table class = "table">
                    <tr class = 'tbl'>
                      <td>Title</td>
                      <td>Classification</td>
                      <td>Author</td>
                      <td>Availability</td>
                      <td>Categories</td>
                    </tr>
                    <div>
                    <?php for($i = 0; $i <= 10; $i++): ?>                 
                      <tr>
                        <td>PHP</td>
                        <td>Circulation</td>
                        <td>Zend</td>
                        <td>Yes</td>
                        <td>Programming</td> 
                      </tr>
                      <tr>
                        <td>Python</td>
                        <td>Limited</td>
                        <td>Zend</td>
                        <td>Yes</td>
                        <td>Programming</td> 
                      </tr>
                      <tr>
                        <td>Discrete Mathematics</td>
                        <td>Limited</td>
                        <td>Zend</td>
                        <td>No</td>
                        <td>Mathematics</td> 
                      </tr>                     
                  <?php endfor?>
                      </div>
                  </table>
                </div>
                <div class = "row well well1">
                    <div class = "span1 marg5">
                    	<center>
                      <img src="img/img1.jpg" class = "pic1">
                      <label class = "staffName"><b>John Micheal Yabut</b></label>
                      <a href="studentHomePage.php"><button class = "btn btn-primary btnLogoutstudent">Logout</button></a>
                      	</center>
                    </div>
                  <div class = "well1 tbl_scrol3">
                  <table class = "table">
                    <tr class = "tb2">
                      <td>Title</td>
                      <td>Classification</td>
                      <td>Author</td>
                      <td>Categories</td>
                      <td>Confirmation</td>
                    </tr>
                    <div>                
                      <tr>
                        <td>PHP</td>
                        <td>Circulation</td>
                        <td>Zend</td>
                        <td>Programming</td>
                        <td>Waiting</td> 
                      </tr>                   
                      </div>
                  </table>
                </div>
                </div>
              </div>
              <div class = "span3 well marg1 bg">
                <div>
                  <div class = "row well well1">
                    <h3>Search:</h3><br>
                      <form class="form-search">
                        <input type="text" class="input-medium search-query search" placeholder = "Borrower ID Num...">
                        <button type="submit" class="btn btn-success searchbtn"><img src="img/search.png" class = "pic3"></button>
                        <p><center><i>Search for the Title, Author or classification</i></center></p>
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
          </div>
        <!-- End: MAIN CONTENT -->
        <!-- Start: FOOTER -->
        <?php include "footer.php";?>
        <!-- End: FOOTER -->
    <script src="js/jquery.1.10.2.js"></script>
    <script type="text/javascript" src = "js/staff_ajax.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.min.js"></script>
  </div>
</body>
</html>