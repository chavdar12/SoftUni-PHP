<?php include '../includes/header.php'; ?>
    <h2>Update Provider</h2>

<?php
include '../db/config.php';

// Get the list of providers
$query = "SELECT * FROM companyinfo";
$result = $dbConn->query($query);

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $contact = $_POST['contact'];

    $update_query = "UPDATE companyinfo SET companycontact = '$contact' WHERE id = $id";
    if ($dbConn->query($update_query)) {
        echo "<p style='text-align:center; color:green;'>Contact updated successfully!</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Error: " . $dbConn->error . "</p>";
    }
}
?>

    <form method="post" action="">
        <label for="id">Select Provider:</label>
        <select name="id" required>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['companyname']}</option>";
            }
            ?>
        </select>
        <label for="contact">New Contact:</label>
        <input id="contact" type="text" name="contact" required>
        <input type="submit" name="update" value="Update">
    </form>

<?php include '../includes/footer.php'; ?>