<form method="post">

    Enter Day: <input type="number" name="day" required>
    <input type="submit" value="Cal">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $day = $_POST["day"];

    switch ($day) {

        case 1:
            echo "<h3>Monday</h3>";
            break;
        case 2:
            echo "<h3>Thuesday</h3>";
            break;
        case 3:
            echo "<h3>wensday</h3>";
            break;
        case 4:
            echo "<h3>therday</h3>";
            break;
        case 5:
            echo "<h3>Friday</h3>";
            break;
        case 6:
            echo "<h3>Monday</h3>";
            break;

        default:
            echo "<h3>Not valid Number</h3>";
    }

}
?>