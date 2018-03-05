<?php
    require_once 'include/config.php';
    $output = $pdo->query('SELECT ID, Name, Email, Category, Address FROM doctors');
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
            <h2>Registered doctors</h2>

            <?php
                echo '
                    <table>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Category</th>
                          <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>';

                        while ($row = $output->fetch())
                        {
                            $id = $row['ID'];
                            $name = $row['Name'];
                            $email = $row['Email'];
                            $category = $row['Category'];
                            $address = $row['Address'];

                            echo '<tr>
                                      <td>'.$id.'</td>
                                      <td>'.$name.'</td>
                                      <td>'.$email.'</td>
                                      <td>'.$category.'</td>
                                      <td>'.$address.'</td>
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

