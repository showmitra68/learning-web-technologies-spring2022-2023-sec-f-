<html>
  <head>
    <title>Schedule Management</title>
  </head>
  <body>
    <h1>Schedule Management</h1>
    <p>Welcome to the schedule management page. Here you can view, add, edit, and delete delivery schedules.</p>
    <h2>View Schedule</h2>
    <p>Use the calendar below to select the date you want to view the delivery schedule for:</p>
    <form>
      <input type="date" id="schedule_date" name="schedule_date"><br><br>
      <input type="submit" value="View Schedule">
    </form>
    <h2>Add Schedule</h2>
    <p>Use the form below to add a new delivery schedule:</p>
    <form>
      <label for="schedule_date">Schedule Date:</label>
      <input type="date" id="schedule_date" name="schedule_date"><br><br>
      <label for="schedule_time">Schedule Time:</label>
      <input type="time" id="schedule_time" name="schedule_time"><br><br>
      <label for="delivery_location">Delivery Location:</label>
      <input type="text" id="delivery_location" name="delivery_location"><br><br>
      <input type="submit" value="Add Schedule">
    </form>
    <h2>Edit Schedule</h2>
    <p>Select a schedule from the list below to edit its details:</p>
    <form>
      <select id="schedule_list" name="schedule_list">
        <option value="schedule_1">Schedule 1</option>
        <option value="schedule_2">Schedule 2</option>
        <option value="schedule_3">Schedule 3</option>
      </select><br><br>
      <label for="new_schedule_date">New Schedule Date:</label>
      <input type="date" id="new_schedule_date" name="new_schedule_date"><br><br>
      <label for="new_schedule_time">New Schedule Time:</label>
      <input type="time" id="new_schedule_time" name="new_schedule_time"><br><br>
      <label for="new_delivery_location">New Delivery Location:</label>
      <input type="text" id="new_delivery_location" name="new_delivery_location"><br><br>
      <input type="submit" value="Save Changes">
    </form>
    <h2>Delete Schedule</h2>
    <p>Select a schedule from the list below to delete:</p>
    <form>
      <select id="schedule_list" name="schedule_list">
        <option value="schedule_1">Schedule 1</option>
        <option value="schedule_2">Schedule 2</option>
        <option value="schedule_3">Schedule 3</option>
      </select><br><br>
      <input type="submit" value="Delete Schedule">
  </body>
</html>