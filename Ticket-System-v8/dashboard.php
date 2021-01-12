
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="employee and customer ticket system for problems" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/style.css">
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


        <!-- Main Container -->
        <div class="flex-container">
          <!-- Staff Tickets -->
          <!-- Open Staff Tickets -->
          <div class="row">   
            <div class="col">
                <div class="card open ticket-staff">
                  <h2 class="card-header">Open Tickets for Staff</h2>
                  <div class="card-body">
                    <h3><?php require 'includes/totalTickets.inc.php'; echo $totalOpenStaff; echo ' Open Tickets'?></h3>
                    <div class = btn-container>
                      <a href="openStaff.php" class="btn">View</a>
                      <a href="newTicketStaff.php" class="btn">Add New Staff Ticket</a>
                    </div>
                </div>
              </div>
            </div>
            <!-- Closed Staff Tickets -->
            <div class="col">
              <div class="card closed-ticket-staff">
                <h2 class="card-header">Closed Tickets for Staff</h2>
                <div class="card-body">
                      <h3><?php require 'includes/totalTickets.inc.php';echo $totalClosedStaff; echo ' Closed Tickets'?></h3>
                      <div class = btn-container>
                      <a href="closedStaff.php" class="btn">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Customer Tickets -->
          <!-- Open Customer Tickets-->
          <div class="row">   
              <div class="col">
                  <div class="card open ticket-staff">
                    <h2 class="card-header">Open Tickets for Customers</h2>
                    <div class="card-body">
                    <h3><?php require 'includes/totalTickets.inc.php';echo $totalOpenCustomer; echo ' Open Tickets'?></h3>
                      <div class = btn-container>
                        <a href="openCustomer.php" class="btn">View</a>
                        <a href="newTicketCustomer.php" class="btn">Add Customer Ticket</a>
                      </div>
                  </div>
                </div>
              </div>
              <!-- Closed Customer Tickets -->
              <div class="col">
                <div class="card closed-ticket-staff">
                  <h2 class="card-header">Closed Tickets for Customers</h2>
                  <div class="card-body">
                  <h3><?php require 'includes/totalTickets.inc.php';echo $totalClosedCustomer; echo ' Closed Tickets'?></h3>
                      <div class = btn-container>
                        <div class = btn-container>
                        <a href="closedCustomer.php" class="btn">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Check / Tickets in Progress-->
          <!-- Tickets in Progresss -->
          <div class="row">   
            <div class="col">
                <div class="card open ticket-staff">
                  <h2 class="card-header">Tickets in Progress</h2>
                  <div class="card-body">
                  <h3> <?php require 'includes/totalTickets.inc.php';echo $totalTicketsInProgress; echo ' Tickets in Progress'?></h3>
                  <div class = btn-container>
                    <div class = btn-container>
                      <a href="ticketsInProgress.php" class="btn">View</a>
                    </div>
                </div>
              </div>
            </div>
            <!-- Check -->
            <div class="col">
              <div class="card closed-ticket-staff">
                <h2 class="card-header">Check</h2>
                <div class="card-body">
                      <h3><?php require 'includes/totalTickets.inc.php';echo $totalCheck; echo ' Tickets to Check'?></h3>
                      <div class = btn-container>
                      <a href="check.php" class="btn">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    
    </html>
    