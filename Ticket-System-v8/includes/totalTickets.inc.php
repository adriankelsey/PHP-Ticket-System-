<?php

require 'dbh.inc.php';


// Open Tickets Staff
$query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'OPEN'";
$result = mysqli_query($conn, $query);
$totalOpenStaff = mysqli_num_rows($result);

// Closed Tickets Staff
$query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'CLOSED'";
$result = mysqli_query($conn, $query);
$totalClosedStaff = mysqli_num_rows($result);

// Open Tickets Customer
$query = "SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'OPEN'";
$result = mysqli_query($conn, $query);
$totalOpenCustomer = mysqli_num_rows($result);

// Closed Tickets Customers
$query = "SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'CLOSED'";
$result = mysqli_query($conn, $query);
$totalClosedCustomer = mysqli_num_rows($result);

// Tickets in Progress
$query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'IN PROGRESS'
  UNION SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'IN PROGRESS'";
$result = mysqli_query($conn, $query);
$totalTicketsInProgress = mysqli_num_rows($result);

$query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'CHECK'
  UNION SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'CHECK'";
$result = mysqli_query($conn, $query);
$totalCheck = mysqli_num_rows($result);