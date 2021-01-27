
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="employee and customer ticket system for problems" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/form.css">
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

          if (isset($_REQUEST['staff'])){

            $tID = $_GET['staff'];
            $query = "SELECT * FROM ticket_STAFF WHERE t_ID = $tID";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
                
                echo "<div class='new1-ticket'>
                <h1></h1>
                <form class ='new-ticket-form' action = includes/updateTicket.php method= post>
                    <div class='row user'>
                        <div class='col user'>User:</div>
                        <input class='n first-name' placeholder='First Name' type='text' name= adduser value= $row[3]>
                        <input class='n last-name' placeholder='Last Name' type='text'  name= adduser value= $row[3]>
                    </div>
                    <div class='row title'>
                        <div class='col title'>Title:</div>
                        <input  class='n title' placeholder='Title' type='text' name= addtitle value= $row[1]>
                    </div>
                    <div class='row summary'>
                        <div class='col summary'>Summary:</div>
                        <input class='n summary' placeholder='Summary' type='text' name= addsummary value= $row[2]>
                    </div>
                    <div class='row user-group'>
                        <div class='col user-group'>User Group:</div>
                        <input readonly class='n user-group' type='text' name= addusergroup value= $row[5]>
                    </div>
                    <div class='row user-id'>
                        <div class='col user-id'>User ID:</div>
                        <input readonly class='n user-id' type='text' name= adduserid value= $row[4]>
                    </div>
                    <div class='row user-id'>
                        <div class='col user-id'>ID:</div>
                        <input readonly class='n id' type='text' name= addid value= $row[0]>
                    </div>
                    <div class='row priority'>
                    <div class='col priority'>Priority:</div>
                    <select class='n priority' placeholder='' name= addpriority>
                        <option value='0'>0</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                    </select>
                    </div>
                    <div class='row date'>
                        <div class='col date'>Date:</div>
                        <input readonly class='n date' type='text' name= adddate value= $row[7]>
                    </div>
                    <div class='row category'>
                    <div class='col edit category'>Category:</div>
                    <input readonly class='n date' type='text' name= adddate value= $row[6]>
                    </div>
                    <div class='row status'>
                        <div class='col status'>Status:</div>
                        <input readonly class='n status' value='OPEN' type='text' name= addstatus value= $row[9]>
                    </div>

                    

                    <div class='row buttons'>
                        <input type=submit href=includes/updateTicket.php name= updateStaffTicket class='btn add' value='UPDATE'>
                        <input type=submit href=includes/updateTicket.php name= deleteCustomerTicket class='btn add' value='DELETE'>
                    </div>
                </form>
            </div>";
          }
        }

        if (isset($_REQUEST['customer'])){

            $tID = $_GET['customer'];
            $query = "SELECT * FROM ticket_CUSTOMER WHERE t_ID = $tID";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
            echo "<div class='new1-ticket'>
            <h1></h1>
            <form class ='new-ticket-form' action = includes/updateTicket.php method= post>
                <div class='row user'>
                    <div class='col user'>User:</div>
                    <input class='n first-name' placeholder='First Name' type='text' name= adduser value= $row[3]>
                    <input class='n last-name' placeholder='Last Name' type='text'  name= adduser value= $row[3]>
                </div>
                <div class='row title'>
                    <div class='col title'>Title:</div>
                    <input  class='n title' placeholder='Title' type='text' name= addtitle value= $row[1]>
                </div>
                <div class='row summary'>
                    <div class='col summary'>Summary:</div>
                    <input class='n summary' placeholder='Summary' type='text' name= addsummary value= $row[2]>
                </div>
                <div class='row user-group'>
                    <div class='col user-group'>User Group:</div>
                    <input readonly class='n user-group' type='text' name= addusergroup value= $row[5]>
                </div>
                <div class='row user-id'>
                    <div class='col user-id'>User ID:</div>
                    <input readonly class='n user-id' type='text' name= adduserid value= $row[4]>
                </div>
                <div class='row user-id'>
                        <div class='col user-id'>ID:</div>
                        <input readonly class='n id' type='text' name= addid value= $row[0]>
                    </div>
                <div class='row priority'>
                <div class='col priority'>Priority:</div>
                <select class='n priority' placeholder='' name= addpriority>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                </select>
                </div>
                <div class='row date'>
                    <div class='col date'>Date:</div>
                    <input readonly class='n date' type='text' name= adddate value= $row[7]>
                </div>
                <div class='row category'>
                <div class='col edit category'>Category:</div>
                <input readonly class='n date' type='text' name= adddate value= $row[6]>
                </div>
                <div class='row status'>
                    <div class='col status'>Status:</div>
                    <input readonly class='n status' value='OPEN' type='text' name= addstatus value= $row[9]>
                </div>

                

                <div class='row buttons'>
                    <input type=submit href=includes/updateTicket.php name= updateStaffTicket class='btn add' value='UPDATE'>
                    <input type=submit href=includes/updateTicket.php name= deleteStaffTicket class='btn add' value='DELETE'>
                </div>
            </form>
        </div>";
          }
        }

        if (isset($_REQUEST['id'])){

            $tID = $_GET['id'];
            $query = "(SELECT * FROM ticket_CUSTOMER WHERE t_ID = $tID) UNION (SELECT * FROM ticket_STAFF WHERE t_ID = $tID)";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
            echo "<div class='new1-ticket'>
            <h1></h1>
            <form class ='new-ticket-form' action = includes/updateTicket.php method= post>
                <div class='row user'>
                    <div class='col user'>User:</div>
                    <input class='n first-name' placeholder='First Name' type='text' name= adduser value= $row[3]>
                    <input class='n last-name' placeholder='Last Name' type='text'  name= adduser value= $row[3]>
                </div>
                <div class='row title'>
                    <div class='col title'>Title:</div>
                    <input  class='n title' placeholder='Title' type='text' name= addtitle value= $row[1]>
                </div>
                <div class='row summary'>
                    <div class='col summary'>Summary:</div>
                    <input class='n summary' placeholder='Summary' type='text' name= addsummary value= $row[2]>
                </div>
                <div class='row user-group'>
                    <div class='col user-group'>User Group:</div>
                    <input readonly class='n user-group' type='text' name= addusergroup value= $row[5]>
                </div>
                <div class='row user-id'>
                    <div class='col user-id'>User ID:</div>
                    <input readonly class='n user-id' type='text' name= adduserid value= $row[4]>
                </div>
                <div class='row user-id'>
                        <div class='col user-id'>ID:</div>
                        <input readonly class='n id' type='text' name= addid value= $row[0]>
                    </div>
                <div class='row priority'>
                <div class='col priority'>Priority:</div>
                <select class='n priority' placeholder='' name= addpriority>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                </select>
                </div>
                <div class='row date'>
                    <div class='col date'>Date:</div>
                    <input readonly class='n date' type='text' name= adddate value= $row[7]>
                </div>
                <div class='row category'>
                <div class='col edit category'>Category:</div>
                <input readonly class='n date' type='text' name= adddate value= $row[6]>
                </div>
                <div class='row status'>
                    <div class='col status'>Status:</div>
                    <input readonly class='n status' value='OPEN' type='text' name= addstatus value= $row[9]>
                </div>

                

                <div class='row buttons'>
                    <input type=submit href=includes/updateTicket.php name= updateStaffTicket class='btn add' value='UPDATE'>
                    <input type=submit href=includes/updateTicket.php name= deleteStaffTicket class='btn add' value='DELETE'>
                </div>
            </form>
        </div>";
          }
        }

        if (isset($_REQUEST['idStaff'])){

            $tID = $_GET['idStaff'];
            $query = "(SELECT * FROM ticket_STAFF WHERE t_ID = $tID)";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
            echo "<div class='new1-ticket'>
            <h1></h1>
            <form class ='new-ticket-form' action = includes/updateTicket.php method= post>
                <div class='row user'>
                    <div class='col user'>User:</div>
                    <input class='n first-name' placeholder='First Name' type='text' name= adduser value= $row[3]>
                    <input class='n last-name' placeholder='Last Name' type='text'  name= adduser value= $row[3]>
                </div>
                <div class='row title'>
                    <div class='col title'>Title:</div>
                    <input  class='n title' placeholder='Title' type='text' name= addtitle value= $row[1]>
                </div>
                <div class='row summary'>
                    <div class='col summary'>Summary:</div>
                    <input class='n summary' placeholder='Summary' type='text' name= addsummary value= $row[2]>
                </div>
                <div class='row user-group'>
                    <div class='col user-group'>User Group:</div>
                    <input readonly class='n user-group' type='text' name= addusergroup value= $row[5]>
                </div>
                <div class='row user-id'>
                    <div class='col user-id'>User ID:</div>
                    <input readonly class='n user-id' type='text' name= adduserid value= $row[4]>
                </div>
                <div class='row user-id'>
                        <div class='col user-id'>ID:</div>
                        <input readonly class='n id' type='text' name= addid value= $row[0]>
                    </div>
                <div class='row priority'>
                <div class='col priority'>Priority:</div>
                <select class='n priority' placeholder='' name= addpriority>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                </select>
                </div>
                <div class='row date'>
                    <div class='col date'>Date:</div>
                    <input readonly class='n date' type='text' name= adddate value= $row[7]>
                </div>
                <div class='row category'>
                <div class='col edit category'>Category:</div>
                <input readonly class='n date' type='text' name= adddate value= $row[6]>
                </div>
                <div class='row status'>
                    <div class='col status'>Status:</div>
                    <input readonly class='n status' value='OPEN' type='text' name= addstatus value= $row[9]>
                </div>

                

                <div class='row buttons'>
                    <input type=submit href=includes/updateTicket.php name= updateStaffTicket class='btn add' value='UPDATE'>
                    <input type=submit href=includes/updateTicket.php name= deleteStaffTicket class='btn add' value='DELETE'>
                </div>
            </form>
        </div>";
          }
        }

        if (isset($_REQUEST['idCustomer'])){

            $tID = $_GET['idCustomer'];
            $query = "(SELECT * FROM ticket_CUSTOMER WHERE t_ID = $tID)";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
            echo "<div class='new1-ticket'>
            <h1></h1>
            <form class ='new-ticket-form' action = includes/updateTicket.php method= post>
                <div class='row user'>
                    <div class='col user'>User:</div>
                    <input class='n first-name' placeholder='First Name' type='text' name= adduser value= $row[3]>
                    <input class='n last-name' placeholder='Last Name' type='text'  name= adduser value= $row[3]>
                </div>
                <div class='row title'>
                    <div class='col title'>Title:</div>
                    <input  class='n title' placeholder='Title' type='text' name= addtitle value= $row[1]>
                </div>
                <div class='row summary'>
                    <div class='col summary'>Summary:</div>
                    <input class='n summary' placeholder='Summary' type='text' name= addsummary value= $row[2]>
                </div>
                <div class='row user-group'>
                    <div class='col user-group'>User Group:</div>
                    <input readonly class='n user-group' type='text' name= addusergroup value= $row[5]>
                </div>
                <div class='row user-id'>
                    <div class='col user-id'>User ID:</div>
                    <input readonly class='n user-id' type='text' name= adduserid value= $row[4]>
                </div>
                <div class='row user-id'>
                        <div class='col user-id'>ID:</div>
                        <input readonly class='n id' type='text' name= addid value= $row[0]>
                    </div>
                <div class='row priority'>
                <div class='col priority'>Priority:</div>
                <select class='n priority' placeholder='' name= addpriority>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                </select>
                </div>
                <div class='row date'>
                    <div class='col date'>Date:</div>
                    <input readonly class='n date' type='text' name= adddate value= $row[7]>
                </div>
                <div class='row category'>
                <div class='col edit category'>Category:</div>
                <input readonly class='n date' type='text' name= adddate value= $row[6]>
                </div>
                <div class='row status'>
                    <div class='col status'>Status:</div>
                    <input readonly class='n status' value='OPEN' type='text' name= addstatus value= $row[9]>
                </div>

                

                <div class='row buttons'>
                    <input type=submit href=includes/updateTicket.php name= updateStaffTicket class='btn add' value='UPDATE'>
                    <input type=submit href=includes/updateTicket.php name= deleteStaffTicket class='btn add' value='DELETE'>
                </div>
            </form>
        </div>";
          }
        }
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