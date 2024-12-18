window.addEventListener("load", function () {
    // Once the page is loaded, hide the loader and show the content
    document.getElementById("loader").style.display = "none";
    // document.getElementById('content').style.display = 'block';
});

let phoneNumberIndex = 1; // Start from index 1 for the second phone number field

// Handle adding a new phone number field
document
    .getElementById("addPhoneNumber")
    .addEventListener("click", function () {
        const container = document.getElementById("phoneNumbersContainer");
        const newField = document.createElement("div");
        newField.classList.add("phone-number-field", "row", "mb-2");
        newField.innerHTML = `
            <!-- Country Field -->
            <div class="col-sm-4">
                <input type="text" name="phone_numbers[${phoneNumberIndex}][country]" class="form-control requiredCheck" 
                    placeholder="Country" required>
            </div>
            
            <!-- Phone Number Field -->
            <div class="col-sm-4">
                <input type="text" name="phone_numbers[${phoneNumberIndex}][phone]" class="form-control requiredCheck" 
                    placeholder="Phone Number" required>
            </div>
            
            <!-- Remove Button -->
            <div class="col-sm-4 d-flex align-items-center">
                <button type="button" class="remove-phone-number btn btn-danger">Remove</button>
            </div>
        `;
        container.appendChild(newField);

        // Set up event listener for the remove button in the newly added field
        newField
            .querySelector(".remove-phone-number")
            .addEventListener("click", function () {
                newField.remove();
            });

        phoneNumberIndex++;
    });
