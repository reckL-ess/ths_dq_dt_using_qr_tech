<main>
    <div id="centeredContent">
        <!-- Add this code within the <main> section of your HTML -->
        <section id="maintenance" class="maintenance-section">
            <h2>Maintenance and Administration</h2>
    
            <!-- System Maintenance and Updates -->
            <div id="systemMaintenance" class="maintenance-item">
                <h3>System Maintenance and Updates</h3>
                <p>Check for updates and perform system maintenance tasks here.</p>
                <button id="checkUpdatesButton" class="maintenance-button">Check for Updates</button>
                <button id="performMaintenanceButton" class="maintenance-button">Perform Maintenance</button>
            </div>
    
            <!-- Backup and Data Recovery -->
            <div id="backupRecovery" class="maintenance-item">
                <h3>Backup and Data Recovery</h3>
                <p>Manage data backup and recovery procedures here.</p>
                <button id="backupDataButton" class="maintenance-button">Backup Data</button>
                <button id="recoverDataButton" class="maintenance-button">Recover Data</button>
            </div>
    
            <!-- User Access Management -->
            <div id="userAccess" class="maintenance-item">
                <h3>User Access Management</h3>
                <p>Manage user access, permissions, and roles.</p>
                <button id="manageUsersButton" class="maintenance-button">Manage Users</button>
                <button id="managePermissionsButton" class="maintenance-button">Manage Permissions</button>
            </div>
        </section>
    </div>
</main>

<style>
   /* Center the content horizontally */
#centeredContent {
    text-align: center;
    padding: 20px;
}

/* Style the maintenance section */
.maintenance-section {
    background-color: #f5f5f5; /* Light gray background */
    border: 1px solid #ccc;
    border-radius: 10px; /* Rounded corners */
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    max-width: 800px; /* Adjust the max-width for your desired content width */
    margin: 0 auto;
}

/* Style the headings */
h2, h3 {
    font-size: 1.5em;
    color: #333;
}

/* Style the maintenance items */
.maintenance-item {
    margin-top: 20px;
    padding: 20px;
    background-color: #fff; /* White background for each item */
    border: 1px solid #ddd;
    border-radius: 5px; /* Slightly rounded corners */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Subtle item shadow */
}

.maintenance-item h3 {
    font-size: 1.2em;
    color: #007bff; /* Blue heading color */
}

.maintenance-item p {
    margin-bottom: 15px;
    color: #555;
}

/* Style the maintenance buttons */
.maintenance-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    margin-right: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.maintenance-button:hover {
    background-color: #0056b3; /* Darker blue on hover */
}
