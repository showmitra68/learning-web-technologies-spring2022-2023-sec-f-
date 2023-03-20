<html>
    <body>
        <title>Current Loyalty Program</title>
        <fieldset>
            <legend><h2>View Loyalty Program</h2></legend>
            <table>
                <tr>
                    <td>Points for Referring a Friend:</td>
                    <td><?php echo $pointsReferral; ?></td>
                </tr>
                <tr>
                    <td>Points per 100 Taka Spent:</td>
                    <td><?php echo $pointsSpent; ?></td>
                </tr>
                <tr>
                    <td>Points per Order:</td>
                    <td><?php echo $pointsOrder; ?></td>
                </tr>
            </table>
            <br>
            </form>
        </fieldset>
    </body>
</html>

<?php
$file = fopen("loyaltyProgram.txt", "r") or die("Unable to open file!");
$data = fgets($file);
fclose($file);
$dataArray = explode(",", $data);
$pointsReferral = $dataArray[0];
$pointsSpent = $dataArray[1];
$pointsOrder = $dataArray[2];
?>