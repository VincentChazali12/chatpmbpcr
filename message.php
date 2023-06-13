<?php
// Prepare the input data for prediction
$input_data = [$_POST['text']];

// Convert input data to JSON format
//$input_json = ;
$test1 = "test.py";
// Call the Python script using shell_exec or any other method to perform the prediction using the loaded model
$prediction = shell_exec("python test.py " . escapeshellarg(json_encode($input_data)) . "2>&1");

// Output the prediction
echo  $prediction;


?>