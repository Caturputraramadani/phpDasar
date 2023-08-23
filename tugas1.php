<!DOCTYPE html>
<html lang="en">

<body>
    <form method="post">
        <label>bil1</label>
        <input type="number" name="bil1" required>
        <label>bil2</label>
        <input type="number" name="bil2" required>
        <label>bil3</label>
        <input type="number" name="bil3" required>
        <button type="submit">input</button>
    </form>
    <?php
    if ($_POST) {
        $A = $_POST["bil1"];
        $B = $_POST["bil2"];
        $C = $_POST["bil3"];

        if ($A > $B && $A > $C) {
            echo "$A";
        } elseif ($B > $A && $B > $C) {
            echo "$B";
        } else {
            echo "$C";
        }
    }

    ?>

</body>

</html>