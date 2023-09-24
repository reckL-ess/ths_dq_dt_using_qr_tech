
        document.addEventListener("DOMContentLoaded", function() {
            const editProfileButton = document.getElementById("editProfileButton");
            const saveProfileChangesButton = document.getElementById("saveProfileChangesButton");
            const userNameInput = document.getElementById("userName");
            const userEmailInput = document.getElementById("userEmail");

            // Function to enable input fields for editing
            function enableEdit() {
                userNameInput.removeAttribute("readonly");
                userEmailInput.removeAttribute("readonly");
                saveProfileChangesButton.removeAttribute("disabled");
            }

            // Add event listener to the "Edit Profile" button
            editProfileButton.addEventListener("click", enableEdit);

            // Fetch user profile data from the "/api/getUserProfile" endpoint
            fetch("/api/getUserProfile", {
                method: "GET",
                headers: {
                    "Authorization": "Bearer " + yourAuthToken, // Replace with the user's access token
                },
            })
            .then(response => response.json())
            .then(data => {
                // Populate user profile data
                userNameInput.value = data.name;
                userEmailInput.value = data.email;
            })
            .catch(error => {
                console.error("Error fetching user profile:", error);
            });

            // Add event listener to the "Save Changes" button
            saveProfileChangesButton.addEventListener("click", function() {
                // Disable the "Save Changes" button while updating
                saveProfileChangesButton.setAttribute("disabled", "true");

                // Get updated profile data
                const updatedName = userNameInput.value;
                const updatedEmail = userEmailInput.value;

                // Send a PUT request to update the user's profile
                fetch("/api/updateProfile", {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer " + yourAuthToken, // Replace with the user's access token
                    },
                    body: JSON.stringify({
                        name: updatedName,
                        email: updatedEmail,
                        // Add other fields to update as needed
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response (e.g., show a success message)
                    console.log("Profile updated:", data);
                })
                .catch(error => {
                    console.error("Error updating profile:", error);
                });
            });
});