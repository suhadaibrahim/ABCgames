<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $selectedObject = $_POST["object"];
  if ($selectedObject == "object1") {
    // Do something if Object 1 is selected
  } elseif ($selectedObject == "object2") {
    // Do something if Object 2 is selected
  } elseif ($selectedObject == "object3") {
    // Do something if Object 3 is selected
  } elseif ($selectedObject == "object4") {
  } else {
    // Do something if none of the options are selected
  }
}
?>
