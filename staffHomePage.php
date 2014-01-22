<html>
<head>
	<title>E-Librarys</title>
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
                  <div class = "span1 marg0">
                    <img src="img/img1.jpg" class = "pic1">
                    <label class = "staffName"><b>Rochelle Tongol</b></label>
                    <a href="staffLogin.php"><button class = "btn btn-primary btnLogout">Logout</button></a>
                  </div>
                  <div class = "span1" style = "width:50px">
                    <button class = "btn btn-info label1" id = "home">Home</button><br><br>
                    <button class = "btn btn-info label1" id = "request">Request</button><br><br>
                  </div>
                  
                </div>
              </div>
              <div>
                <div class = "row well well1">
                  <h2>Search:</h2><br>
                    <form class="form-search">
                      <div id = "searchContainer">
                        <input type="text" class="input-medium search-query search" placeholder = "Borrower ID Num...">
                        <button type="submit" class="btn btn-success searchbtn"><img src="img/search.png" class = "pic3"></button>
                        <p><center><i>Search for the Borrower Name, Surname or ID No..</i></center></p>
                      </div>
                    </form>                    
                </div>
              </div>
              <div class ='row well well2'>
                <button  class = "btn">Generate Library Report</button>
                <br>
                <button  id = "addbooks" class = "btn btn-info" style = "margin-top:20px">Add Books</button><br>
                <a href = "staffViewBook.php" class = "btn btn-info" style = "margin-top:20px">View Books</a>
              </div>
            </div>
              <div class = "span well marg bg" id = "container">
                <div class = "well1 tb3_scroll">
                  <table class = "table">
                    <tr class = "tbl">
                      <td>ID Number</td>
                      <td>Borrower Name</td>
                      <td>Book Title</td>
                      <td>Classification</td>
                      <td>Date Borrowed<br>MM/DD/YY</td> 
                      <td>Due Date<br>MM/DD/YY</td>
                      <td>Time Lapse<br>HH:MM:SS</td>
                    </tr>
                    <div>
                    <?php for($i = 0; $i <= 10; $i++): ?>                 
                      <tr style = " height: 37px;">
                        <td>0001</td>
                        <td>Juan De la Cruz</td>
                        <td>PhP</td>
                        <td>Circulation</td>
                        <td>01/01/2014</td> 
                        <td>01/03/2014</td>
                        <td>47:59:59</td>
                      </tr>                    
                  <?php endfor?>
                      </div>
                  </table>
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