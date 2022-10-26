<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $idnumber = isset($_POST['idnumber']) ? $_POST['idnumber'] : '';
        $course = isset($_POST['course']) ? $_POST['course'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : date('Y-m-d H:i:s');
        $parentname = isset($_POST['parentname']) ? $_POST['parentname'] : '';
        $contactnumber = isset($_POST['contactnumber']) ? $_POST['contactnumber'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE contacts SET id = ?, name = ?, idnumber = ?, course = ?, address = ?, birthdate = ?, parentname = ?, contactnumber = ?, WHERE id = ?');
        $stmt->execute([$id, $name, $idnumber, $course, $address, $birthdate,$parentname, $contactnumber, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM contacts WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
    <h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="name" placeholder="John Doe" id="name">
        <label for="idnumber">ID Number</label>
        <label for="course">Courses</label>
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

    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>