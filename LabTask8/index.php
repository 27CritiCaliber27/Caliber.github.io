<!-- Name: Peter Miles Anthony L. Laporre 
     Course: B.S. in Computer Engineering 
     SChool: Mapua Malayan Colleges Mindanao -->
<!DOCTYPE html>
<html>
<head>
    <!-- CSS file -->
    <link rel="stylesheet" href="LabTask8.css">
    <title>Chinese Zodiac for loop</title>
</head>
<body>
    <div class = "container">
        <h1> Chinese Zodiac for loop </h1>
        <table>
            <tr>
                <?php
                    // Chinese Zodiac signs
                    $zodiacSigns = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");

                    // Corresponding images for each sign
                    $zodiacImages = array(
                        "images/rat.png", 
                        "images/ox.png", 
                        "images/tiger.png", 
                        "images/rabbit.png", 
                        "images/dragon.png", 
                        "images/snake.png",
                        "images/horse.png", 
                        "images/goat.png",
                        "images/monke.png", 
                        "images/rooster.png", 
                        "images/dog.png", 
                        "images/pig.png"
                    );

                    // Loop through each sign to create column headers with images
                    foreach ($zodiacSigns as $index => $sign) {
                        echo "<th>$sign<br><img src=\"{$zodiacImages[$index]}\" alt=\"$sign\"></th>";
                    }
                ?>
            </tr>
            
            <?php
                // Start year and end year
                $startYear = 1912;
                $endYear = date("Y");  // Current year

                // Loop through each year to create rows
                for ($year = $startYear; $year <= $endYear; $year++) {
                    echo "<tr>";
                    
                    // Loop through each sign to create cells
                    foreach ($zodiacSigns as $index => $sign) {
                        echo "<td>$year</td>";
                        $year++;
                        if ($year > $endYear) {
                            break 2;  // Break out of both inner and outer loops
                        }
                    }
                    
                    echo "</tr>";
                    $year --;
                }
            ?>
        </table>
    </div>
</body>
</html>