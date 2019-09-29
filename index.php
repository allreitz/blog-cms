<?php

  function getPostTitlesFromDatabase() {
    include_once 'db_connect.php' ;
    $sql = "SELECT title FROM posts";
    $result = mysqli_query($conn, $sql);
    return $result;
    
  }

  function getPostDetailsFromDatabase() {
    // Get the post title
    $postTitle = rawurldecode($_GET["title"]);
  
    include_once 'db_connect.php' ;
  
    // Get the post that matches the postTitle
    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";

    $result = mysqli_query($conn, $sql);
  
  
    // Get the first row from the result as an associative array
    $postDetails = mysqli_fetch_assoc($result);
    return $postDetails;
  }
?>

<?php
  include "header.php";
?>

  <main>
    <?php
      include "nav.php";
    ?>

    <ul>
      <?php
      if(isset($_GET['title'])) {
        $postDetails = getPostDetailsFromDatabase();

        echo "#" . $postDetails['ID'] . ": ";
        echo "<a href='post.php'>" . $postDetails['title'] . "</a>";
        echo " by ";
        echo $postDetails['author'];
        echo "<br>";

      }
      else {
        $postTitles = getPostTitlesFromDatabase();

        foreach($postTitles as $postTitle) {
          echo "<li><a href='index.php?title=".$postTitle['title']."'>" . $postTitle['title'] . "</a></li>";
        }
      }
      ?>
    </ul>

   

 

  </main>
  <?php
    include "footer.php";
  ?>
</html>