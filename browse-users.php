<?php
    require_once 'include/config.php';
    $output = $pdo->query('SELECT SSN, Name, Email, DOB FROM users');
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style>
            table {
              border-collapse: collapse;
            }

            td, th {
              border: 1px solid black;
              padding: 1rem;
              text-align: center;
            }
        </style>
    </head>

    <body>
        <div>
            <a href="index.html">Homepage</a>
            <h2>Registered users</h2>

            <?php
                echo '
                    <table>
                      <thead>
                        <tr>
                          <th>SSN</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>DOB</th>
                        </tr>
                    </thead>
                    <tbody>';

                        while ($row = $output->fetch())
                        {
                            $ssn = $row['SSN'];
                            $name = $row['Name'];
                            $email = $row['Email'];
                            $dob = $row['DOB'];

                            echo '<tr>
                                      <td>'.$ssn.'</td>
                                      <td>'.$name.'</td>
                                      <td>'.$email.'</td>
                                      <td>'.$dob.'</td>
                                    </tr>
                            ';
                        }

                        echo '</tbody>
                                </table>
                            ';                
            ?>
        </div>
    </body>
</html>

