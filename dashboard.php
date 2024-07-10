<?php 
   include "config/layout.php";
?>
   
<div class="p-4 sm:ml-64">
   <div class="p-4 mt-14">
      <h1 style="color: white">Dashboard</h1>
      <?php
      if(isset($_SESSION["namapetugas"])) {
         echo '<h2 style="color: white"> Selamat datang, ' . $_SESSION["namapetugas"] . '</h2>';
      }
      ?>
   </div>
</div>
   
</body>
</html>