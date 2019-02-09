<div class="class-container">
        <h3>Math</h3>
        <div class="class-box">
            <h4>Algebra</h4>
            <table cellpadding="10" cellspacing="5">
            <?php 
            
            $selectMathAlgebra = "SELECT * FROM students WHERE topic='Algebra'";
            $result = $conn->query($selectMathAlgebra);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // echo "<div class='mt-20'><b>ID:</b> " . "ALG "  . $row["id"] . "<br />" . " <b>Username:</b> " . $row["username"] // ."<br />" . " <b>Email:</b> " . $row["email"] . "<br />" . " <b>Time Chosen:</b> " .  $row["timeslot"] . "</div>"; 
                    echo "<tr class='mt-20'><td width='100px'><b>ID:</b></br /> " . "ALG "  . $row["id"] . "</td>" . " <td><b>Username:</b> " . $row["username"] ."</td>" . " <td><b>Email:</b><br /> " . $row["email"] . "<td >" . " <td width='100px'><b>Time Chosen:</b> " .  $row["timeslot"] . "</td></tr>"; 
                }
            } else {
                echo "0 results";
            }

            // echo $selectMathAlgebra;
            
            ?>
            </table>
        </div>

        <div class="class-box">
            <h4>Trigonometry</h4>

            <?php 
            
            $selectMathTrigonometry = "SELECT * FROM students WHERE topic='Trigonometry'";
            $result = $conn->query($selectMathTrigonometry);

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
            <h4>Calculus</h4>

            <?php 
            
            $selectMathCalculus = "SELECT * FROM students WHERE topic='Calculus'";
            $result = $conn->query($selectMathCalculus);

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