<html>
    <body>
        <fieldset>
            <legend><h2>Event</h2></legend>
            <form method="post">
                <pre>
                Event title    :<input type="text" name="event_title" placeholder ="Enter event">
                Event duration : 
                    Start Time :<input type="date" name="start_time" placeholder ="Enter date">
                    End Time   :<input type="date" name="end_time" placeholder ="Enter date"><br>
              Event Description:<input type="text" name="event_description" placeholder ="Enter description"><br>

                    <button type="submit">Start</button><br>
                    <button><a href="upcomingEvent.php">Upcoming Event</a></button>
                    
                </pre>
            </form>
        </fieldset>
    </body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $eventTitle = $_POST['event_title'];
    $startTime = $_POST['start_time'];
    $endTime = $_POST['end_time'];
    $eventDesc = $_POST['event_description'];
    $file = fopen('events.txt', 'a');

    fwrite($file, "Title: ".$eventTitle."\n");
    fwrite($file, "Start Time: ".$startTime."\n");
    fwrite($file, "End Time: ".$endTime."\n");
    fwrite($file, "Description: ".$eventDesc."\n\n");
    fclose($file);
}
?>