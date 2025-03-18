<html>
<body>
<?php
// 1. Database Connection
$conn = new mysqli("localhost", "root", "akki", "hotel");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>

<!-- 2. Form (Inside Table) -->
<form method="post">
    <table border="1" cellpadding="5" cellspacing="0" >
        <tr><th colspan="2" style="color: blue;">VRINDAVANA INTERNATIONAL</th></tr>
        <tr><th>Customer Name</th><td><input type="text" name="custname"></td></tr>
        <tr><th>Address</th><td><textarea name="address"></textarea></td></tr>
        <tr><th>Contact</th><td><input type="text" name="contact"></td></tr>
        <tr><th>Aadhar Number</th><td><input type="text" name="aadhar"></td></tr>
        <tr><th>Gender</th>
            <td>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </td>
        </tr>
        <tr><th>Check-in Date</th><td><input type="date" name="checkin"></td></tr>
        <tr><th>Check-out Date</th><td><input type="date" name="checkout"></td></tr>
        <tr><th>Number of Rooms</th><td><input type="number" name="rooms"></td></tr>
        <tr><th>Select Room Type</th>
            <td>
                <select name="roomtype">
                    <?php
                    $result = $conn->query("SELECT room_type FROM room_register");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['room_type']}'>{$row['room_type']}</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="BOOK" name="register">
                <input type="reset" value="CLEAR">
            </td>
        </tr>
    </table>
</form>

<?php
// 3. Process Booking if Form is Submitted
if (isset($_POST['register'])) {
    $name = $_POST['custname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $aadhar = $_POST['aadhar'];
    $gender = $_POST['gender'];
    $rooms = $_POST['rooms'];
    $roomtype = $_POST['roomtype'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $days = (strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24);
    $row = $conn->query("SELECT room_rent, room_count FROM room_register WHERE room_type='$roomtype'")->fetch_assoc();

    if ($row['room_count'] < $rooms) die("Not enough vacant rooms.");
    if ($checkin >= $checkout || $checkin < date('Y-m-d')) die("Invalid dates.");

    $amount = $row['room_rent'] * $days;
    $conn->query("INSERT INTO customer_register VALUES ('$name', '$address', '$contact', '$aadhar', '$gender', '$rooms', '$roomtype', '$checkin', '$checkout')");
    $conn->query("UPDATE room_register SET room_count = room_count - $rooms WHERE room_type='$roomtype'");

    echo " Room booked for $days days. Please pay Rs. $amount at the cash counter.";
}
?>
</body>
</html>
