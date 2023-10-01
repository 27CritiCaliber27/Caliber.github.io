<!-- Name: Peter Miles Anthony L. Laporre
     Course: B.S. in Computer Engineering
     School: Mapua Malayan Colleges Mindanao -->
<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "LabTask9.css">
    <title> Word Jumbler </title>
</head>
<body>

    <div class = "container">
        <h2> Word Jumbler </h2>
        <!-- Making of form -->
        <form method = "POST" action = "index.php">
            <label for = "Word1">Word 1:</label>
            <input type = "text" id = "Word1" name = "Word1" required pattern = "[a-z A-Z]{4,7}">
            <label for = "Word2">Word 2:</label>
            <input type = "text" id = "Word2" name = "Word2" required pattern = "[a-z A-Z]{4,7}">
            <label for = "Word3">Word 3:</label>
            <input type = "text" id = "Word3" name = "Word3" required pattern = "[a-z A-Z]{4,7}">
            <label for = "Word4">Word 4:</label>
            <input type = "text" id = "Word4" name = "Word4" required pattern = "[a-z A-Z]{4,7}">
            <button type = "submit" name = "submit">Submit</button>
            <button type = "reset">Reset</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $word1 = $_POST['Word1'];
            $word2 = $_POST['Word2'];
            $word3 = $_POST['Word3'];
            $word4 = $_POST['Word4'];

            if (validateWords($word1, $word2, $word3, $word4)) {
                $jumbledWords = [
                    strtoupper(str_shuffle($word1)),
                    strtoupper(str_shuffle($word2)),
                    strtoupper(str_shuffle($word3)),
                    strtoupper(str_shuffle($word4)),
                ];

                echo '<h2>Jumbled Words</h2>';
                foreach ($jumbledWords as $jumbledWord) {
                    echo '<p>' . $jumbledWord . '</p>';
                }
            } else {
                echo '<p> Invalid input. Please enter valid words with 4 to 7 letters containing only letters. </p>';
            }
        }
        // word validation
        function validateWords($word1, $word2, $word3, $word4) {
            $wordPattern = '/^[a-zA-Z]{4,7}$/';
            return preg_match($wordPattern, $word1) &&
                preg_match($wordPattern, $word2) &&
                preg_match($wordPattern, $word3) &&
                preg_match($wordPattern, $word4);
        }
        ?>
    </div>
</body>
</html>