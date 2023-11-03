<?php 
  session_start(); // Resume the session
  include "connect.php";
  // Check if the user is not logged in
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // User is not logged in, redirect to login.php
  header("Location: login.php");
  exit; // Terminate the script after redirection
  }
  // Get the username from the session
  $username = $_SESSION['username'];

  // Prepare and execute a query to fetch the user's place and status
  $query = "SELECT `place`, `status` FROM `user` WHERE `username` = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($result)) {
  // Get the user's place and status
  $userPlace = $row['place'];
  $userStatus = $row['status'];
  } else {
  // Handle the case where user data couldn't be retrieved
  $userPlace = "Unknown";
  $userStatus = "Unknown";
  }

  // Retrieve the customer credit value from the session
$customerCredit = isset($_SESSION['customerCredit']) ? $_SESSION['customerCredit'] : 0;
  ?>


<?php
// include "connect.php";

// if (isset($_POST['exchangesave'])) {
//     // Extract exchange form data
//     $exchange = $_POST["exchange"];
//     $exchangeDate = $_POST["exchange_date"];
//     $received = $_POST["received"];
//     $receivedDate = $_POST["received_date"];
//     $customerCode = $_POST["exchangeCustomerCode"];
//     $customerName = $_POST["exchangeCustomerName"];

//     // Prepare and execute the SQL update statement
//     $sql = "UPDATE project SET EXCHANGE = '$exchange', EXCHANGEDATE = '$exchangeDate', RECEIVED = '$received', RECEIVEDDATE = '$receivedDate' WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";

//     if ($conn->query($sql) === TRUE) {
//         echo "Exchange details updated successfully.";
//     } else {
//         echo "Error updating exchange details: " . $conn->error;
//     }
// }

include "connect.php";

if (isset($_POST['exchangesave'])) {
    $customerCode = $_POST["exchangeCustomerCode"];
    $customerName = $_POST["exchangeCustomerName"];

    // Check the STATUS before updating
    $checkStatusQuery = "SELECT STATUS FROM project WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";
    $statusResult = $conn->query($checkStatusQuery);

    if ($statusResult) {
        $row = $statusResult->fetch_assoc();
        if ($row['STATUS'] !== 'Closed') {
            // If the status is not 'Closed', proceed with the update
            $exchange = $_POST["exchange"];
            $exchangeDate = $_POST["exchange_date"];
            $received = $_POST["received"];
            $receivedDate = $_POST["received_date"];

            // Prepare and execute the SQL update statement
            $sql = "UPDATE project SET EXCHANGE = '$exchange', EXCHANGEDATE = '$exchangeDate', RECEIVED = '$received', RECEIVEDDATE = '$receivedDate' WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";

            if ($conn->query($sql) === TRUE) {
                echo "Exchange details updated successfully.";
            } else {
                echo "Error updating exchange details: " . $conn->error;
            }
        } else {
            echo "Cannot update exchange details because the STATUS is 'Closed'.";
        }
    }
}
?>


<?php
include "connect.php";

if (isset($_POST['financesave'])) {
    $customerCode = $_POST["code"];
    $customerName = $_POST["name"];
   

         
    $ipreceivable = $_POST["ip_receivable"];
    $ipreceived = $_POST["ip_received"];
    $financereceivable = $_POST["finance_receivable"];
    $financereceived = $_POST["finance_received"];

    // Prepare and execute the SQL update statement
    $sql = "UPDATE project SET IPRECEIVABLE = '$ipreceivable', IPRECEIVED = '$ipreceived', FINANCERECEIVABLE = '$financereceivable', FINANCERECEIVED = '$financereceived' WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";

    if ($conn->query($sql) === TRUE) {
        echo "Finance details updated successfully.";
    } else {
        echo "Error updating exchange details: " . $conn->error;
    }
}
?>



<?php
include "connect.php";

if (isset($_POST['cashsave'])) {
    // Retrieve values from the form
    $customerCode = $_POST["cashOfferCustomerCode"];
    $customerName = $_POST["cashOfferCustomerName"];


    
        // Check the status before proceeding with the update
        $sqlCheckStatus = "SELECT STATUS FROM project WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";
        $resultCheckStatus = $conn->query($sqlCheckStatus);
        
        if ($resultCheckStatus) {
            $row = $resultCheckStatus->fetch_assoc();
            $status = $row['STATUS'];
            
            if ($status !== 'Closed') {


    $roadsideAssistance = $_POST["roadsideAssistance"];
    $customerSideInsurance = $_POST["customerSideInsurance"];
    $extendedWarranty = $_POST["extendedWarranty"];
    $cashDiscount = $_POST["cashDiscount"];
   
    $cashOffer = floatval($_POST["Balance"]);

    // Perform the database update
    $sql = "UPDATE project SET ROADSIDEASSISTANCE = '$roadsideAssistance', CUSTOMERSIDEINSURANCE = '$customerSideInsurance', EXTENDEDWARRANTY = '$extendedWarranty', CASHDISCOUNT = '$cashDiscount', CASHOFFERAMT = '$cashOffer' WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";

    if ($conn->query($sql) === TRUE) {
        echo "Cash details updated successfully.";
    } else {
        echo "Error updating cash details: " . $conn->error;
    }
} else {
    echo "Cannot update cash details because the STATUS is 'Closed'.";
}
}
}
?>


<?php
include "connect.php";


if (isset($_POST['giftsave'])) {
    $customerCode = $_POST["giftcustomercode"];
    $customerName = $_POST["giftcustomername"];

    // Check the status before proceeding with the update
    $sqlCheckStatus = "SELECT STATUS FROM project WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";
    $resultCheckStatus = $conn->query($sqlCheckStatus);
    
    if ($resultCheckStatus) {
        $row = $resultCheckStatus->fetch_assoc();
        $status = $row['STATUS'];
        
        if ($status !== 'Closed') {
            // Status is not Closed, proceed with the update
    $basicfit = $_POST["basicfit"];
    $petrol = $_POST["petrol"];
    $mechanic = $_POST["mechanic"];
    $vehiclecover = $_POST["vehiclecover"];
    $extrafit = $_POST["extrafit"];
    $anyother = $_POST["anyother"];

    


    // Prepare and execute the SQL update statement
    $gift = "UPDATE project SET BASICFITTINGS = '$basicfit', PETROL = '$petrol', MECHANICCOMMISSION = '$mechanic', VEHICLECOVER = '$vehiclecover', EXTRAFITTING = '$extrafit', ANYOTHER = '$anyother' WHERE CUSTOMERCODE = '$customerCode' AND CUSTOMERNAME = '$customerName'";

    if ($conn->query($gift) === TRUE) {
        echo "Gift details updated successfully.";
    } else {
        echo "Error updating exchange details: " . $conn->error;
    }
} else {
    echo "Cannot update Gift details because the STATUS is 'Closed'.";
}
}
}
?>




<?php
include "connect.php";
if (isset($_POST['filesave'])) {
    $filecustomerCode = $_POST["filecustomercode"];
    $filecustomerName = $_POST["filecustomername"];
    $status = $_POST["status"];


       // Check the status before proceeding with the update
       $sqlCheckStatus = "SELECT STATUS FROM project WHERE CUSTOMERCODE = '$filecustomerCode' AND CUSTOMERNAME = '$filecustomerName'";
       $resultCheckStatus = $conn->query($sqlCheckStatus);
       
       if ($resultCheckStatus) {
           $row = $resultCheckStatus->fetch_assoc();
           $currentStatus = $row['STATUS'];
           
           if ($currentStatus !== 'Closed') {


    $file_closing_date = $_POST["file_closing_date"];
    $remarks = $_POST["remarks"];
   
    $sql = "UPDATE project SET 	STATUS = '$status', FILECLOSINGDATE = '$file_closing_date', REMARKS = '$remarks' WHERE CUSTOMERCODE = '$filecustomerCode' AND CUSTOMERNAME = '$filecustomerName'";

    if ($conn->query($sql) === TRUE) {
        echo "File details updated successfully.";
    } else {
        echo "Error updating exchange details: " . $conn->error;
    }
} else {
    echo "Cannot update File details because the STATUS is 'Closed'.";
}
}
}
?>

<?php
include "connect.php";

if (isset($_POST['acc_save'])) {
    $acccustname = $_POST["acccustname"];
    $acccustcode = $_POST["acccustcode"];
    
// Check the status before proceeding with the update
$sqlCheckStatus = "SELECT STATUS FROM project WHERE CUSTOMERCODE = '$acccustcode' AND CUSTOMERNAME = '$acccustname'";
$resultCheckStatus = $conn->query($sqlCheckStatus);

if ($resultCheckStatus) {
    $row = $resultCheckStatus->fetch_assoc();
    $currentStatus = $row['STATUS'];
    
    if ($currentStatus !== 'Closed') {
        // Status is not Closed, proceed with the update

    $acc_verified_date = $_POST["acc_verified_date"];
    $rto_status = $_POST["rto_status"];

    // Update the values in the database
    $sql = "UPDATE project SET ACCOUNTVERIFIEDDATE = '$acc_verified_date', RTOSTATUS = '$rto_status' WHERE CUSTOMERCODE = '$acccustcode' AND CUSTOMERNAME = '$acccustname'";

    if ($conn->query($sql) === TRUE) {
        echo "Account details updated successfully.";
    } else {
        echo "Error updating account details: " . $conn->error;
    }
} else {
    echo "Cannot update Account details because the STATUS is 'Closed'.";
}
}
}
?>