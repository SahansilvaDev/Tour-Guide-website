<?php
include '../login/db_conn.php'; // Include the database connection outside the conditional block

if (isset($_GET['location'])) {
    
    $selectedTable = $_GET['location'];

   
    $allowedTables = array('colombo', 'gampha', 'kaluthara'); 

    if (in_array($selectedTable, $allowedTables)) {
        
        $sql = "SELECT * FROM $selectedTable";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn)); 
        }

       
        while ($row = mysqli_fetch_assoc($result)) {
            
      $name = $row['name'];
        }
    } else {
        
        echo "Invalid table name: $selectedTable";
    }
} else {

    echo 'No location parameter found in the URL.';
}

?>

<?php echo $name; ?>


