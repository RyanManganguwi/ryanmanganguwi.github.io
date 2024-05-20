<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari database
$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">blog</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <?php
        // Menampilkan data ke dalam halaman web
        while ($row = $result->fetch_assoc()) {
            echo '<section id="blog">';
            echo '<img src="' . $row['image_url'] . '" />';
            echo '<div class="kolom">';
            echo '<h2 class="deskripsi">' . $row['title'] . '</h2>';
            echo '<p>' . $row['content'] . '</p>';
            echo '</div>';
            echo '</section>';
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
