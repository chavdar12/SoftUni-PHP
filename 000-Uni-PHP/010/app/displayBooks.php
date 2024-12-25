<?php
include '../db/create.php';

$books = getBooks();

echo '<table border="7">
        <thead>
            <tr>
                <th>Номер</th>
                <th>Заглавие</th>
                <th>Автор</th>
                <th>Издателство</th>
                <th>Година</th>
            </tr>
        </thead>';

while ($row = $books->fetch_assoc()) {
    echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['title'] . '</td>
            <td>' . $row['author'] . '</td>
            <td>' . $row['publisher'] . '</td>
            <td>' . $row['year'] . '</td>
          </tr>';
}

echo '</table>';