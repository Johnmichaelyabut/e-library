

<!-- StaffAddbook -->

    <div class = "row well well1">
      <center><h1>New Book</h1></center>
    </div>
    <div class = "row well well1" style = "height:470">
      <div class = "span3 add">
        <div class = "row book">Book Title:</div>
        <div class = "row book">Book Author:</div>
        <div class = "row book">Book Classification:</div>
        <div class = "row book">Book Category:</div>
        <div class = "row book">No. of Book(s):</div>
        <div class = "row book">Book Description:</div>
        <div class = "row attach">Attach Cover Photo:</div>
      </div>
      <div class = "span5 pull-left">
        <div class = "row"><input type = "text" class = "bookform" autofocus></div>
        <div class = "row"><input type = "text" class = "bookform" placeholder = 'Author1/Author2/Author3 . . .'></div>
        <div class = "row"><select class = "selectCat-Class"><option>Class1</option><option>Class2</option><option>Class3</option></select></div>
        <div class = "row"><select class = "selectCat-Class"><option>Category1</option><option>Category2</option><option>Category3</option></select></div>
        <div class = "row"><input type = "text" class = "bookform" ></div>
        <div class = "row"><textarea type = "text" rows = "5" style = 'width: 300px;'></textarea></div>
        <div class = "row"><img src="img/img1.jpg" style = "height: 47px; width: 60px;">&nbsp;&nbsp;&nbsp;
        <button onclick = "document.getElementById('fileId').click();" class = "btn btn-info">Attach</button>
        <input type = 'file' id = 'fileId' style = 'visibility: hidden;'/></div>
        <div class = "row pull-right">
          <button class = "btn btn-success btnAdd">Add</button>
          <button class = "btn btnAdd">Cancel</button>
        </div>
      </div>
    </div>               
             