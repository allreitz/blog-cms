<?php
  include "header.php";
?>
  <?php
    include "nav.php";
  ?>
  <main>
  <?php
    function getPostDetailsFromDatabase() {
      $postDetails = array('title' => 'Blog Post 1',
                          'content' => 'my first blog post',
                          'date' => '01/01/2020',
                          'author' => 'alexanderreitz');
      return $postDetails;
    }      
  ?>
  <?php
      //post details contains all the  data  to generate the data from
      $postDetails = getPostDetailsFromDatabase();
  ?>
  <h1> <?php echo $postDetails["title"]; ?> </h1>
  <div> <?php echo $postDetails["author"]; ?> </div>
  <div> <?php echo $postDetails["date"]; ?> </div>
  <div> <?php echo $postDetails["content"]; ?> </div>
   <h1>Lorem Ipsum</h1>
    echo "<li><a href=='post.php?title=" . $postTitle . "'>" . $postTitle .
    "</a></li>";
    <article>
        <div style="background-color:lightblue">
            <h3>Author: Alexander Reitz</h3>
            <h3>published 9/20/10</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                 velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                 occaecat cupidatat non proident, sunt in culpa qui officia 
                 deserunt mollit anim id est laborum."</p>
        </div>
    </article>

   
  </main>
  <?php
    include "footer.php";
  ?>
</html>