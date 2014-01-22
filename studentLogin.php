
<!-- Student Login -->

<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-modal.js"></script>
    <script src="js/admin.min.js"></script>

  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <img src="img/logolibrary copy.PNG" class = "pic5">
      <h1 class = "title">E-Library Login</h1>
      <br>
    </div>
    <div class="modal-body">
        <form class="form-search" action = "studentHomePage.php">
          <div class = "inputUsPs">
            <label class ="label3"><b>ID No. :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="text" class = "UsPs" autofocus><br><br>
            <label class ="label3"><b>Username:&nbsp;</b></label><input type="text" class = "UsPs" autofocus><br><br>
            <b><label class = "label3"><b>Password:&nbsp;&nbsp;</b></label></b><input type="text" class = "UsPs">
            <button type = "submit" class = "btn btn-primary btnLogin">Login</button>
          </div>
        </form>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal">Close</button>
    </div>
  </div>