<?php
// Check if form data exists and required fields are filled
if (empty($_POST['name']) || empty($_POST['email'])) {
    header("Location: register.php");
    exit();
}

// Sanitize and collect form data
$name = htmlspecialchars($_POST['name']);
$dob = htmlspecialchars($_POST['dob']);
$sex = htmlspecialchars($_POST['sex']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$department = htmlspecialchars($_POST['department']);
$program = htmlspecialchars($_POST['program']);
$mobile = htmlspecialchars($_POST['mobile']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Summary of Your Registration</h1>
        <table>
            <tr>
                <th>Name</th>
                <td class="<?php echo strtolower($sex); ?>"><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <th>College Department</th>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <th>Program</th>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>
        <div class="buttons">
            <a href="register.php">Back to Registration</a>
        </div>
    </div>
</body>
</html>
