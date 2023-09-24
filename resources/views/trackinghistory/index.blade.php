<main>
    <div id="centeredContent">
        <!-- Start of Transaction History Section -->
        <section id="transactionHistory" class="transaction-section">
            <h2>Transaction History</h2>

            <!-- Filter options for transaction history -->
            <div id="filterOptions" class="filter-options">
                <label for="documentFilter">Filter by Document:</label>
                <select id="documentFilter" class="filter-select">
                    <option value="all">All Documents</option>
                    <option value="document1">Document 1</option>
                    <option value="document2">Document 2</option>
                    <!-- Add more document options as needed -->
                </select>
                <button id="applyFilterButton" class="filter-button">Apply Filter</button>
            </div>

            <!-- Transaction history log -->
            <div id="transactionLog" class="transaction-log">
                <!-- Transaction log entries will be added here dynamically -->
            </div>
        </section>
        <!-- End of Transaction History Section -->
    </div>
</main>

<style>
    /* Styles for the Transaction History section (as provided) */
    .transaction-section {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .filter-options {
        margin-top: 20px;
        display: flex;
        align-items: center;
    }

    .filter-select {
        flex: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    .filter-button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .filter-button:hover {
        background-color: #0056b3;
    }

    .transaction-log {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: white;
    }
</style>
