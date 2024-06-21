<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">



<!-- Header Start -->
<?php

define('TITLE', "Add Book");
include '../assets/layouts/header.php';

?>
<!-- Header End -->


<style>
    /* Custom Scrollbar Start */
    body::-webkit-scrollbar {
        /* width of the entire scrollbar */
        width: 8px;
    }

    body::-webkit-scrollbar-track {
        /* color of the tracking area */
        background: grey;
    }

    body::-webkit-scrollbar-thumb {
        /* color of the scroll thumb */
        background-color: blue;
        /* roundness of the scroll thumb */
        border-radius: 15px;
    }

    /* Custom Scrollbar End */

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>


<!-- Main Heading Block -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-normal text-muted  text-center">Add New Book</h6>
</div>

<!-- Form Start Here -->
<div class="container d-flex flex-row justify-content-center">
    <form action="#" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select">
        <fieldset class="form-group border p-3 mx-3 my-4">
            <div class="container  d-flex flex-wrap flex-row">
                <label class="form-label fw-semibold">Book No.:</label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control form-control-sm w-100 mb-2" type="text" inputmode="numeric" name="book_no" placeholder="Enter Book No. Here" required autofocus>
                </div>
                <label class="form-label fw-semibold">Date:</label>
                <div class="form-group mx-3 align-items-center flex-fill">
                    <input class="form-control form-control-sm w-100 mx-2" type="date" name="current_date" required>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group border p-3 mx-3">
            <div class="container  d-flex flex-wrap flex-row">
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <label class="form-label fs-5 fw-semibold">Book Name:</label>
                    <input class="form-control w-100" type="text" name="mob_no" placeholder="Enter The Name Of Book" required>
                </div>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <label class="form-label fs-5 fw-semibold">Author Name:</label>
                    <input class="form-control w-100" type="text" name="academic_year" placeholder="Enter The Name Of Author" required>
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

<!-- Form End Here -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<!-- Footer Start -->
<?php

include '../assets/layouts/footer.php'
?>
<?php
include('connect.php');
        if(isset($_POST['submit']))
        {
            $Book_No=$_POST['Book No.:'];
            $Date=$_POST['Date:'];
            $Book_Name=$_POST['Book Name:'];
            $Author_Name=$_POST['Author Name:']; 
            $qry="INSERT into add_book values('$Book_No','$Date','Book_Name','$Author_Name')";
            $result=mysqli_query($conn,$qry);
        
        }
      

?>
<!-- Footer End -->