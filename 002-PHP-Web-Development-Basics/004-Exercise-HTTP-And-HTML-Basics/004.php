<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Lines</title>
</head>
<body>
<main>
    <h1>Sort Your Lines</h1>

    <form method="get">
        <label for="lines">Enter Lines:</label><br/>
        <textarea id="lines" name="lines" rows="10" required>
            <?= isset($_GET['lines']) ? htmlspecialchars($_GET['lines']) : '' ?>
        </textarea><br/>

        <button type="submit">Sort</button>
    </form>

    <?php
    $sortedLines = "";

    if (!empty($_GET['lines'])) {
        $sortedLines = array_map('trim', explode("\n", $_GET['lines']));
        $sortedLines = array_filter($sortedLines);
        sort($sortedLines, SORT_STRING);
        $sortedLines = implode("\n", $sortedLines);
    }

    if ($sortedLines): ?>
        <h2>Sorted Lines:</h2>
        <pre><?= htmlspecialchars($sortedLines) ?></pre>
    <?php endif; ?>
</main>
</body>
</html>