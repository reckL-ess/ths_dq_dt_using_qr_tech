<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Request Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Document Request Form</h2>
        <form id="requestForm">
            <div class="form-group">
                <label for="userType">Select User Type:</label>
                <select class="form-control" id="userType" required>
                    <option value="">Select User Type</option>
                    <option value="student">Current Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="parent">Parent</option>
                    <option value="graduate">Graduate Student</option>
                </select>
            </div>

            <div id="studentForm" class="form-group" style="display: none;">
                <label for="studentName">Name:</label>
                <input type="text" class="form-control" id="studentName" name="studentName">
                <label for="studentDocument">Types of Document:</label>
                <input type="text" class="form-control" id="studentDocument" name="studentDocument">
            </div>

            <div id="graduateForm" class="form-group" style="display: none;">
                <label for="graduateName">Name:</label>
                <input type="text" class="form-control" id="graduateName" name="graduateName">
                <label for="graduateDocument">Types of Document:</label>
                <input type="text" class="form-control" id="graduateDocument" name="graduateDocument">
                <label for="graduateYear">Year of Graduation:</label>
                <input type="text" class="form-control" id="graduateYear" name="graduateYear">
            </div>

            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>

        <div id="notification" style="display: none;" class="mt-3"></div>
    </div>

    <script>
        document.getElementById('userType').addEventListener('change', function () {
            var userType = this.value;

            // Hide all form sections
            document.getElementById('studentForm').style.display = 'none';
            document.getElementById('graduateForm').style.display = 'none';

            // Show the relevant form section based on user type
            if (userType === 'student') {
                document.getElementById('studentForm').style.display = 'block';
            } else if (userType === 'graduate') {
                document.getElementById('graduateForm').style.display = 'block';
            }
        });

        document.getElementById('requestForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Handle form submission and show notification
            var userType = document.getElementById('userType').value;
            var notification = document.getElementById('notification');
            notification.style.display = 'block';

            if (userType === 'student') {
                var studentName = document.getElementById('studentName').value;
                var studentDocument = document.getElementById('studentDocument').value;
                notification.innerHTML = `Dear ${studentName}, your request for ${studentDocument} will be processed.`;
            } else if (userType === 'graduate') {
                var graduateName = document.getElementById('graduateName').value;
                var graduateDocument = document.getElementById('graduateDocument').value;
                var graduateYear = document.getElementById('graduateYear').value;
                notification.innerHTML = `Dear ${graduateName}, your request for ${graduateDocument} from the year ${graduateYear} will be processed.`;
            }
        });
    </script>
</body>
</html>
