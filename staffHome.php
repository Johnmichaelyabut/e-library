
<!-- Return to Home -->
    <div class = "well1 tb3_scroll">
      <table class = "table" stye = "">
        <tr class = 'tbl'>
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
          <tr>
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