
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="employee and customer ticket system for problems" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/view.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <script src="https://kit.fontawesome.com/3ab388c8b8.js" crossorigin="anonymous"></script>
      <title>Ticket System</title>
    
    </head>
    <body>
      <!-- Navbar -->
      <nav class="navbar-main">
        <h1><a class="navbar-logo" href="#">Adrian Kelsey</a></h1>
        <ul class="nav-items">
            <li class="nav-i"><a href="dashboard.php">dashboard</a></li>
            <div class="dropdown">
                <li class="nav-i"><a class="tickets" href="#">tickets</a></li>
                <div class= "dropdown-contents">
                    <a class= "ticket open">Open Tickets</a>
                    <a class= "ticket closed">Closed Tickets</a>
                </div>
            </div>
            <li class="nav-i"><a href="#">add ticket</a></li>
        </ul>
        <form class="navbar-form" action="search.php" method="post">
          <input class="search-box" type="text" name="searchresult" value="">
          <i class="fas fa-search"></i>
        </form>
      </nav>

      <?php
          require 'includes/dbh.inc.php';

          $query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'CHECK' UNION SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'CHECK'";
          $result = mysqli_query($conn, $query);
          $total = mysqli_num_rows($result);
          
          echo "<div class = 'view'>";
          echo "<p> <div class = 'row header'>
                <div class='col header uidHeader'> ID </div> <div class='col header userHeader'> Name </div> <div class='col header titleHeader'> Title </div><div class='col header usergroupHeader'> Usergroup </div><div class='col header categoryHeader'> Category </div>
                </div> </p>
          ";
  
                  while($row = mysqli_fetch_row($result)){
                      echo "
                          <p> 
                          <div class = 'row'>
                          <div class='col uid'>$row[0]</div> <div class='col user'> $row[3]</div> <div class='col title'>$row[1]</div><div class='col usergroup'>$row[5]</div><div class='col category'>$row[6]</div><a href= viewTicket.php?id=$row[0] class='btn'>View</a>
                          </div>
                          </p>
                      ";
                  }
        echo "</div>"
      ?>

</body>
