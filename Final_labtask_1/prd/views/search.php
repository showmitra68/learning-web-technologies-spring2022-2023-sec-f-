<?php 
    session_start();
    if(!isset($_SESSION['role'])){

?>
<html>
    <body>
          <form>
            <fieldset>
                <legend><h2>Search</h2></legend>
                <ul>
                    <li><a href="search_specification.php">Search Specification</a></li>
                    <li><a href="search_feature.php">Search Feature</a></li>
                    <li><a href="search_application.php">Search Application</a></li>
                </ul>
                <a href="logout.php">Logout</a>
            </fieldset>
          </form>
    </body>
</html>
<?php 
    }else
    {
        header('location: ../views/login.php');
    }
?>