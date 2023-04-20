<?php
    // Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'hospital');

    // Get the category parameter from the AJAX request
    $category = $_GET['category'];

    // Query the database for the list of doctors in the selected category
    $query = "SELECT name FROM doctorlog WHERE specialization = '$category'";
    $result = mysqli_query($conn, $query);

    // Build an array of doctor names
    $doctors = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $doctors[] = $row['name'];
    }

    // Return the array as a JSON string
    echo json_encode($doctors);
?>
