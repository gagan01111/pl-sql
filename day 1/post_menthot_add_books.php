<?php
include('connect.php');
        if(isset($_POST['submit']))
        {
            $Book_No=$_POST['Book No.:'];
            $Date=$_POST['Date:'];
            $Book_Name=$_POST['Book Name:'];
            $Author_Name=$_POST['Author Name:']; 
            $qry="INSERT into add_books values('$Book_No','$Date','Book_Name','$Author_Name')";
            $result=mysqli_query($conn,$qry);
            if($result)
            {
                echo '<script>
                        alert("Your data is successfully entered.");
                        window.location.href="../../home/";
                    </script>';
                    
            }
            else
            {
                echo '<script>
                        alert("Your data cannot be inserted.");
                        window.location.href="../../home/"
                    </script>';
            }
        }