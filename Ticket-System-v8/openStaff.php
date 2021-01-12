
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

          $query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'OPEN' ORDER BY 't_ID' ";
          $result = mysqli_query($conn, $query);
          $total = mysqli_num_rows($result);
          
          echo "<div class = 'view'>";
          echo" <nav class= 'nav-list'>
                  <form class='nav-items' name='filter' action='openStaff.php'>
                    <li class='nav-item'> Category: </li>
                    <select class='nav category' name='addcat'>
                            <option value='SOFTWARE'>Software</option>
                            <option value='GENERAL'>General</option>
                            <option value='HARDWARE'>Hardware</option>
                            <option value='MISC'>Misc</option>
                    </select>
                    <input type=submit name= filter class='filter-btn' value='Filter'>
                  </form>

                  <form class='navbar-form' action='search.php' method='post'>
                    <input class='search-box' type='text' name='searchresult' value=''>
                    <i class='fas fa-search'></i>
                  </form>
                </nav>";
          echo "<p> <div class = 'row header'>
                <div class='col header uidHeader'> ID </div> <div class='col header userHeader'> Name </div> <div class='col header titleHeader'> Title </div><div class='col header usergroupHeader'> Usergroup </div><div class='col header categoryHeader'> Category </div>
                </div> </p>
          ";

                if(isset($_REQUEST['filter'])){
                  $getresult = $_POST['addcat'];
                  $queryUser = "(SELECT * FROM ticket_STAFF WHERE t_ID LIKE '%$getresult%' OR t_USER LIKE '%$getresult%' OR t_UID LIKE '%$getresult%' OR t_CAT LIKE '%$getresult%') UNION (SELECT * FROM ticket_CUSTOMER WHERE t_ID LIKE '%$getresult%' OR t_USER LIKE '%$getresult%' OR t_UID LIKE '%$getresult%' OR t_CAT LIKE '%$getresult%')";
                  $result = mysqli_query($conn, $queryUser);
                  while($row = mysqli_fetch_row($result)){
                    echo "
                        <p> 
                        <div class = 'row'>
                        <div class='col uid'>$row[0]</div> <div class='col user'> $row[3]</div> <div class='col title'>$row[1]</div><div class='col usergroup'>$row[5]</div><div class='col category'>$row[6]</div><a href= viewTicket.php?staff=$row[0] class='btn'>View</a>
                        </div>
                        </p>
                    ";
                }
                } else{
                  while($row = mysqli_fetch_row($result)){
                      echo "
                          <p> 
                          <div class = 'row'>
                          <div class='col uid'>$row[0]</div> <div class='col user'> $row[3]</div> <div class='col title'>$row[1]</div><div class='col usergroup'>$row[5]</div><div class='col category'>$row[6]</div><a href= viewTicket.php?staff=$row[0] class='btn'>View</a>
                          </div>
                          </p>
                      ";
                  }
                }

        echo "</div>"
      ?>

</body>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>