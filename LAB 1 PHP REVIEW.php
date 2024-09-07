<!DOCTYPE html>
<html lang="en">
<head>
    <!-- page title -->
    <title>PHP Page</title>

    <!-- meta tag -->
    <meta charset="UTF-8">

    <!-- basic css styling -->
    <style>
        /* background color */
        body {
            background-color: #f0f0f0;
        }

        /* paragraph style */
        p {
            color: blue; /* text color */
            border: 1px solid black; /* border */
            width: 80%; /* width less than 100% */
            padding: 10px; /* padding larger than 0 */
            margin: 15px; /* margin larger than 0 */
        }

        /* table style */
        table {
            margin-top: 20px; /* margin to create space */
        }

        /* form style */
        form {
            margin-top: 20px; /* margin to create space */
        }
    </style>
</head>
<body>

<!-- heading tag -->
<h1>hello world!</h1>

<!-- paragraph tags -->
<p>Lab 1-PHP and Review</p>
<p>PHP and HTML exercise.</p>

<!-- break -->
<br>

<!-- table one row and one column -->
<table border="1">
    <tr>
        <td>Data table</td>
    </tr>
</table>

<!-- form with one text input and a button -->
<form action="#" method="post">
    <input type="text" name="inputField" placeholder="Type here...">
    <button type="submit">Submit</button>
</form>

<!-- php code -->
<?php
// basic php
echo "<p>PHP output: Class Alamo PHP!</p>";
?>

</body>
</html>
