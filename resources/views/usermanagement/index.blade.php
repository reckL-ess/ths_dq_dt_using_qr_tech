<main>
    <div id="centeredContent">
        <!-- Add this code within the <main> section of your HTML -->
        <section id="userManagement" class="user-management-section">
            <h2>User Management</h2>
    
            <!-- User Administration -->
            <div id="userAdministration" class="user-administration">
                <h3>User Administration</h3>
                <p>Add, edit, and delete user accounts.</p>
                <label for="userName">User Name:</label>
                <input type="text" id="userName" placeholder="Enter user name">
                <label for="userRole">Role:</label>
                <select id="userRole" class="user-role-select">
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="operator">Operator</option>
                    <!-- Add more role options as needed -->
                </select>
                <button id="addUserButton" class="user-action-button">Add User</button>
                <button id="editUserButton" class="user-action-button">Edit User</button>
                <button id="deleteUserButton" class="user-action-button">Delete User</button>
            </div>
    
            <!-- Password Management -->
            <div id="passwordManagement" class="password-management">
                <h3>Password Management</h3>
                <p>Reset user passwords and enforce password policies.</p>
                <label for="resetUser">Select User:</label>
                <select id="resetUser" name="resetUser" class="reset-user-select">
                    <?php
                    // Assuming you have a database connection already set up
                    // and your 'users' table has columns 'id', 'name', 'email', and 'password'
                
                    // Replace 'your_database_table_name' with the actual table name
                    $users = DB::table('users')->select('id', 'name', 'email')->get();
                
                    foreach ($users as $user) {
                        // Modify this line to include the 'password' column
                        echo '<option value="' . $user->id . '">User: ' . $user->name . ' (' . $user->email .')</option>';
                    }
                    ?>
                </select>
                
                <select id="resetUser" class="reset-user-select">
                    <!-- User options will be added here dynamically -->
                </select>
                <button id="resetPasswordButton" class="reset-password-button">Reset Password</button>
            </div>
        </section>
    </div>
</main>

<style>
    .user-management-section {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .user-administration, .password-management {
        margin-top: 20px;
        padding: 20px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }

    .user-action-button, .reset-password-button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    .user-action-button:hover, .reset-password-button:hover {
        background-color: #0056b3;
    }

    .user-role-select, .reset-user-select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }
</style>
