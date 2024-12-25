<?php include '../includes/header.php'; ?>
    <h2>Delete Provider</h2>

<?php
include '../db/config.php';

$query = "SELECT * FROM companyinfo";
$result = $dbConn->query($query);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $delete_query = "DELETE FROM companyinfo WHERE id = $id";
    if ($dbConn->query($delete_query)) {
        echo "<p style='text-align:center; color:green;'>Provider deleted successfully!</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Error: " . $dbConn->error . "</p>";
    }
}
?>

    <form method="post" action="">
        <label for="id">Select Provider to Delete:</label>
        <select id="id" name="id" required>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['companyname']}</option>";
            }
            ?>
        </select>
        <input type="submit" name="delete" value="Delete">
    </form>

<?php include '../includes/footer.php'; ?>