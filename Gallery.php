<?php
       ob_start();
      session_start();
      include"includes/db_conn.php";
      include"includes/header.php";
?>
    <body>
		<header id="home">
<?php 
      include"includes/navmenu.php";
?>
		</header>

<br>


<br>

<?php
    include"includes/footer.php";
    include"includes/modals.php";
    
?>