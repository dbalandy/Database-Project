<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
<?php

$servername = "localhost";
$username = "id2425621_turki";
$password = "turki123";

// Create connection
$database_name = "id2425621_login";
$conn = mysqli_connect($servername, $username, $password, $database_name);
if (!$conn) {
    die(mysqli_error($conn));
}
$sql = mysqli_query($conn,"SELECT id, fname, lname, email FROM patient") or die(mysqli_error($conn));
$thesql = mysqli_query($conn,"SELECT id, fname, lname, email FROM doctor")or die(mysqli_error($conn));
$oursql = mysqli_query($conn,"SELECT id, fname, lname, email FROM employee")or die(mysqli_error($conn));

?>
<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
<h2 align="center">Patient table</h2>
        <tr>
          <th>id</th>
          <th>first name</th>
          <th>last name</th>
          <th>email</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $sql ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['fname']}</td>
              <td>{$row['lname']}</td>
              <td>{$row['email']}</td>
            </tr>\n";
          }

        ?>
      </tbody>
<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
<h2 align="center">Doctor table</h2>
        <tr>
          <th>id</th>
          <th>first name</th>
          <th>last name</th>
          <th>email</th>

        </tr>
      </thead>
      <tbody>
	  <?php
          while( $row = mysqli_fetch_assoc( $thesql ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['fname']}</td>
              <td>{$row['lname']}</td>
              <td>{$row['email']}</td>
            </tr>\n";
          }
		  
        ?>
		</tbody>
<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
<h2 align="center">Employee table</h2>
        <tr>
          <th>id</th>
          <th>first name</th>
          <th>last name</th>
          <th>email</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $oursql ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['fname']}</td>
              <td>{$row['lname']}</td>
              <td>{$row['email']}</td>
            </tr>\n";
          }

        ?>
      </tbody>
    </table>
     <?php mysqli_close($conn); ?>
    </body>
    </html>