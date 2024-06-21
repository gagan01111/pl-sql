
<div class="container d-flex flex-row justify-content-center">
    <form  method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select">
<fieldset class="form-group border p-3 mx-3 my-4">
            <div class="container  d-flex flex-wrap flex-row">
                <label class="form-label fw-semibold">Book No</label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control form-control-sm w-100 mb-2" type="text" inputmode="numeric" name="book_no" placeholder="Enter Book No. Here" required autofocus>
                </div>
                <label class="form-label fw-semibold">Date</label>
                <div class="form-group mx-3 align-items-center flex-fill">
                    <input class="form-control form-control-sm w-100 mx-2" type="date" name="current_date" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group border p-3 mx-3">
            <div class="container  d-flex flex-wrap flex-row">
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <label class="form-label fs-5 fw-semibold">Book Name</label>
                    <input class="form-control w-100" type="text" name="book_name" placeholder="Enter The Name Of Book" required>
                </div>
                  
                
            
                <div class="form-group mx-2 align-items-center flex-fill">
                    <label class="form-label fs-5 fw-semibold">Author Name</label>
                    <input class="form-control w-100" type="text" name="author_name" placeholder="Enter The Name Of Author" required>
                </div>
            </div>
        </fieldset><br>
        <div class="container d-flex justify-content-center">
            <input class="form-control btn btn-danger mx-2 my-4 w-25" type="reset" value="RESET" name="reset">
            <input class="form-control btn btn-success mx-2 my-4 w-25" type="submit" value="SUBMIT" name="submit">

        </div>
        <div class="container"></div>
    </form>
</div>
<?php
include('connect.php');
        if(isset($_POST['submit']))
        {
            $Book_No=$_POST['book_no'];
            $Date=$_POST['current_date'];
            $Book_Name=$_POST['book_name'];
            $Author_Name=$_POST['author_name']; 
            $qry="INSERT into add_books(Book_No,Date,Book_Name,Author_Name) values('$Book_No','$Date','$Book_Name','$Author_Name')";
            $result=mysqli_query($conn,$qry);
           
           
        }
      

?>