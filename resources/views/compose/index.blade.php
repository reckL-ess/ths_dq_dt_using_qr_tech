<?php
// Define the $offices variable with sample office names
$offices = [
    "Office of the Principal",
    "Accounting Office",
    "Supply Office",
    "Library",
    "Bid and Awards Committee",
    "Physical Facilities",
    "Guidance Office",
    "Registrar",
    "Senior High Coordinator",
    "Subject Area Coordinator 1",
    "Subject Area Coordinator 2",
    "Subject Area Coordinator 3",
    "Subject Area Coordinator 4",
    "Subject Area Coordinator 5",
    "Subject Area Coordinator 6",
    "Subject Area Coordinator 7",
    "Subject Area Coordinator 8",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-family: 'Courier New', Courier, monospace;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        select,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        textarea:focus,
        select:focus,
        input[type="file"]:focus {
            border-color: #007BFF;
        }

        textarea {
            resize: vertical;
            min-height: 90px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .container {
                padding: 20px;
            }
            label {
                font-size: 18px;
            }
        }
        
        /* Add this CSS for the dropdown and selected offices */
        .office-dropdown {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s;
        }
    </style>

</head>
<body>
    
    <h1>Compose</h1>
    <div class="container">
        <h2>QR Code</h2>
        <div id="qrcode"></div>
        <button id="generateQR">Generate QR Code</button>

        <form action="{{ route('Compose') }}" method="POST">
            @csrf
            <div class="multi-input-container">
                <!-- Sender input -->
                <div class="multi-input-item">
                    <label for="sender">Sender:</label>
                    <input type="text" id="sender" name="sender[]" required>
                </div>
                
                <!-- Recipient input with a dropdown for offices -->
                <div class="multi-input-item">
                    <label for="recipient">Recipient:</label>
                    <select id="recipient" name="selectedOffices[]" multiple class="office-dropdown">
                        <!-- Office options will appear here -->
                        @foreach ($offices as $office)
                            <option value="{{ $office }}">{{ $office }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="prioritization" class="custom-dropdown">
                Prioritization:
                <!-- Add a custom class to the select element for styling -->
                <select id="prioritization" name="prioritization" class="custom-select">
                    <option value="" disabled selected>Select</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </label>
            

            <label for="classification">Classification:</label>
            <input type="text" id="classification" name="classification" required>

            <label for="action">Action:</label>
            <input type="text" id="action" name="action" required>

            <label for="date_of_letter">Date of Letter:</label>
            <input type="date" id="date_of_letter" name="date_of_letter" required>

            <label for="subclassification">Subclassification:</label>
            <input type="text" id="subclassification" name="subclassification" required>

            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" required>

            <label for="delivery_type">Delivery Type:</label>
            <input type="text" id="delivery_type" name="delivery_type" required>

            <label for="reference">Reference:</label>
            <input type="text" id="reference" name="reference" required>

            <label for="attachments">Add Attachment:</label>
            <input type="file" id="attachments" name="attachments">

            <label for="attachment_description" class="attachment-label">Attachment Description:</label>
            <input type="text" id="attachment_description" name="attachment_description" class="attachment-input">


            <input type="submit" value="Compose Letter">
            
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('vendor/qrcode/jquery.qrcode.min.js') }}"></script>
    </div>

    <script>
        // Function to show only selected offices in the recipient input
        function showSelectedOffices() {
            const recipientSelect = document.getElementById('recipient');
            const selectedOffices = recipientSelect.selectedOptions;
            const recipientInput = document.getElementById('recipient-input');
            
            const selected = [];
            for (let i = 0; i < selectedOffices.length; i++) {
                selected.push(selectedOffices[i].value);
            }
            
            recipientInput.value = selected.join(', ');
        }

        // Add event listener to the select element
        const recipientSelect = document.getElementById('recipient');
        recipientSelect.addEventListener('change', showSelectedOffices);

        $(document).ready(function () {
            // Initialize the QR code element
            var qrcode = new QRCode(document.getElementById("qrcode"), {
                width: 128,
                height: 128,
            });

            // Generate QR code when the button is clicked
            $("#generateQR").click(function () {
                var textToEncode = "Some unique identifier for this compose form"; // Replace with your unique identifier
                qrcode.makeCode(textToEncode);
            });
        });
    </script>
    
</body>
</html>
