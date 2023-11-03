


























<!----Offer Details---->
<div class="modal-overlay" id="offerDetailsModal">
    <div class="modal-content">
        <span class="close-button" id="closeOfferDetailsModal">&times;</span>
        <div class="sales-border">
            <div class="options">
                <div class="row">

                        </div>
                    </div>
                    <h2>Offer Details Form</h2>
                    <form class="Offer-Details" action="process_Offer-Details.php" method="post">
                    <div class="row">
                <div class="col-6">
                    <label for="roadsideAssistance">Road Side Assistance</label>
                    <input type="text" class="invoice" name="roadsideAssistance" id="roadsideAssistance">
                </div>
                <div class="col-6">
                    <label for="customerSideInsurance">Customer Side Insurance</label>
                    <input type="text" class="invoice" name="customerSideInsurance" id="customerSideInsurance">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="extendedWarranty">Extended Warranty</label>
                    <input type="text" class="invoice" name="extendedWarranty" id="extendedWarranty">
                </div>
                <div class="col-6">
                    <label for="cashDiscount">Cash Discount</label>
                    <input type="text" class="invoice" name="cashDiscount" id="cashDiscount">
                </div>
            </div>
        </form>  
                </div>
            </div>
        </div>
        <form class="form-offer-details" action="process_offer_details.php" method="post">
            <!-- Define your Offer Details form fields here -->
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // ... (Your existing JavaScript code) ...

    // Handle the click event for the Offer Details button
    const openOfferDetailsModalButton = document.querySelector(".offer");
    openOfferDetailsModalButton.addEventListener("click", function() {
        const offerDetailsModal = document.getElementById("offerDetailsModal");
        offerDetailsModal.style.display = "block";
    });

    // Handle the close button for the Offer Details modal
    const closeOfferDetailsModalButton = document.getElementById("closeOfferDetailsModal");
    closeOfferDetailsModalButton.addEventListener("click", function() {
        const offerDetailsModal = document.getElementById("offerDetailsModal");
        offerDetailsModal.style.display = "none";
    });
});
</script>

<!----File Details--->

<div class="modal-overlay" id="fileDetailsModal">
    <div class="modal-content">
        <span class="close-button" id="closeFileDetailsModal">&times;</span>
        <h2>File Details</h2>
<form class="File-Details" action="process_File-Details.php" method="post">
    <div class="form-file-details">
        <div class="row">
            <div class="col-6">
                <label for="ip_receivable">IP Receivable</label>
                <input type="text" class="invoice" name="ip_receivable" id="ip_receivable">
            </div>
            <div class="col-6">
                <label for="ip_received">IP Received</label>
                <input type="text" class="invoice" name="ip_received" id="ip_received">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="finance_receivable">Finance Receivable</label>
                <input type="text" class="invoice" name="finance_receivable" id="finance_receivable">
            </div>
            <div class="col-6">
                <label for="finance_received">Finance Received</label>
                <input type="text" class="invoice" name="finance_received" id="finance_received">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="exchange_receivable">Exchange Receivable</label>
                <input type="text" class="invoice" name="exchange_receivable" id="exchange_receivable">
            </div>
            <div class="col-6">
                <label for "exchange_received">Exchange Received</label>
                <input type="text" class="invoice" name="exchange_received" id="exchange_received">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="balance_amount">Balance Amount</label>
                <input type="text" class="invoice" name="balance_amount" id="balance_amount">
            </div>
            <div class="col-6">
                <label for="status">Status</label>
                <input type="text" class="invoice" name="status" id="status">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="file_closing_date">File Closing Date</label>
                <input type="text" class="invoice" name="file_closing_date" id="file_closing_date">
            </div>
            <div class="col-6">
                <label for="remarks">Remarks</label>
                <input type="text" class="invoice" name="remarks" id="remarks">
            </div>
        </div>
    </div>
</form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get references to the modal and buttons
    const fileDetailsModal = document.getElementById("fileDetailsModal");
    const openFileDetailsModalButton = document.querySelector(".file");
    const closeFileDetailsModalButton = document.getElementById("closeFileDetailsModal");

    // Add an event listener to open the modal when the button is clicked
    openFileDetailsModalButton.addEventListener("click", function() {
        fileDetailsModal.style.display = "block";
    });

    // Add an event listener to close the modal when the close button is clicked
    closeFileDetailsModalButton.addEventListener("click", function() {
        fileDetailsModal.style.display = "none";
    });
});
</script>




function retrieveFileData() {
        const filecustomercode = document.getElementById("filecustomercode").value;
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `get_file_data.php?customerCode=${filecustomercode}`, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.error) {
                    alert(data.error);
                } else {
                    document.getElementById("ip_receivable").value = data.ip_receivable;
                    document.getElementById("ip_received").value = data.ip_received;
                    document.getElementById("finance_receivable").value = data.finance_receivable;
                    document.getElementById("finance_received").value = data.finance_received;
                    document.getElementById("exchange_receivable").value = data.exchange_receivable;
                    document.getElementById("exchange_received").value = data.exchange_received;
                    // Handle other fields in a similar way
                }
            }
        };
        xhr.send();
    }