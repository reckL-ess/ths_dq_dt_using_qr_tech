<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <script src="script.js"></script>
    <title>Reports</title>
</head>
<body>
    <main>
        <section id="reports">
            <h2>Reports</h2>
    
            <!-- Report Generation -->
            <div id="reportGeneration">
                <h3>Generate Reports</h3>
                <p>Select a report type and generate custom reports.</p>
                <label for="reportType">Report Type:</label>
                <select id="reportType">
                    <option value="documentStatus">Document Status</option>
                    <option value="processingTimes">Processing Times</option>
                    <option value="userActivity">User Activity</option>
                    <!-- Add more report types as needed -->
                </select>
                <button id="generateReportButton">Generate Report</button>
            </div>
    
            <!-- Export Reports -->
            <div id="exportReports">
                <h3>Export Reports</h3>
                <p>Export generated reports in different formats.</p>
                <button id="exportPdfButton">Export as PDF</button>
                <button id="exportExcelButton">Export as Excel</button>
            </div>
    
            <!-- Display Generated Reports -->
            <div id="displayReports">
                <h3>Generated Reports</h3>
                <div id="reportContent">
                    <!-- Generated report content will be displayed here dynamically -->
                </div>
            </div>
        </section>
    </main>

    <style>
        /* Add your CSS styles here */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

h2 {
    color: #007BFF;
}

section {
    margin: 20px 0;
}

div {
    padding: 10px;
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

select, button {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
}

button {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>

