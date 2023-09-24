<main>
    <div id="centeredContent">
        <!-- Add this code within the <main> section of your HTML -->
        <section id="tracking" class="tracking-section">
            <h2>Document Tracking</h2>
    
            <!-- QR code-based document retrieval -->
            <div id="qrRetrieval" class="qr-retrieval">
                <h3>QR Code Retrieval</h3>
                <label for="qrCodeInput">Scan or enter QR code:</label>
                <input type="text" id="qrCodeInput" placeholder="Enter or scan QR code">
                <button id="retrieveDocumentButton" class="retrieve-button">Retrieve Document</button>
                <div id="retrievedDocumentInfo" class="retrieved-info">
                    <!-- Retrieved document information will be displayed here dynamically -->
                </div>
            </div>
    
            <!-- Search and filter options -->
            <div id="searchFilter" class="search-filter">
                <h3>Search and Filter</h3>
                <input type="text" id="searchInput" placeholder="Search by document name">
                <label for="filterStatus">Filter by Status:</label>
                <select id="filterStatus" class="status-select">
                    <option value="all">All</option>
                    <option value="inTransit">In Transit</option>
                    <option value="delivered">Delivered</option>
                    <!-- Add more status options as needed -->
                </select>
                <button id="searchFilterButton" class="search-filter-button">Search/Filter</button>
            </div>
    
            <!-- List of tracked documents -->
            <ul id="trackedDocuments" class="tracked-document-list">
                <!-- Tracked documents will be added here dynamically -->
            </ul>
        </section>
    </div>
</main>

<style>
    .tracking-section {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .qr-retrieval {
        margin-top: 20px;
        text-align: center;
    }

    .retrieve-button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .retrieve-button:hover {
        background-color: #0056b3;
    }

    .retrieved-info {
        margin-top: 10px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    .search-filter {
        margin-top: 20px;
        text-align: center;
    }

    .status-select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    .search-filter-button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .search-filter-button:hover {
        background-color: #0056b3;
    }

    .tracked-document-list {
        list-style-type: none;
        padding: 0;
    }
</style>
