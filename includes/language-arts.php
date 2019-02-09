<div class="class-container mt-50">
        <h3>Language Arts</h3>
        <div class="class-box">
            <h4>Literature</h4>

            <?php 
            
            $selectLanguageLit = "SELECT * FROM students WHERE topic='Literature'";
            $result = $conn->query($selectLanguageLit);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='mt-20'><b>ID:</b> " . "ALG "  . $row["id"] . "<br />" . " <b>Username:</b> " . $row["username"] ."<br />" . " <b>Email:</b> " . $row["email"] . "<br />" . " <b>Time Chosen:</b> " .  $row["timeslot"] . "</div>";
                }
            } else {
                echo "0 results";
            }

            // echo $selectMathAlgebra;
            
            ?>
        </div>

        <div class="class-box">
            <h4>Grammar</h4>

            <?php 
            
            $selectLanguageGram = "SELECT * FROM students WHERE topic='Grammar'";
            $result = $conn->query($selectLanguageGram);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='mt-20'><b>ID:</b> " . "ALG "  . $row["id"] . "<br />" . " <b>Username:</b> " . $row["username"] ."<br />" . " <b>Email:</b> " . $row["email"] . "<br />" . " <b>Time Chosen:</b> " .  $row["timeslot"] . "</div>";
                }
            } else {
                echo "0 results";
            }

            // echo $selectMathAlgebra;
            
            ?>
        </div>

        <div class="class-box">
            <h4>Writing</h4>

            <?php 
            
            $selectLanguageWriting = "SELECT * FROM students WHERE topic='Writing'";
            $result = $conn->query($selectLanguageWriting);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='mt-20'><b>ID:</b> " . "ALG "  . $row["id"] . "<br />" . " <b>Username:</b> " . $row["username"] ."<br />" . " <b>Email:</b> " . $row["email"] . "<br />" . " <b>Time Chosen:</b> " .  $row["timeslot"] . "</div>";
                }
            } else {
                echo "0 results";
            }

            // echo $selectMathAlgebra;
            
            ?>
        </div>
    </div>