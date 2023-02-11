<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $text_input = $_POST["text_input"];

  // specify the file path and name
  $file = "text_file.txt";

  // open the file for writing, or create it if it doesn't exist
  $file_handle = fopen($file, "a");

  // write the text input to the file
  fwrite($file_handle, $text_input . "\n");

  // close the file
  fclose($file_handle);

  echo "your robox will arrive to you in few minutes ...";
}

?>
