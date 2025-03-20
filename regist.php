<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $arc = $_POST['arc'];
    $emergency_contact = $_POST['emergency_contact'];
    $birthday = $_POST['birthday'];
    $favorite_color = $_POST['favorite_color'];
    $allergy = $_POST['allergy'];
    $membership = $_POST['membership'];
    $shirt_size = $_POST['shirt_size'];
    $message = $_POST['message'];

    echo "<h2>Submitted Information:</h2>";
    echo "Name: $name<br>";
    echo "Student ID: $student_id<br>";
    echo "Phone: $phone<br>";
    echo "Email: $email<br>";
    echo "ARC: $arc<br>";
    echo "Emergency Contact Phone: $emergency_contact<br>";
    echo "Birthday: $birthday<br>";
    echo "Favorite Color: $favorite_color<br>";
    echo "Allergy: $allergy<br>";
    echo "Membership: $membership<br>";
    echo "Shirt Size: $shirt_size<br>";
    echo "Message: $message<br>";

    echo '<form action="logout.php" method="POST">
            <input type="submit" value="Logout"><br>
          </form>';
} else {
?>

<html>
    <head>
        <title>Welcoming Party Activity 117</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="#ebe5d5" text="#49609a" align="center">
        <h2>Welcoming Party of Information Managemement Year 117</h2>

        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br/><br/>

            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required><br/><br/>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br/><br/>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br/><br/>

            <label for="arc">ARC:</label>
            <input type="text" id="arc" name="arc" required><br/><br/>

            <label for="emergency_contact">Emergency Contact Phone:</label>
            <input type="tel" id="emergency_contact" name="emergency_contact" required><br/><br/>

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required><br/><br/>

            <label for="favorite_color">Favorite Color:</label>
            <input type="color" id="favorite_color" name="favorite_color"><br/><br/>

            <label>Do you have food allergies?</label>
            <input type="radio" name="allergy" value="yes"> Yes
            <input type="radio" name="allergy" value="no"> No<br/><br/>

            <label for="allergy">Allergy to food:</label><br>
            <input type="text" id="allergy" name="allergy"><br><br>

            <table border="1" align="center">
                <tr>
                    <th>Years</th>
                    <th>Cost (NTD)</th>
                </tr>
                <tr>
                    <td>1 Year</td>
                    <td>400 NTD</td>
                </tr>
                <tr>
                    <td>2 Years</td>
                    <td>800 NTD</td>
                </tr>
                <tr>
                    <td>3 Years</td>
                    <td>1200 NTD</td>
                </tr>
                <tr>
                    <td>4 Years</td>
                    <td>1500 NTD</td>
                </tr>
            </table><br/>

            <label>Choose Membership:</label><br>
            <input type="radio" name="membership" value="no_member" checked> No membership<br>
            <input type="radio" name="membership" value="1_year"> 1 Year - 400 NTD<br>
            <input type="radio" name="membership" value="2_years"> 2 Years - 800 NTD<br>
            <input type="radio" name="membership" value="3_years"> 3 Years - 1200 NTD<br>
            <input type="radio" name="membership" value="4_years"> 4 Years - 1500 NTD<br><br>

            <img src="img_4.jpg" width="30%"><br/><br/>

            <label for="shirt_size">Shirt Size:</label><br>
            <select id="shirt_size" name="shirt_size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select><br><br>

            <label for="message">Expectations or suggestions for the event:</label><br>
            <textarea id="message" name="message" cols="30" rows="5"></textarea><br><br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>

        <br/><br/><p align="center">@A1123309</p>
    </body>
</html>

<?php
}
?>