
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="https://
cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
    <body>
        <div class="main-div">
           <h1>List of books</h1>
               <div class="center-div">
              <div class="table-responsive">
                <table>
                   <thead>
                      <tr>
                        <th>Srno</th>
                        <th>Book_no</th>
                        <th>Date</th>
                        <th>Bookname</th>
                        <th>AuthorName</th>
                        <th>operation</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php
                        include('connect.php');
                        $qry = "SELECT * from add_books";
                         $result = mysqli_query($conn,$qry);
                    
                         while($res=mysqli_fetch_array($result)){
                            ?>
                            <td><?php echo $res['Sr_No']; ?> </td>
                            <td><?php echo $res['Book_No']; ?></td>
                            <td><?php echo $res['Date']; ?></td>
                            <td><?php echo $res['Book_Name']; ?></td>
                            <td><?php echo $res['Author_Name']; ?></td>
                            <td><a href="update.php?id=<?php echo $res['Sr_No'];?>" data-toggle="tooltip" data-placement="top"
                              title="update"><i class="fa-solid fa-pen-to-square"></i></a></td>
                           <td><a href="#" data-toggle="tooltip" data-placement="top"
                              title="delete"><i class="fa-solid fa-trash"></i></a></td>
                         </tr>
                           <?php
                                }
                             ?>
                   </tbody>
              </table>
        </div>

      </body>
</html>






