
<!-- Pending Before this UI creation after books data is entered and A table is created name -> view_book -->
<?php
include('connect.php');
$qry0 = "SELECT * from books";
$result0 = mysqli_query($conn, $qry0);
//Table1-> Table Here -----------
echo "<div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2'>";
echo "<table class='table'>";
echo "<thead>
            <tr>
            <th scope='col'>Book No.</th>
            <th scope='col'>Book Name</th>
            <th scope='col'>Author Name</th>
            <th scope='col'>Publisher Name</th>
            <th scope='col'>Date Added</th>
            <th scope='col'>Action</th>
            <th scope='col'></th>
            
            </tr>
        </thead>";
// $i=1;
while ($r0 = mysqli_fetch_array($result0)) {

    echo "<tr><td>$r0[0]</td>";
    echo "<td>$r0[1]</td>";
    echo "<td>$r0[2]</td>";
    echo "<td>$r0[3]</td>";
    echo "<td><a href='#' style='text-decoration: none;'>Edit</a></td>";
    echo "<td><a href='#' style='text-decoration: none;'>Delete</td></tr>";
    
    // $i++;
}
echo "</table>";
echo "</div>";
//Table1-> Total Books End Here -----------
?>

