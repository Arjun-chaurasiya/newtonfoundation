<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>
    <h2>Registration Confirmation</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $fatherName = $_POST["Father name"];
        $gender = $_POST["Gender"];
        $mobileNumber = $_POST["Mobile Number"];
        $whatsappNumber = $_POST["Whatsapp Number"];
        $alternateNumber = $_POST["Alternet Number"];
        $email = $_POST["email"];
        $address = $_POST["Address"];
        $city = $_POST["City"];
        $state = $_POST["State"];
        $pinCode = $_POST["PinCode"];
        $dateOfBirth = $_POST["Date of birth"];
        $category = $_POST["Category"];
        $highSchool = $_POST["High School (10th):"];
        $intermediate = $_POST["Intermediate (10+2):"];
        $graduation = $_POST[" Graduation:"];
        $coursesAppliedFor = $_POST[" Graduation:"];
        $coursesIfOthers = $_POST["Courses(IfOthers)"];
        $courseStreamIfApplicable = $_POST["Course Stream (If Applicable):"];
        $photoFileName = $_FILES["myphotofile"]["name"];
        $signatureFileName = $_FILES["Signature"]["name"];
        $message = $_POST["message"];

        // Display the submitted data
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Father's Name:</strong> $fatherName</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        // Add similar lines for other form fields...

        // Display uploaded file names
        echo "<p><strong>Photo File Name:</strong> $photoFileName</p>";
        echo "<p><strong>Signature File Name:</strong> $signatureFileName</p>";

        echo "<p><strong>Message:</strong> $message</p>";
    }
    ?>
</body>
</html>
