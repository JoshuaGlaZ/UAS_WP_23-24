<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS 1</title>
    <style type="text/css">
        th {
            border: 1px solid darkblue;
            background-color: darkblue;
            color: white;
        }

        td {
            border: 1px solid black;
        }

        .blank {
            border: 1px solid grey;
            background-color: grey;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            <th>Sun</th>
        </tr>


<?php
        $firstday = $_GET["firstday"];

        $days = 30;

        $blanks = ($firstday - 1);

        $day = 1;

        for ($week = 0; $day <= $days; $week++) {
            echo "<tr>";
            for ($i = 1; $i <= 7; $i++) {
                if ($week == 0 && $i <= $blanks) {
                    echo "<td class='blank'></td>"; # ISI BLANK BUAT HARI SEBELUM HARI PERTAMA
                } else {
                    if ($day <= $days) {
                        echo "<td>" . $day . "</td>";
                    } else {
                        echo "<td class='blank'></td>"; # ISI BLANK BUAT HARI SETELAH HARI KE-30
                    }
                    $day++;
                }
            }
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>