<main>
    <div id="centeredContent">
        <!-- Add this code within the <main> section of your HTML -->
        <section id="outgoing">
            <h2>Outgoing Documents</h2>

            <!-- Generate QR codes -->
            <div id="generateQR" class="box">
                <h3>Generate QR Codes</h3>
                <label for="documentName">Document Name:</label>
                <input type="text" id="documentName" placeholder="Enter document name">
                <button id="generateQRButton">Generate QR Code</button>
                <div id="generatedQRCode" class="qr-code">
                    <!-- QR code will be displayed here dynamically -->
                </div>
            </div>

            <!-- Track outgoing document status -->
            <div id="trackStatus" class="box">
                <h3>Track Status</h3>
                <label for="trackingCode">Enter Tracking Code:</label>
                <input type="text" id="trackingCode" placeholder="Enter tracking code">
                <button id="trackStatusButton">Track</button>
                <div id="statusResult" class="status-info">
                    <!-- Status information will be displayed here dynamically -->
                </div>
            </div>

            <!-- Schedule document dispatch -->
            <div id="dispatchSchedule" class="box">
                <h3>Schedule Dispatch</h3>
                <label for="dispatchDate">Dispatch Date:</label>
                <input type="date" id="dispatchDate">
                <label for="priorityLevel">Priority Level:</label>
                <select id="priorityLevel">
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
                <button id="scheduleDispatchButton">Schedule Dispatch</button>
            </div>
        </section>
    </div>
</main>

<style>
    #centeredContent {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80%; /* Set your desired width here */
        height: 400px; /* Set your desired height here */
        margin: 0 auto; /* Center horizontally */
    }

    /* Style for boxes */
    .box {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 8px;
        margin: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    /* Style for QR code display */
    .qr-code {
        border: 2px solid #333;
        padding: 10px;
        margin-top: 10px;
        background-color: white;
    }

    /* Style for status information */
    .status-info {
        border: 2px solid #333;
        padding: 10px;
        margin-top: 10px;
        background-color: #e6e6e6;
    }

    /* Style for buttons */
    button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for button hover effect */
    button:hover {
        background-color: #0056b3;
    }
</style>
