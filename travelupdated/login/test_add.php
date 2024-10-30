<?php require_once './db_conn.php';?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .submit {
            background-color: blueviolet;
            border: 1px solid blueviolet;
            margin: 10px;
            border-radius: 5px;
            padding: 10px 14px;
        }
    </style>

</head>
<body>
<?php
require_once './db_conn.php';

// Assuming you have established a database connection

// Query to fetch the desired columns from the tables
$sql = "SELECT c.Customer_id, c.email, s.shipping_id, p.id FROM customer AS c JOIN shiping AS s ON c.Customer_id = s.shipping_id JOIN product AS p ON p.Customer_id = c.Customer_id";

// $sql = "SELECT o.*, p.name FROM `order` o JOIN product p ON o.product_id = p.id WHERE o.order_id = '$orderId'";

$result = $conn->query($sql);

// Check if the query executed successfully
if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $customer_id = $row["Customer_id"];
        $email = $row["email"];
        $shipping_id = $row["shipping_id"];
        $product_id = $row["id"];

        // Use the retrieved values as needed

    }
} else {
    echo "No results found.";
}

$conn->close();

?>


<div class="card shadow-sm p-3 mb-5 bg-body rounded" style="width:100%; margin-left:45px;">
    <div class="card-body">
        <h2>Add Order</h2>
        <br>


        <div class="form">
            <form class="" action="./API/insert/test_insert_order.php" method="POST">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Customer ID</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Customer ID"
                           name="customer_Id" value="<?php echo $customer_id; ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Location</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter order location"
                           name="location">
                </div>

                <?php
$availability = ''; // Default value for availability

if (isset($_POST['avl'])) {
    $availability = $_POST['avl']; // Get the selected option value
}
?>

                <!-- HTML form -->
                <label for="formGroupExampleInput2" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="avl">
                    <option value="1" <?php if ($availability == '1') {
    echo 'selected';
}?>>Available
                    </option>
                    <option value="2" <?php if ($availability == '2') {
    echo 'selected';
}?>>Unavailable
                    </option>
                </select>

                <?php
// Process the form submission or perform any other actions here
// For example, you can insert the selected option value into the database

if (isset($_POST['avl'])) {
    $selectedOption = $_POST['avl'];
    // Perform the necessary database insertion or other operations with the selected option value
    echo "Selected option value: " . $selectedOption;
}
?>

                </select><br>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Net Amount</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Net Amount"
                           name="net_amount">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Customer Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Customer Email"
                           name="customer_email"  value="<?php echo $email; ?>">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Order ID</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Order ID"
                           name="order_id">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Shipper ID</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Shipper ID"
                           name="ShipperID" value="<?php echo $shipping_id; ?>" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Product ID</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Product ID"
                           name="product_id" value="<?php echo $product_id; ?>">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Unit Price</label>
                    <input type="price" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your category"
                           name="unit_price">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Unit Price"
                           name="quantity">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Discount</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Discount"
                           name="discount">
                </div>

                <input type="submit" class="submit btn btn-success" value="Submit" name="submit">
            </form>
        </div>
    </div>
    <?php include './footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    -->
    </body>
    </html>
<?php ?>