<div class="class-container mt-50">
        <h3>Science</h3>
        <div class="class-box">
            <h4>Physics</h4>

            <?php 
            
            $selectSciencePhysics = "SELECT * FROM students WHERE topic='Physics'";
            $result = $conn->query($selectSciencePhysics);

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
            <h4>Chemistry</h4>

            <?php 
            
            $selectScienceChem = "SELECT * FROM students WHERE topic='Chemistry'";
            $result = $conn->query($selectScienceChem);

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
            <h4>Biology</h4>

            <?php 
            
            $selectScienceBio = "SELECT * FROM students WHERE topic='Biology'";
            $result = $conn->query($selectScienceBio);

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