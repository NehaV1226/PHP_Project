<?php
session_start();
include 'db.php'; // Ensure you have database connection

$message = ""; // Variable to store success or error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Insert query
    $query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";

    if (mysqli_query($conn, $query)) {
        $message = "Data Inserted Successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>

    <h2>Insert Product</h2>

    <form method="POST" action="">
        <label>Product Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Price:</label>
        <input type="number" name="price" required>
        <br>
        <button type="submit">Insert</button>
    </form>

    <!-- Display success/error message -->
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

</body>

</html>