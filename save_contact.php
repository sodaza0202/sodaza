<?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "fitwhey";

              $name = $_POST["name"];
              $email = $_POST["email"];
              $phone = $_POST["phone"];
              $address = $_POST["address"];


              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              mysqli_set_charset($conn,"utf8");
              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

              $sql = "INSERT INTO contact (contact_name, contact_email, contact_phone , contact_address)
              VALUES ('".$name."', '".$email."', '".$phone."' , '".$address."')";

              if ($conn->query($sql) === TRUE) {
                  header("Location: ./");
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }
?>