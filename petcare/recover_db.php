<?php
include('hms/include/config.php');

// Create settings table
$sql = "CREATE TABLE IF NOT EXISTS settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_shotName VARCHAR(255),
    product_name VARCHAR(255)
)";
if (mysqli_query($con, $sql)) {
    echo "Table 'settings' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Insert dummy data into settings
$chk = mysqli_query($con, "SELECT * FROM settings");
if (mysqli_num_rows($chk) == 0) {
    mysqli_query($con, "INSERT INTO settings (product_shotName, product_name) VALUES ('PetCare', 'PetCare System')");
    echo "Inserted default settings data.<br>";
}

// Create tblpage table
$sql = "CREATE TABLE IF NOT EXISTS tblpage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    PageType VARCHAR(200),
    PageDescription MEDIUMTEXT,
    Email VARCHAR(200),
    MobileNumber VARCHAR(20),
    OpenningTime VARCHAR(200),
    UpdationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($con, $sql)) {
    echo "Table 'tblpage' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Insert dummy data into tblpage
$chk = mysqli_query($con, "SELECT * FROM tblpage");
if (mysqli_num_rows($chk) == 0) {
    mysqli_query($con, "INSERT INTO tblpage (PageType, PageDescription, Email, MobileNumber, OpenningTime) VALUES ('aboutus', 'About Us Description Content', 'info@petcare.com', '1234567890', '9 am to 6 pm')");
    mysqli_query($con, "INSERT INTO tblpage (PageType, PageDescription, Email, MobileNumber, OpenningTime) VALUES ('contactus', 'Contact Us Description Content', 'contact@petcare.com', '1234567890', '9 am to 6 pm')");
    echo "Inserted default tblpage data.<br>";
}

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255),
    address LONGTEXT,
    city VARCHAR(255),
    gender VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updationDate TIMESTAMP NULL
)";
if (mysqli_query($con, $sql)) {
    echo "Table 'users' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Create tblcontactus table
$sql = "CREATE TABLE IF NOT EXISTS tblcontactus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255),
    email VARCHAR(255),
    contactno VARCHAR(20),
    message LONGTEXT,
    PostingDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    AdminRemark LONGTEXT,
    LastupdationDate TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
    IsRead INT(1)
)";
if (mysqli_query($con, $sql)) {
    echo "Table 'tblcontactus' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Create userlog table
$sql = "CREATE TABLE IF NOT EXISTS userlog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uid INT(11),
    username VARCHAR(255),
    userip VARCHAR(45),
    loginTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    logout VARCHAR(255),
    status INT(11)
)";
if (mysqli_query($con, $sql)) {
    echo "Table 'userlog' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

echo "Database recovery completed.";
?>
