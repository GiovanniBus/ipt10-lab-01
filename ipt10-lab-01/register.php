<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="auflogo.jfif" alt="AUF Logo" class="logo">
        <form action="summary.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label>Sex:</label>
                <input type="radio" id="male" name="sex" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female">
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="department">College Department:</label>
                <select id="department" name="department">
                    <option value="Engineering">Computer Studies</option>
                    <option value="Engineering">Medical</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Business">Business</option>
                    <option value="Arts">Arts</option>
                </select>
            </div>
            <div class="form-group">
                <label for="program">Program:</label>
                <input type="text" id="program" name="program">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" name="mobile">
            </div>
            <div class="buttons">
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>