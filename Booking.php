<?php

$name = $_POST['name'];
$room = $_POST['room'];
$days = $_POST['days'];

switch($room)
{
    case "Standard":
        $price = 1000;
        break;

    case "Deluxe":
        $price = 2000;
        break;

    case "Suite":
        $price = 3500;
        break;

    default:
        $price = 0;
}

$total = $price * $days;

echo "
<!DOCTYPE html>
<html>
<head>
    <title>Booking Receipt</title>
</head>
<body>

    <h2>Hotel Booking Receipt</h2>

    <hr>

    <p><b>Customer Name:</b> $name</p>

    <p><b>Room Type:</b> $room</p>

    <p><b>Days:</b> $days</p>

    <p><b>Price Per Day:</b> ₹$price</p>

    <p><b>Total Bill:</b> ₹$total</p>

    <hr>

    <h3>Booking Confirmed ✅</h3>

</body>
</html>
";

?>
