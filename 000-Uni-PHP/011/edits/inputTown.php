<?php include '../includes/header.php'; ?>
    <h2>Add Town</h2>
    <form method="post" action="">
        <label for="town">Town:</label>
        <input type="text" id="town" name="town">
        <input type="submit" name="submit" value="Submit">
    </form>
<?php
include '../db/config.php';

if (isset($_POST['submit'])) {
    $town = $_POST['town'];
    if (!empty($town)) {
        $sql = "INSERT INTO towns (townname) VALUES ('$town')";
        if ($dbConn->query($sql)) {
            echo "<p style='text-align:center; color:green;'>Town added successfully!</p>";
        } else {
            echo "<p style='text-align:center; color:red;'>Error: " . $dbConn->error . "</p>";
        }
    } else {
        echo "<p style='text-align:center; color:red;'>Please fill in the field.</p>";
    }
}

$result = $dbConn->query('SELECT * FROM towns');
if ($result->num_rows > 0) {
    echo '<table><thead><tr><th>ID</th><th>Town</th></tr></thead>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row['id'] . '</td><td>' . $row['townname'] . '</td></tr>';
    }
    echo '</table>';
}
?>
<?php include '../includes/footer.php'; ?>