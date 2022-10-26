<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $idnumber = isset($_POST['idnumber']) ? $_POST['idnumber'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : date('Y-m-d H:i:s');
    $parentname = isset($_POST['parentname']) ? $_POST['parentname'] : '';
    $contactnumber = isset($_POST['contactnumber']) ? $_POST['contactnumber'] : '';
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO contacts VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $idnumber, $course, $address, $birthdate, $parentname, $contactnumber]);
    // Output message
    $msg = 'Created Successfully!';
}
?>

<?=template_header('Create')?>

<div class="content update">
    <h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="name" placeholder="John Doe" id="name">
        <label for="idnumber">ID Number</label>
        <label for="course">Course</label>
        <input type="text" name="idnumber" placeholder="johndoe@example.com" id="idnumber">
        <input list="course">
    <datalist id="course">
        <option value = "BACHELOR OF SCIENCE IN ACCOUNTING INFORMATION SYSTEM">
        <option value = "BACHELOR OF SCIENCE IN ACCOUNTING TECHNOLOGY">
        <option value = "BACHELOR OF SCIENCE IN AGRICULTURAL ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN ARCHITECTURE">
        <option value = "BACHELOR OF SCIENCE IN BIOLOGY">
        <option value = "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION">
        <option value = "BACHELOR OF SCIENCE IN CIVIL ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN TOURISM MANAGEMENT">
        <option value = "BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT">
        <option value = "BACHELOR OF ARTS IN BEHAVIORAL SCIENCE">
        <option value = "BACHELOR OF ARTS IN COMMUNICATION">
        <option value = "BACHELOR OF ARTS IN ENGLISH">
        <option value = "BACHELOR OF ARTS IN ENGLISH LANGUAGE STUDIES">
        <option value = "BACHELOR OF ARTS IN MASS COMMUNICATION">
        <option value = "BACHELOR OF ARTS IN POLITICAL SCIENCE">
        <option value = "BACHELOR OF CULTURE AND ARTS EDUCATION">
        <option value = "BACHELOR OF EARLY CHILDHOOD EDUCATION">
        <option value = "BACHELOR OF ELEMENTARY EDUCATION">
        <option value = "BACHELOR OF FINE ARTS">
        <option value = "BACHELOR OF FORENSIC SCIENCE">
        <option value = "BACHELOR OF LIBRARY AND INFORMATION SCIENCE">
        <option value = "BACHELOR OF PHYSICAL EDUCATION">
        <option value = "BACHELOR OF SCIENCE IN ACCOUNTANCY">
        <option value = "BACHELOR OF SCIENCE IN COMMERCE">
        <option value = "BACHELOR OF SCIENCE IN COMPUTER ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN COMPUTER SCIENCE">
        <option value = "BACHELOR OF SCIENCE IN CRIMINOLOGY">
        <option value = "BACHELOR OF SCIENCE IN DATA ANALYTICS">
        <option value = "BACHELOR OF SCIENCE IN ELECTRONIC AND COMMUNICATIONS ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN ELECTRONICS ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN ENTREPRENEURSHIP">
        <option value = "BACHELOR OF SCIENCE IN ENVIRONMENTAL AND SANITARY ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN ENVIRONMENTAL PLANNING">
        <option value = "BACHELOR OF SCIENCE IN EXERCISE & SPORTS SCIENCE">
        <option value = "BACHELOR OF SCIENCE IN FINANCIAL AND MANAGEMENT ACCOUNTING">
        <option value = "BACHELOR OF SCIENCE IN FORENSIC ACCOUNTING">
        <option value = "BACHELOR OF SCIENCE IN GEODETIC ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMEN">
        <option value = "BACHELOR OF SCIENCE IN INDUSTRIAL SECURITY MANAGEMENT">
        <option value = "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY">
        <option value = "BACHELOR OF SCIENCE IN INTERNAL AUDITING">
        <option value = "BACHELOR OF SCIENCE IN LEGAL MANAGEMENT">
        <option value = "BACHELOR OF SCIENCE IN MANAGEMENT ACCOUNTING">
        <option value = "BACHELOR OF SCIENCE IN MECHANICAL ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN MECHATRONICS ENGINEERING">
        <option value = "BACHELOR OF SCIENCE IN NURSING">
        <option value = "BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION">
        <option value = "BACHELOR OF SCIENCE IN PSYCHOLOGY">
        <option value = "BACHELOR OF SCIENCE IN REAL ESTATE MANAGEMENT">
        <option value = "BACHELOR OF SCIENCE IN TOURISM MANAGEMENT">
        <option value = "BACHELOR OF SECONDARY EDUCATION">
        <option value = "BACHELOR OF SPECIAL NEEDS EDUCATION-ELEMENTARY SCHOOL TEACHING">
        <option value = "DOCTOR IN INFORMATION TECHNOLOGY">
        <option value = "DOCTOR OF PHILOSOPHY IN CRIMINAL JUSTICE">
        
    </datalist>
        <label for="address">Address</label>
        <label for="birthdate">Birth Date</label>
        <input type="text" name="address" placeholder="Barangay" id="address">
        <input type="datetime-local" name="birthdate" value="<?=date('Y-m-d\TH:i')?>" id="birthdate">

        <h2>In case of Emergency please contact</h2>

<label for="parentname"></label><br>
    <input type="text" id="parentname" name="parentname" placeholder="Parent's/Guardian's name" ><br>
  <label for="contactnumber"></label><br>
    <input type="text" id="contactnumber" name="contactnumber" maxlength="11" size="11"placeholder="Cellphone Number"><br>

        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>