<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/b272402e67.js" crossorigin="anonymous"></script>
    <title>View Candidates</title>
    

    <style>
        td{
            color: #000;
text-align: center;
font-family: Inter;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: normal;
letter-spacing: 0.24px;

        }
    .box {
        margin: 5em 1em 1em 3em;
width: 1206px;
height: 100vh;
/* position: fixed; */
margin-left: 0%;
}

.salary_details {
overflow-x: scroll;

height: 370px;

border: 0px solid;

}



.salary_details::-webkit-scrollbar {
height: 10px;
width: 4px;
background-color: transparent;
border: 0px solid #787676;
}

.salary_details::-webkit-scrollbar-track {
background-color: transparent;
}

.salary_details::-webkit-scrollbar-thumb {
background-color: transparent;
border-radius: 2px;
}

.salary_details::-webkit-scrollbar-thumb:horizontal {
/* background-color: #fb5407ba; */
background-color:cyan;
}

thead
{
width: 1610px;
height: 81px;
flex-shrink: 0;
background: white;

}
.table-bordered thead th
{
color: black;
text-align: center;
font-family: Inter;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: 3;


}

table.table-bordered
{

width: max-content;

}
.table-bordered tr td
{

flex-shrink: 0;
border-bottom: 0.5px solid #15b5bd;
background: #D9D9D9;

}

tbody {
height: 100px; /* Adjust the height as needed */
overflow-y: scroll;
}

/* Make the header row fixed */
thead {
    width: 1223px;
height: 64px;
flex-shrink: 0;
    color: #000;
text-align: center;
font-family: Inter;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: normal;
letter-spacing: 0.24px;
}

/* Add a border to the table */
table {
border-collapse: collapse;
}

th, td ,tr {
    border-top: 1px solid #45CDC6;
    
}

.btn {
width: 68px;
height: 22px;
border: none;
flex-shrink: 0;
border-radius: 7px;
background: green;
color: #FFF;
font-size: 14px;
font-family: sans-serif;
font-style: normal;
font-weight: 700;
line-height: normal;
letter-spacing: 0.3px;
padding-bottom: 20px;

}
.btn2 {
width: 68px;
height: 22px;
border: none;
flex-shrink: 0;
border-radius:3px;
background: red;
color: #FFF;
font-size: 14px;
font-family: sans-serif;
font-style: normal;
font-weight: 700;
line-height: normal;
letter-spacing: 0.3px;
padding-bottom: 5px;
padding-top: 4px;
text-decoration:none;

}.box{
    margin-left: 75px;
    margin-top: -15%;
}

.col-md-9 {
width: 83% !important;
margin-left: 19%;
}

.col-md-3 {
width: 25%;
}



.table-bordered tr:hover td {
background-color: #FFF;
color: black;
}



.col-9 .table_over_scr_ol {


height: 500px;
margin-left: 30px;
border: 0px solid;
}

.row{
display: flex;
}
.btn_logout_back {
    margin-left: -17px;
    margin-top: 92px;
    /* position: fixed; */
    width: 87px;
    height: 39px;
    flex-shrink: 0;
background: #45CDC6;
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);


}


.button{
    margin-top: 92px;
    margin-left: 66pc;
    /* position: fixed; */
    width: 96px;
    height: 40px;
flex-shrink: 0;
background: #45CDC6;
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
 .btn_row{
    margin-bottom: 200px;
   
}

a {
  color: white;
  text-decoration: none;
}
button, input, optgroup, select, textarea {
    position: fixed;
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin-top: 17px;
    margin-left: 74px;
}

.sticky-header {
            position: sticky;
            top: 0;
            background-color: #fff; /* Change this to your desired background color */
            z-index: 1;
        }
        .icon{
    margin-top: 2pc;
    margin-left: 75pc;

}
.grid {
    margin-top: 0pc;
    margin-left: 0px;
}
.bell {
    margin-top: -23px;
    margin-left: 32px;
}
.user {
    margin-top: -25px;
    margin-left: 63px;
}
i.fas.fa-search {
    position: fixed;
    margin-top: 24px;
    margin-left: 15pc;
    font-size: 15px;
    cursor: pointer;
}
</style>
</head>
<body>
<div class="search-container">
        <input type="text" id="filterCustomerName" placeholder="Customer Name..." class="search">
    <i class="fas fa-search" style="font-size:15px; cursor: pointer;" onclick="filterTableByName()"></i>

    <div class="icon">
          
          <div class="grid"><i class="fa-solid fa-bars"></i></div>
          <div class="bell"><i class="fa-solid fa-bell"></i></div>
          <div class="user"><i class="fa-solid fa-user"></i></div> 
          </div>

</div>
    <div class="container">
                <div class="row btn_row">
                          <button type="button" class="btn_logout_back" ><a href="rtoform.php" style="color: white;">BACK</a></button>
                        <button type="button" class="button"><a href="logout.php" style="color: white;">LOGOUT</a></button></div>
                </div>
<div class="row">
<div class="col-md-3">
       
<div class="box">

 <div class="col-md-9"></div>
    <div class="salary_details">
        <table class="table table-bordered">
            <thead class="sticky-header">
                <tr class="bc">
<th>ID</th>


<th>INVOICE DATE</th>
<th>CHASSIS NO</th>
<th>VEHICLE MODEL</th>
<th>CUSTOMER NAME</th>
<th>PAYMENT TYPE</th>
<th>BRANCHES / DEALERS</th>

<th>FILE RECEIVED DATE</th>
<th>FORM20 DATE</th>
<th>FORM20 RECEIVED DDATE</th>
<th>ACCOUNTS CONFIRMATION</th>
<th>REGISTRATION DATE</th>
<th>REGISTRATION NUMBER</th>  

<th>RCSTATUS</th>
<th>RCRECDATE</th>
<th>REMARKS</th>  


<!-- <th colspan="2">EDIT</th>    -->
</tr>
            </thead>
            <tbody id="tableBody">
                <?php
                include "connect.php";
                $sve = "SELECT * FROM project";
                $ddd = mysqli_query($conn, $sve);
                while ($row = mysqli_fetch_assoc($ddd)) {
                    $id = $row['ID'];
                    $invoicedate = $row['INVOICEDATE'];
                    $chassisno= $row['CHASSISNO'];
                    $vehiclemode = $row['VEHICLEMODEL'];
                    $customername = $row['CUSTOMERNAME'];
                    $mode = $row['PAYMENTTYPE'];
                    $branchesdealers = $row['BRANCHESDEALERS'];
                    
                    $filereceiveddate = $row['FILERECEIVEDDATE'];
                    $form20date= $row['FORM20DATE'];
                    $Form20Received = $row['FORM20RECEIVEDDATE'];
                    $accountsconfirmation = $row['ACCOUNTSCONFIRMATION'];
                    $registrationdate = $row['REGISTRATIONDATE'];
                    $registrationnumber = $row['REGISTRATIONNUMBER'];

                    $rc = $row['RCSTATUS'];
                    $rcrec = $row['RCRECDATE'];
                    $remarks = $row['REMARKS'];

                 
                    ?>   
                    <tr>
                    <td><?php echo $id ?></td>
                        <td><?php echo $invoicedate ?></td>
                        <td><?php echo $chassisno ?></td>
                        <td><?php echo $vehiclemode ?></td>
                        <td><?php echo $customername ?></td>
                        <td><?php echo $mode ?></td>
                        <td><?php echo $branchesdealers  ?></td>
                        
                        <td><?php echo $filereceiveddate ?></td>
                        <td><?php echo $form20date ?></td>
                        <td><?php echo $Form20Received ?></td>
                        <td><?php echo $accountsconfirmation ?></td>
                        <td><?php echo $registrationdate ?></td>
                        <td><?php echo $registrationnumber  ?></td>

                        <td><?php echo $rc ?></td>
                        <td><?php echo $rcrec ?></td>
                        <td><?php echo $remarks  ?></td>


                        <!-- <td><a href="rtoedit.php?id=<php echo $row["ID"]; ?>" class="btn" role="button">EDIT</a></td> -->
                       
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div><br>   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButton = document.getElementById("filterButton");
        const searchInput = document.getElementById("searchInput");
        const tableRows = document.querySelectorAll(".table tbody tr");

        filterButton.addEventListener("click", function () {
            const searchText = searchInput.value.toLowerCase();

            tableRows.forEach(row => {
                const customerNameCell = row.querySelector("td:nth-child(5)");
                if (customerNameCell) {
                    const customerName = customerNameCell.textContent.toLowerCase();
                    row.style.display = customerName.includes(searchText) ? "table-row" : "none";
                }
            });
        });
    });
    document.getElementById("resetButton").addEventListener("click", function() {
  // Reset the form
  document.getElementById("myForm").reset();

  // You can also add additional actions here if needed
  // For example, clear other input fields, hide/show elements, etc.
});

</script>
<script>
  document.getElementById("filterCustomerName").addEventListener("input", filterTableByName);

  function filterTableByName() {
    const customerName = document.getElementById("filterCustomerName").value.toLowerCase();
    const tableBody = document.getElementById("tableBody");
    const rows = tableBody.getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++) {
      const row = rows[i];
      const customerNameColumn = row.getElementsByTagName("td")[4]; // Assuming customer name is in the fifth column (index 4)

      if (customerNameColumn) {
        const rowCustomerName = customerNameColumn.textContent.toLowerCase();

        // Check if the customer name contains the search term
        if (rowCustomerName.includes(customerName)) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      }
    }
  }
</script> 
</html>