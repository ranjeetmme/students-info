<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration form</title>
</head>
<body>
  
<div class="container">
        <div class="title">Student's Registration</div>
        <div class="content">
          <form action="create.php" method="post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Students Full Name</span>
                <input type="text" name="sname" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <span class="details">Father's Name</span>
                <input type="text" name="sfather" placeholder="Enter Father's Name" required>
              </div>
              <div class="input-box">
                <span class="details">Class and Div</span>
                <input type="text" name="sclass" placeholder="Enter Class and Div" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" name="sphone" placeholder="Enter your number" required>
              </div>
              <div class="input-box">
                <span class="details">Admission year</span>
                <input type="text" name="admissonyr" placeholder="Enter your Admission year" required>
              </div>
              <div class="input-box">
                <span class="details">Permanent adress</span>
                <input type="text" name="saddress" placeholder="Enter Permanent adress" required>
              </div>
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" id="dot-1">
              <input type="radio" name="gender" id="dot-2">
              <input type="radio" name="gender" id="dot-3">
              <span class="gender-title">Gender</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Prefer not to say</span>
                </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Register">
            </div>
          </form>
        </div>
      </div>
    
</body>
</html>