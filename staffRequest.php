
<!-- Staff Request -->
    <div class = "row well well1">
      <center><h1>Request</h1></center>
    </div>
    <div class = "row well well1"  style = "margin-top:10px;height:460">
      <table class = "table" style = "min-height: 330px; margin-top:20px;">
        <tr class = 'tbl'>
          <td>ID Number</td>
          <td>Borrower's Name</td>
          <td>Book Title</td>
          <td>Classification</td>
          <td>Date<br>MM/DD/YY</td>
          <td>Action</td>
        </tr>
        <div>
        <?php for($i = 0; $i <= 5; $i++): ?>                 
          <tr>
            <td>0001</td>
            <td>Juan De la Cruz</td>
            <td>PhP</td>
            <td>Circulation</td>
            <td>01/01/2014</td> 
            <td><button class = "btn btn-primary" style = "width:80px;">Confirm</button>
                <button class = "btn btn-warning" style = "width:80px;">Reject</button>
            </td>
          </tr>                    
      <?php endfor?>
          </div>
      </table>
    </div>  