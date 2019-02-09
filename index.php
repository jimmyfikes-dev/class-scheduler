
<?php

include 'includes/db.php';
 
$conn = DatabaseConnect();
 
echo "Connected Successfully";
 


if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $topic = $_POST['topic'];
    $timeslot = $_POST['timeslot'];

    if($username == '' || $email == '' || $subject == '' || $topic == '' || $timeslot == '' ) {
            echo "Please make sure to fill out all field.";
            echo "Please click <a href='/'>here</a> try again.";
            header('Location: index.php?error=true');
            return false;
    }

   
        $sql = "INSERT INTO students (username, email, subject, topic, timeslot)
        VALUES ('$username', '$email', '$subject', '$topic', '$timeslot')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    // echo $username;
    // echo $email;
    // echo $subject;
    // echo $topic;
    // echo $timeslot;
}



class student {
    public $username;
    public $email;
    public $subject;
    public $topic;
    public $timeslot;
}

// CloseCon($conn);

?>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
<link rel="stylesheet" href="includes/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>


<form action="index.php" method="POST">
<h2>Class Scheduler</h2>
<p><input type="text" class="required form-control"  name="username" /></p>
<p><input type="text" class="required form-control"  name="email" /></p>
<p><select name="subject" class="subject required">
    <option value="Default" data-val="default">-- Select A Course --</option>
    <option value="Math" data-val="math">Math</option>
    <option value="Science" data-val="science">Science</option>
    <option value="Art" data-val="art">Art</option>
    <option value="Language Arts" data-val="language-arts">Language Arts</option>
</select></p>
<p><select name="topic" class="topic required">
        <option value="Default" data-val="default">-- Select Course Topic --</option>
        <option value="Algebra" class="math">Algebra</option>
        <option value="Trigonometry" class="math">Algebra 2/Trigonometry</option>
        <option value="Geometry" class="math">Geometry</option>
        <option value="Pre-Calculus" class="math">Pre-Calculus</option>
        <option value="Calculus" class="math">Calculus</option>
        <option value="Physics" class="science">Physics</option>
        <option value="Chemistry" class="science">Chemistry</option>
        <option value="Biology" class="science">Biology</option>
        <option value="Art History" class="art">Art History</option>
        <option value="Painting" class="art">Painting</option>
        <option value="Drawing" class="art">Drawing</option>
        <option value="Literature" class="language-arts">Literature</option>
        <option value="Grammar" class="language-arts">Grammar</option>
        <option value="Writing" class="language-arts">Writing</option>  
</select></p>
<p><select name="timeslot" class="timeslot required">
        <option value="Default" data-val="default">-- Select Course Time --</option>
        <option value="8:00AM" class="math">8:00AM</option>
        <option value="9:00AM" class="math">9:00AM</option>
        <option value="10:00AM" class="math">10:00AM</option>
        <option value="11:00AM" class="math">11:00AM</option>
        <option value="12:00PM" class="math">12:00PM</option>
        <option value="3:00PM" class="math">3:00PM</option>
        <option value="8:00AM" class="science">8:00AM</option>
        <option value="9:00AM" class="science">9:00AM</option>
        <option value="10:00AM" class="science">10:00AM</option>
        <option value="1:00PM" class="science">1:00PM</option>
        <option value="3:00PM" class="science">3:00PM</option>
        <option value="5:00AM" class="art">5:00AM</option>
        <option value="8:00AM" class="art">8:00AM</option>
        <option value="11:00AM" class="art">11:00AM</option>
        <option value="2:00PM" class="art">2:00PM</option>
        <option value="8:00AM" class="language-arts">8:00AM</option>
        <option value="9:00AM" class="language-arts">9:00AM</option>
        <option value="10:00AM" class="language-arts">10:00AM</option>
        <option value="11:00AM" class="language-arts">11:00AM</option>
        <option value="11:00AM" class="language-arts">11:00AM</option>
        <option value="12:00PM" class="language-arts">12:00PM</option>
        <option value="2:00PM" class="language-arts">2:00PM</option>


</select></p>
<p><input type="submit" value="Submit" name="submit" class="submit" /></p>
</form>

<div class="subjects-container">
    <h2>Please see our schedule of classes below</h2>

    <?php include('includes/math.php'); ?>

    <?php include('includes/science.php'); ?>

    <?php include('includes/art.php'); ?>

    <?php include('includes/language-arts.php'); ?>
    

</div>



<script>

    var subjectSelect = $('select.subject');
    var topicContainer = $('select.topic');
    $(subjectSelect).change(function() {
        selectedOption = $(this).children("option:selected").attr('data-val');
        var activetopic = $('select.topic option.' + selectedOption);
        var activetimeslot = $('select.timeslot option.' + selectedOption);
        $('select.topic option.active').removeClass('active');
        $('select.timeslot option.active').removeClass('active');
        $(activetopic).addClass('active');
        $(activetimeslot).addClass('active');
        $(topicContainer).fadeIn('slow');
        console.log(activetimeslot);
    });


    // function checkFields() {
        var requiredFields = $('form input.required');
        
        $(requiredFields).each(function() {
            if($(this).val() === '') {
                console.log('Please completely fill out the form.');
                return false;
            }
            else {
                return true;
            }
        });

        /* $(requiredFields).each(function(el) {
            var el = $(this);
            // el.addClass('active');
            if(el.val() == '') {
                el.addClass('field-error');
                return false;
            }
            else {
                return true;
            }
            console.log(requiredFields);
        }); */
    // }

    
    

    $('form input.submit').on('click', function() {
        checkFields()
    });
        /* var el = $(this);
        el.addClass('active');
        if(el.val() === '') {
            el.addClass('field-error');
            return false;
        }
        else {
            return true;
        }
     }); 
 } */

    // $('form input.submit').on('click', function() {
        
    

</script>

</body>


</html>