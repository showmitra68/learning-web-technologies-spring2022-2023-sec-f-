<?php
$file = fopen('events.txt', 'r');
$data = fread($file, filesize('events.txt'));
fclose($file);
?>

<html>
    <body>
        <fieldset>
            <legend><h2>Upcoming Events</h2></legend>
        <pre>
        <?php echo $data; ?>
        </pre>
        </fieldset>
    </body>
</html>