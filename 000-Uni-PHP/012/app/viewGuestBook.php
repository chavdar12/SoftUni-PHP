<?php
include '../db/config.php';

$sql = "SELECT * FROM guestbook ORDER BY datetime DESC";
$result = $dbConn->query($sql);
?>
    <h2>Гостна книга</h2>
    <a href="../index.php">Подпиши се в книгата</a><br><br>

<?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <p><strong>Име:</strong> <?php echo htmlspecialchars($row['name']); ?></p>
            <p><strong>Имейл:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
            <p><strong>Коментар:</strong> <?php echo nl2br(htmlspecialchars($row['comment'])); ?></p>
            <p><strong>Дата/Час:</strong> <?php echo $row['datetime']; ?></p>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>Няма записи в гостната книга.</p>
<?php endif; ?>