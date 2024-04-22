<!DOCTYPE html>
<html>
<head>
    <title>Insert Record</title>
</head>
<body>
<h2>Insert Record</h2>
<form method="post" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="grade">Grade:</label><br>
    <input type="text" id="grade" name="grade" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
<?php
include '2.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $sql = "INSERT INTO studentrecords (name, grade) VALUES ('$name', '$grade')";
    if ($conn->query($sql) === TRUE) {
        echo "<br>Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>
