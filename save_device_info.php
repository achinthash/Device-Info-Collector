<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "device_info"; //add your database

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get device information from POST data
$screenInfo = $_POST['screenInfo'];
$osInfo = $_POST['osInfo'];
$browserInfo = $_POST['browserInfo'];
$geolocationInfo = $_POST['geolocationInfo'];
$ipInfo = $_POST['ipInfo'];
$deviceTypeInfo = $_POST['deviceTypeInfo'];
$timezoneInfo = $_POST['timezoneInfo'];
$languageInfo = $_POST['languageInfo'];
$userAgentInfo = $_POST['userAgentInfo'];
$orientationInfo = $_POST['orientationInfo'];
$motionInfo = $_POST['motionInfo'];
$cookieInfo = $_POST['cookieInfo'];
$webglInfo = $_POST['webglInfo'];
$batteryStatus = $_POST['batteryStatus'];
$simCardInfo = $_POST['simCardInfo'];

// Insert device information into the database
$sql = "INSERT INTO device_info (screen_info, os_info, browser_info, geolocation_info, ip_info, device_type_info, timezone_info, language_info, user_agent_info, orientation_info, motion_info, cookie_info, webgl_info, battery_status, sim_card_info)
        VALUES ('$screenInfo', '$osInfo', '$browserInfo', '$geolocationInfo', '$ipInfo', '$deviceTypeInfo', '$timezoneInfo', '$languageInfo', '$userAgentInfo', '$orientationInfo', '$motionInfo', '$cookieInfo', '$webglInfo', '$batteryStatus', '$simCardInfo')";

if ($conn->query($sql) === TRUE) {
    echo "Device information saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
