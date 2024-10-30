<?php
// include "../../login/db_conn.php";

// Pagination settings
$sql2 = "SELECT * FROM u_main_slide";
$result2 = mysqli_query($conn, $sql2);

?>



    <!-- Include CSS and JavaScript libraries -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <!-- Include your custom CSS styles if needed -->
    <style>
      .size_img{
        width:100px;
        height: 100px;
      }

    </style>


</head>
<body>
    <!-- <div class="row">
        <div class="col-lg-12"> -->
            <script>
                $(document).ready(function () {
                    $('#customerTable1').DataTable();
                });
            </script>


                    <div class="table-responsive-sm">
                        <table id="customerTable1" class="table pe-lg-5">
                            <thead>
                                <tr class="table-active">
                                    <th >#</th>
                                    <th >Slide 01</th>
                                    <th >Slide 02</th>
                                    <th >Slide 03</th>
                                    <th >Change Date</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
if ($result2) {
    $i = 1; // Initialize $i variable
    while ($row = $result2->fetch_assoc()) {
        echo '<tr>';
        echo '<td >' . $i++ . '</td>';
        echo '<td ><img src="./img/main_slider_img/' . $row['file1'] . '" class=" size_img" alt="image"></td>';
        echo '<td ><img src="./img/main_slider_img/' . $row['file2'] . '" class="size_img" alt="image"></td>';
        echo '<td ><img src="./img/main_slider_img/' . $row['file3'] . '" class=" size_img" alt="image"></td>';
        echo '<td >' . $row['change_date'] . '</td>';
        echo '<td >';
        echo '<a href="./edit_category.php?id=' . $row['id'] . '"><img src="images/2946209.png" alt="" style="width:25px;height:25px; margin-right:5px;"></a>';
        echo '<a onclick="deleteMsg(' . $row['id'] . ')"><img src="images/9153963.png" alt="" style="width:25px;height:25px;"></a>';
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="6">No records found.</td></tr>';
}
?>
                            </tbody>
                        </table>
                    </div>

        <!-- </div>
    </div> -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap and DataTables JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
