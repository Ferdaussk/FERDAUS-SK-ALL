<!DOCTYPE html>
<html lang="en">

<head>
    <title>Select multiple Dates in jQuery DatePicker - Clue Mediator</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dubrox/Multiple-Dates-Picker-for-jQuery-UI@master/jquery-ui.multidatespicker.js"></script>

    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <style>
        input {
            width: 300px;
            padding: 7px;
        }

        .ui-state-highlight {
            border: 0 !important;
        }

        .ui-state-highlight a {
            background: #363636 !important;
            color: #fff !important;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" id="datePick" name="dates[]" multiple="multiple" />
        <input type="submit" value="Submit" />
    </form>

    <script>
        $(document).ready(function () {
            $('#datePick').multiDatesPicker();
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['dates']) && !empty($_POST['dates'])) {
            $selectedDates = $_POST['dates'];
            echo "<h2>Selected Dates:</h2><ul>";
            foreach ($selectedDates as $date) {
                echo "<li>$date</li>";
            }
            echo "</ul>";
        } else {
            echo "<h2>No dates selected.</h2>";
        }
    }
    ?>
</body>

</html>
