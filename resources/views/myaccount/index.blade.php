<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Account</title>

    <!-- Other meta tags and stylesheets -->
    <link rel="stylesheet" href="dist/css/myaccount/account.css">
    <script src="dist/js/myaccount/account.js"></script>
</head>
<body>
    <main>
        <div id="centeredContent">
            <!-- Add this code within the <main> section of your HTML -->
            <section id="myAccount" class="my-account-section">
                <h2>My Account</h2>
                
        
                <!-- User Profile -->
                <div id="userProfile" class="user-profile">
                    <h3>User Profile</h3>
                    <p>View and edit your personal information.</p>
                    <label for="userName">User Name:</label>
                    <input type="text" id="userName" readonly>
                    <label for="userEmail">Email:</label>
                    <input type="email" id="userEmail" readonly>
                    <button id="editProfileButton" class="edit-button">Edit Profile</button>
                    <button id="saveProfileChangesButton" class="save-button" disabled>Save Changes</button>
                </div>
        
                <!-- Account Settings -->
                <div id="accountSettings" class="account-settings">
                    <h3>Account Settings</h3>
                    <p>Manage your account settings and preferences.</p>
                    <label for="notificationPreferences">Notification Preferences:</label>
                    <select id="notificationPreferences" class="notification-preferences-select">
                        <option value="email">Email</option>
                        <option value="sms">SMS</option>
                        <option value="push">Push Notifications</option>
                    </select>
                    <button id="saveSettingsButton" class="save-settings-button">Save Settings</button>
                </div>
        
                <!-- Change Password -->
                <div id="changePassword" class="change-password">
                    <h3>Change Password</h3>
                    <p>Change your account password.</p>
                    <label for="currentPassword">Current Password:</label>
                    <input type="password" id="currentPassword" placeholder="Enter current password">
                    <label for="newPassword">New Password:</label>
                    <input type="password" id="newPassword" placeholder="Enter new password">
                    <label for="confirmNewPassword">Confirm New Password:</label>
                    <input type="password" id="confirmNewPassword" placeholder="Confirm new password">
                    <button id="changePasswordButton" class="change-password-button">Change Password</button>
                </div>
            </section>
        </div>
    </main>

</body>
</html>
