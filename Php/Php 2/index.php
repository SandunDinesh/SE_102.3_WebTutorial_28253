<center><form method="post" style="border:2px solid black; width: 20%; background-color:aquamarine;padding:20px;">
<h1>Registration Form</h1>


        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <br>

        <label for="academic_year">Academic Year:</label>
        <select id="academic_year" name="academic_year" required>
            <option value="first_year">First Year</option>
            <option value="second_year">Second Year</option>
            <option value="third_year">Third Year</option>
            <option value="fourth_year">Fourth Year</option>
        </select>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        <br>

        <input type="submit" value="Submit">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $pass = $_POST["password"];
    $gender = $_POST["gender"];
    $acyear = $_POST["academic_year"];
    $phone = $_POST["phone"];
}
?>
    <table border="1">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $fname; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $lname; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $pass; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Academic Year</td>
            <td><?php echo $acyear; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $phone; ?></td>
        </tr>
    </table>
</center>


