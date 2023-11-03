document.addEventListener("DOMContentLoaded", function() {
    const tableRows = document.querySelectorAll("tbody tr");
    const dataForm = document.querySelector(".form");
    const inputs = dataForm.querySelectorAll("input[name], select[name]");
    const tableContainer = document.querySelector(".table-container");
    const formContainer = document.querySelector(".container-box");
    const popupTable = document.querySelector(".table");

    // Add a click event listener to each row in the table
    tableRows.forEach(row => {
        row.addEventListener("click", function() {
            const selectedId = this.getAttribute("data-id");
            let rowData = {
                invoice: this.cells[0].textContent,
                chassis: this.cells[1].textContent,
                model: this.cells[2].textContent,
                custname: this.cells[3].textContent,
                payment: this.cells[4].textContent,
                branch: this.cells[5].textContent
            };

            // Populate the form fields with the extracted data
            inputs.forEach(input => {
                const fieldName = input.getAttribute("name");
                if (rowData[fieldName] !== undefined) {
                    input.value = rowData[fieldName];
                }
            });

            // Set the selected ID in the hidden input field
            const selectedInput = document.querySelector(`input[name="selected_id"]`);
            selectedInput.value = selectedId;

            // Hide the table and show the form
            tableContainer.style.display = "none";
            formContainer.style.display = "block";
            formContainer.classList.remove("blur");

            // Hide the table explicitly
            popupTable.style.display = "none";
        });
    });

    // Handle the form submission to keep the form displayed
    dataForm.addEventListener("submit", function(event) {
        event.preventDefault();
        // Your form submission logic here

        // Optionally, you can reset the form fields and hide the form
        // Reset the form fields
        inputs.forEach(input => {
            input.value = "";
        });
        // Hide the form and show the table
        formContainer.style.display = "none";
        tableContainer.style.display = "block";
        formContainer.classList.add("blur");
    });
});




document.addEventListener("DOMContentLoaded", function() {
    const tableRows = document.querySelectorAll("tbody tr");
    const dataForm = document.querySelector(".form1"); // Select the form for Ex showroom, LT/RT, Insurance, Pro Plus
    const inputs = dataForm.querySelectorAll("input[name]"); // Select input fields inside the form

    // Add a click event listener to each row in the table
    tableRows.forEach(row => {
        row.addEventListener("click", function() {
            // Get the values for Ex showroom, LT/RT, Insurance, and Pro Plus from the table
            const exShowroomValue = this.cells[6].textContent;
            const ltRtValue = this.cells[7].textContent;
            const insuranceValue = this.cells[8].textContent;
            const proPlusValue = this.cells[9].textContent;

            // Update the input fields in the form with these values
            document.querySelector("input[name='exshow']").value = exShowroomValue;
            document.querySelector("input[name='lt']").value = ltRtValue;
            document.querySelector("input[name='insurance']").value = insuranceValue;
            document.querySelector("input[name='proplus']").value = proPlusValue;
        });
    });
});
