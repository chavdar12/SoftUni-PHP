<?php
include 'config.php';

$tables = [];
$query = $conn->query("SHOW TABLES");
while ($row = $query->fetch_row()) {
    $tables[] = $row[0];
}

$backupSql = '';

foreach ($tables as $table) {
    $query = $conn->query("SHOW CREATE TABLE $table");
    $row = $query->fetch_row();
    $backupSql .= "\n\n" . $row[1] . ";\n\n";

    $query = $conn->query("SELECT * FROM $table");
    while ($row = $query->fetch_assoc()) {
        $columns = array_keys($row);
        $values = array_map(function ($value) use ($conn) {
            return $value === null ? 'NULL' : "'" . $conn->real_escape_string($value) . "'";
        }, array_values($row));
        $backupSql .= "INSERT INTO $table (" . implode(',', $columns) . ") VALUES (" . implode(',', $values) . ");\n";
    }
    $backupSql .= "\n";
}

$backupFile = $dbname . "_backup_" . date('Y-m-d_H-i-s') . ".sql";
if (file_put_contents($backupFile, $backupSql)) {
    echo "Backup successfully created: $backupFile";
} else {
    echo "Error creating backup.";
}

$conn->close();