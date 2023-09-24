<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <script src="https://cdn.rawgit.com/zxing-js/library/gh-pages/docs/instascan.min.js"></script>
    <script src="qr-scanner.js"></script>
    <style>
        /* Add your CSS styles here */
    <style>
    /* Center the content horizontally */
#centeredContent {
    text-align: center;
    padding: 20px;
}

/* Style the incoming section */
.incoming-section {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Style the headings */
h2, h3 {
    font-size: 1.5em;
    color: #333;
}

/* Style the QR scanner */
.qr-scanner {
    margin-top: 20px;
    text-align: center;
}

#qrCodeInput {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.receive-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.receive-button:hover {
    background-color: #0056b3;
}

/* Style the Document Categorization */
.categorization {
    margin-top: 20px;
}

.category-select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.assign-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.assign-button:hover {
    background-color: #0056b3;
}

/* Style the Notification System */
.notification-system {
    margin-top: 20px;
}

.new-arrivals {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

.arrival-list {
    list-style-type: none;
    padding: 0;
}

.arrival-list li {
    margin-bottom: 5px;
    color: #333;
}

/* Style the QR scanner section */
.qr-scanner {
    text-align: center;
    margin-top: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

#scanner-container {
    margin: 20px 0;
}

#scanner-video {
    width: 100%;
    max-width: 400px;
    border: 1px solid #ccc;
}

.qr-result {
    font-size: 1.2em;
}
    </style>
</head>
<body>
    <main>
        <div id="centeredContent">
            <section id="incoming" class="incoming-section">
                <h2>Incoming Documents</h2>

                <!-- QR Code Scanning -->
                <div class="qr-scanner">
                    <h1>QR Code Scanner</h1>
                    <div id="scanner-container">
                        <video id="scanner-video"></video>
                    </div>
                    <p class="qr-result">Scanned QR code: <span></span></p>
                </div>
            
                <!-- Document Categorization -->
                <div id="categorization" class="categorization">
                    <h3>Document Categorization</h3>
                    <label for="categorySelect">Select Category:</label>
                    <select id="categorySelect" class="category-select">
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                        <!-- Add more categories as needed -->
                    </select>
                    <button id="assignButton" class="assign-button">Assign</button>
                </div>
                
                <!-- Notification System -->
                <div id="notification" class="notification-system">
                    <h3>Notification System</h3>
                    <div id="newArrivals" class="new-arrivals">
                        <p>New Arrivals:</p>
                        <ul id="arrivalList" class="arrival-list">
                            <!-- New arrival notifications will be added here -->
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
