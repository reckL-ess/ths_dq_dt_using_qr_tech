<!-- Add this code within the <main> section of your HTML -->
    <section id="pending">
        <h2>Pending Documents</h2>
    
        <!-- List of pending documents -->
        <ul id="pendingList">
            <!-- Pending documents will be added here dynamically -->
        </ul>
    
        <!-- Assign tasks and deadlines -->
        <div id="taskAssignment">
            <h3>Assign Tasks</h3>
            <label for="documentSelect">Select Document:</label>
            <select id="documentSelect">
                <option value="document1">Document 1</option>
                <option value="document2">Document 2</option>
                <option value="document3">Document 3</option>
                <!-- Add more documents as needed -->
            </select>
            <label for="taskDeadline">Task Deadline:</label>
            <input type="date" id="taskDeadline">
            <button id="assignTaskButton">Assign Task</button>
        </div>
    </section>
    
    <style>
        /* Center-align and style the Pending Documents section */
#pending {
    text-align: center; /* Center-align content horizontally */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 60vh; /* Center-align content vertically */
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 20px;
}

#pending h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style for the list of pending documents */
#pendingList {
    list-style: none;
    padding: 0;
}

#pendingList li {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 10px;
    margin: 5px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Style for the task assignment section */
#taskAssignment {
    background-color: #f5f5f5;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 20px;
}

#taskAssignment h3 {
    color: #333;
    font-size: 18px;
    margin-bottom: 10px;
}

/* Style for labels and form elements in the task assignment section */
#taskAssignment label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
    color: #555;
}

#documentSelect,
#taskDeadline,
#assignTaskButton {
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
    font-size: 16px;
}

/* Style for the "Assign Task" button */
#assignTaskButton {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#assignTaskButton:hover {
    background-color: #0056b3;
}
