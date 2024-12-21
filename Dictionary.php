<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dictionary</title>

     <!-- css link here -->
      <link rel="stylesheet" href="/Dictionary_App_By_PHP_MySQL/style.css">
</head>
<body>
     
     
     <div class="div1">
          <h1> English To Bangla Dictionary </h1>
          <form action="Dictionary.php" method="POST">
               <input type="text" name="word" value="" placeholder="Search Word" required><br><br>
               <input type="submit" name="search" value="Search">
               <a href="insert.php">Insert Word</a>
          </form>


               <table id="table2">
                    <?php 

                         include 'db_conn.php';

                         if(isset($_POST['search'])) {
                              $word = $_POST['word'];


                              $sql1 = "SELECT * FROM dictionary_user WHERE word='$word'";
                              $result2 = mysqli_query($conn, $sql1);
                              while($row = mysqli_fetch_array($result2)) {
                                   ?>
                                        <tr>
                                             <td><?php echo $row['word'] ?></td>
                                             <td><?php echo $row['meaning'] ?></td>
                                        </tr>
                                   <?php
                              }
                         }

                    ?>
               </table>

          <table id="table1">
               <tr>
                    <th>Word</th>
                    <th>Meanings</th>
               </tr>

               <?php

                    include 'db_conn.php';

                    $sql = "SELECT * FROM dictionary_user";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)) {

                         ?>
                              <tr>
                                   <td><?php echo $row['word'] ?></td>
                                   <td><?php echo $row['meaning'] ?></td>
                              </tr>
                         <?php
                    }               
               ?>


          </table>
     </div>
</body>
</html>