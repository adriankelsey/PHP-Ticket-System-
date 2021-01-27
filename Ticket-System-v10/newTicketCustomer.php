
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
        <!-- Main Container -->
        <?php
        $timestamp = time();
        $currentdate = date("m/d/Y h:i:s", time());
        $rand1 = rand(10,1000);
        $rand2 = rand(10,1000);
        $rand3 = rand(10,1000);
        $rand = $rand1 + $rand2 + $rand3;
        echo "<div class='new1-ticket'>
                <h1>New Customer Ticket</h1>
                <form class ='new-ticket-form' action = includes/addTicket.php method= post>
                    <div class='row user'>
                        <div class='col user'>User:</div>
                        <input class='n first-name' placeholder='First Name' type='text' name= adduser>
                        <input class='n last-name' placeholder='Last Name' type='text'  name= adduser>
                    </div>
                    <div class='row title'>
                        <div class='col title'>Title:</div>
                        <input class='n title' placeholder='Title' type='text' name= addtitle>
                    </div>
                    <div class='row sumarry'>
                        <div class='col summary'>Summary:</div>
                        <input class='n summary' placeholder='Summary' type='text' name= addsummary>
                    </div>
                    <div class='row user-group'>
                        <div class='col user-group'>User Group:</div>
                        <input readonly class='n user-group' value='CUSTOMER' type='text' name= addusergroup>
                    </div>
                    <div class='row user-id'>
                        <div class='col user-id'>User ID:</div>
                        <input class='n user-id' value= $rand type='text' name= adduserid>
                    </div>
                    <div class='row priority'>
                        <div class='col priority'>Priority:</div>
                        <select class='n priority' placeholder='' name= addpriority>
                            <option value= 0>0</option>
                            <option value= 1>1</option>
                            <option value= 2>2</option>
                            <option value= 3>3</option>
                            <option value= 4>4</option>
                        </select>
                    </div>
                    <div class='row date'>
                        <div class='col date'>Date:</div>
                        <input readonly class='n priotrity' value= $currentdate type='text' name= adddate>
                    </div>
                    <div class='row category'>
                        <div class='col category'>Category:</div>
                        <select class='n category' placeholder='' name= addcategory>
                            <option value='TECHNICAL'>TECHNICAL</option>
                            <option value='GENERAL'>GENERAL</option>
                            <option value='HARDWARE'>ORDER</option>
                            <option value='PAYMENT'>PAYMENT</option>
                        </select>
                    </div>
                    <div class='row status'>
                        <div class='col status'>Status:</div>
                        <input class='n priotrity' value='OPEN' type='text' name= addstatus>
                    </div>

                    

                    <div class='row buttons'>
                        <input type=submit href= includes/addTicket.php name= submitCustomerTicket class='btn add' value='ADD'>
                        <a href='dashboard.php' class='btn back'>Back</a>
                    </div>
                </form>
            </div>";
        ?>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    
    </html>
    