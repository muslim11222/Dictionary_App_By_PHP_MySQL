<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dictionary_App_By_PHP_MySQL</title>

     <!-- css link start here -->
      <link rel="stylesheet" href="/Dictionary_App_By_PHP_MySQL/style.css">
</head>
<body>
     
     <form action="insert.php" method="POST">
          <h1> Insert Word </h1>
          
          <input type="text" name="word" value="" placeholder="Enter Word" required><br><br>
          
          <input type="text" name="meanings" placeholder="Enter Meanings" required><br><br>
          <input type="submit" name="insert" value="Insert Word">
          <a href="Dictionary.php">Dictionary Search</a>
     </form>

     <table>

          <tr>
               <td>Word</td>
               <td>Meanings</td>
          </tr>
          <?php 
               include 'db_conn.php';
               // <!-- mysqli insert word into meanigs values -->
               if(isset($_POST['insert'])) { 
                    $word = $_POST['word'];
                    $meaning = $_POST['meanings'];  
               
                    $sql = "INSERT INTO dictionary_user(word, meaning) VALUES('$word', '$meaning')";
                    $result = mysqli_query($conn, $sql);
               
                    if($result == true) {
                         header("location:insert.php");
                         exit; // Stop further execution
                    } else {
                    echo 'data not inserted successfully';
                    }
               }

               $sql1 = "SELECT * FROM dictionary_user";
               $result1 = mysqli_query($conn, $sql1);
               while($row = mysqli_fetch_array($result1)){
                    

                    ?>
                         <tr>
                              <td><?php echo $row['word']; ?></td>
                              <td><?php echo $row['meaning']; ?></td>
                         </tr>
                    <?php
               }

           
          ?>
     </table>


</body>
</html>