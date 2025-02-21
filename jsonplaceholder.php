<?php
// JSONPlaceholder API endpoint
$url = "https://jsonplaceholder.typicode.com/posts/1";

// Fetch data using file_get_contents
$response = file_get_contents($url);

// Decode JSON response
$data = json_decode($response, true);

// Print the raw response
echo "<pre>" . $response . "</pre>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

// Display the output


echo "<b>USER ID:</b> " . $data['userId']. "<br/>";
echo "<b>TITLE:</b> " . $data['title']. "<br/>";
echo "<b>BODY:</b> " . $data['body']. "<br/>  ";


?>