<?php include '../includes/header.php'; ?>
    <h2>Add Provider</h2>

<?php
include '../db/config.php';

$query = "SELECT * FROM towns";
$result = $dbConn->query($query);

$options = '';
while ($row = $result->fetch_assoc()) {
    $options .= "<option value='{$row['id']}'>{$row['townname']}</option>";
}

if (isset($_POST['submit'])) {
    $firm = $_POST['firm'];
    $bul = $_POST['bul'];
    $town = $_POST['town'];
    $tel = $_POST['tel'];
    $year = $_POST['year'];
    $contact = $_POST['contact'];

    if (!empty($firm) && !empty($bul) && !empty($town) && !empty($tel) && !empty($year) && !empty($contact)) {
        $sql = "INSERT INTO companyinfo (companyname, companynum, townname, companytel, companyyear, companycontact) 
                VALUES ('$firm', '$bul', '$town', '$tel', '$year', '$contact')";
        if ($dbConn->query($sql)) {
            echo "<p style='text-align:center; color:green;'>Provider added successfully!</p>";
        } else {
            echo "<p style='text-align:center; color:red;'>Error: " . $dbConn->error . "</p>";
        }
    } else {
        echo "<p style='text-align:center; color:red;'>Please fill in all the fields.</p>";
    }
}
?>

    <form method="post">
        <label for="firm">Firm:</label>
        <input type="text" id="firm" name="firm" required>
        <label for="bul">Bulstat:</label>
        <input type="text" id="bul" name="bul" required>
        <label for="town">Town:</label>
        <select id="town" name="town" required>
            <option value="">Select Town</option>
            <?php echo $options; ?>
        </select>
        <label for="tel">Phone:</label>
        <input type="text" id="tel" name="tel" required>
        <label for="year">Year of Registration:</label>
        <input type="text" id="year" name="year" required>
        <label for="contact">Contact Person:</label>
        <input type="text" id="contact" name="contact" required>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php include '../includes/footer.php'; ?>