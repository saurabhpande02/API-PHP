<?php
// JSONPlaceholder API endpoint
$url = "https://jsonplaceholder.typicode.com/posts/";

// Fetch data using file_get_contents
$response = file_get_contents($url);

// Decode JSON response
$data = json_decode($response, true);

// Check if data is retrieved
if (!$data) {
    echo "Failed to fetch data.";
    exit;
}

// Display the output in a table
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Title</th>
        <th>Body</th>
      </tr>";

// Loop through the first 10 posts and display them in table rows
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    echo "<td>" . $data[$i]['id'] . "</td>";
    echo "<td>" . $data[$i]['userId'] . "</td>";
    echo "<td>" . htmlspecialchars($data[$i]['title']) . "</td>";
    echo "<td>" . htmlspecialchars($data[$i]['body']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
