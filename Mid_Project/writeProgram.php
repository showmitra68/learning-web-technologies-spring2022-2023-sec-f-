<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pointsReferral = $_POST["pointsReferral"];
    $pointsSpent = $_POST["pointsSpent"];
    $pointsOrder = $_POST["pointsOrder"];
    $file = fopen("loyaltyProgram.txt", "w") or die("Unable to open file!");
    fwrite($file, "$pointsReferral,$pointsSpent,$pointsOrder");
    fclose($file);

    header("Location: currentProgram.php");
    exit();
}
?>
