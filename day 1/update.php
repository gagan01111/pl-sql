
<a href="delete testing.php">Check Form</a> <br/>
<form action="#" methot="GET">
<?php
include('connect.php');
        $ids = $_GET['id']; 
         $Sqry = "SELECT * from add_books where Sr_No={$ids}";
         $Eresult = mysqli_query($conn,$Sqry);
          $rres=mysqli_fetch_array($Eresult);


        if(isset($_GET['submit']))
        {
            $idupdate = $_GET['id']; 

            $Book_No=$_GET['book_no'];
            $Date=$_GET['current_date'];
            $Book_Name=$_GET['book_name'];
            $Author_Name=$_GET['author_name']; 
            $qry="UPDATE add_books set Book_No='$Book_No',DATE='$Date',Book_Name='$Book_Name',Author_Name='$Author_Name' where Sr_No =$idupdate";                                                                                                  
            $result = mysqli_query($conn,$qry);
           
        }

      

?>
<div class="container d-flex flex-row justify-content-center">
    <form  method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select">
<fieldset class="form-group border p-3 mx-3 my-4">
            <div class="container  d-flex flex-wrap flex-row">
                <label class="form-label fw-semibold">Book No</label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control form-control-sm w-100 mb-2" type="text" inputmode="numeric" name="book_no" value="<?php echo $rres['Book_No']?>" placeholder="Enter Book No. Here" required autofocus>
                </div>
                <label class="form-label fw-semibold">Date</label>
                <div class="form-group mx-3 align-items-center flex-fill">
                    <input class="form-control form-control-sm w-100 mx-2"  name="current_date" value=" <?php echo $rres['Date']; ?>" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group border p-3 mx-3">
            <div class="container  d-flex flex-wrap flex-row">
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <label class="form-label fs-5 fw-semibold">Book Name</label>
                    <input class="form-control w-100" type="text" name="book_name" placeholder="Enter The Name Of Book" value=" <?php echo $rres['Book_Name']; ?>" required>
                </div>
                  
                
            
                <div class="form-group mx-2 align-items-center flex-fill">
                    <label class="form-label fs-5 fw-semibold">Author Name</label>
                    <input class="form-control w-100" type="text" name="author_name" placeholder="Enter The Name Of Author" value=" <?php echo $rres['Author_Name']; ?>" required>
                </div>
            </div>
        </fieldset><br>
        <div class="container d-flex justify-content-center">
            <input class="form-control btn btn-danger mx-2 my-4 w-25" type="reset" value="RESET" name="reset">
            <input class="form-control btn btn-success mx-2 my-4 w-25" type="submit" value="UPDATE" name="submit">

        </div>
        <div class="container"></div>
    </form>
</div>
