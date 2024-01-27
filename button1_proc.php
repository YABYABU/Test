<?php
$id = $_GET["id"];
$fname = $id . ".txt";

// Read the content of the file
$content = file_get_contents($fname);

// If the content is ON or OFF, toggle it
if ($content == "ON") {
    file_put_contents($fname, "OFF");
    echo "OFF";
} elseif ($content == "OFF") {
    file_put_contents($fname, "ON");
    echo "ON";
} else {
    echo "Error: Unable to determine the state.";
}
?>
