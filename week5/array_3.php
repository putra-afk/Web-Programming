<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h2> Multidimensional Array </h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array("Avengers: Invinssy War", 2008, 8.7),
            array("The Avengers", 2012, 8.1),
            array("Guardians of the Galaxy", 2014, 8.2),
            array("Iron Man", 2008, 7.9)
        );
        echo "<tr>";
        echo "<td>" . $movie[0][0] . "</td>";
        echo "<td>" . $movie[0][1] . "</td>";
        echo "<td>" . $movie[0][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[1][0] . "</td>";
        echo "<td>" . $movie[2][1] . "</td>";
        echo "<td>" . $movie[3][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[2][0] . "</td>";
        echo "<td>" . $movie[2][1] . "</td>";
        echo "<td>" . $movie[2][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[3][0] . "</td>";
        echo "<td>" . $movie[3][1] . "</td>";
        echo "<td>" . $movie[3][2] . "</td>";
        echo "</tr>";
        ?>
    </table>
</body>

</html>