<?php
  include "header.php";
?>
  <?php
    include "nav.php";
  ?>
  <main>
    <h1>                       </h1>
    <form action="/action_page.php" method="get">
        Title <input type="text" name="title"><br>
        Author name: <input type="text" name="author"><br>
        Date: <input type="text" name="date"><br>
        <h3>Post your message:</h3>
        <textarea rows="4" cols="50">
                
        </textarea>
        <form action="/action_page.php" method="get">
  
  
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  <button type="submit" value="Submit">Submit</button>
  <button type="reset" value="Reset">Reset</button>
</form>

    </form>
  </main>
  <?php
    include "footer.php";
  ?>
</html>