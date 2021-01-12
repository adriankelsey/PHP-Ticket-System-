
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="employee and customer ticket system for problems" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <script src="https://kit.fontawesome.com/3ab388c8b8.js" crossorigin="anonymous"></script>
      <title>Ticket System</title>
    
    </head>
    <body>
      <!-- Navbar -->
      <nav class="navbar">
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


  <!-- Add Customer Ticket -->
  <div class="add-ticket">
    <?php
    require 'dbh.inc.php';
    if (isset($_POST['updateCustomerTicket'])){
      // POST Variables from form 
      $status = $_POST['addstatus'];
      $priority = $_POST['addpriority'];
      $tID = $_POST['addid'];
      // SQL query insert variables into customer table
      $query = "UPDATE ticket_CUSTOMER SET t_PRIORITY = $priority, t_STATUS = '$status' WHERE t_ID = $tID";
      $result = mysqli_query($conn, $query);

      if ($result == 1){
      echo "Ticket Added Successfully";
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
      else{
      echo "Error Adding Ticket: " . mysqli_error($conn);
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
    }

    if (isset($_POST['deleteCustomerTicket'])){
      // POST Variables from form 
      $tID = $_POST['addid'];
      // SQL query insert variables into customer table
      $query = "DELETE FROM ticket_STAFF WHERE t_ID= $tID";
      $result = mysqli_query($conn, $query);

      if ($result == 1){
      echo "Ticket Successfully Deleted";
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
      else{
      echo "Error Deleting Ticket: " . mysqli_error($conn);
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
    }

    if (isset($_REQUEST['updateStaffTicket'])){
      // POST Variables from form 
      $status = $_POST['addstatus'];
      $priority = $_POST['addpriority'];
      $tID = $_POST['addid'];
      // SQL query update variables in staff table
      $query = "UPDATE ticket_STAFF SET t_PRIORITY = $priority, t_STATUS = '$status' WHERE t_ID = $tID";
      $result = mysqli_query($conn, $query);

      if ($result == 1){
      echo "Ticket Successfully Updated";
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
      else{
      echo "Error Updating Ticket: " . mysqli_error($conn);
      //header("refresh:3; url= ../dashboard.php");
      exit();
      }
    }

    if (isset($_POST['deleteStaffTicket'])){
      // POST Variables from form 
      $tID = $_POST['addid'];
      // SQL query insert variables into customer table
      $query = "DELETE FROM ticket_CUSTOMER WHERE t_ID= $tID";
      $result = mysqli_query($conn, $query);

      if ($result == 1){
      echo "Ticket Successfully Deleted";
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
      else{
      echo "Error Deleting Ticket: " . mysqli_error($conn);
      header("refresh:2; url= ../dashboard.php");
      exit();
      }
    }

    mysqli_close($conn); //disconnect
    ?>
  </div>
</body>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>