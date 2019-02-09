<div class="class-container mt-50">
        <h3>Art</h3>
        <div class="class-box">
            <h4>Art History</h4>

            <?php 
            
            $selectArtHistory = "SELECT * FROM students WHERE topic='Art History'";
            $result = $conn->query($selectArtHistory);

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
            <h4>Painting</h4>

            <?php 
            
            $selectArtPainting = "SELECT * FROM students WHERE topic='Painting'";
            $result = $conn->query($selectArtPainting);

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
            <h4>Drawing</h4>

            <?php 
            
            $selectArtDrawing = "SELECT * FROM students WHERE topic='Drawing'";
            $result = $conn->query($selectArtDrawing);

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