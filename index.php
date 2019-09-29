<?php
  include "header.php";
?>
  <?php
    include "nav.php";
  ?>
  <?php
     php include_once 'db_connect.php' 
  ?>


  <main>
    <?php
      function getPostTitlesFromDatabase() {
        //todo in module 4
        // get this data from databse instead of hardcoding it
        $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
        return $postTitles;
      }
    ?>
    <ul>
      <?php
        $postTitles = getPostTitlesFromDatabase();

        foreach($postTitles as $postTitle) {
          echo "<li><a href='post.php'>" . $postTitle . "</a></li>";
        }
      ?>
    </ul>
  <body>
        $sql = "";
  </body>
   

 

  </main>
  <?php
    include "footer.php";
  ?>
</html>