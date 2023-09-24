// Your JavaScript code here
$(document).ready(function () {
    // Simulated data for document list
    const documents = [
        { code: "DOC123", sender: "John Doe", pdfUrl: "document123.pdf" },
        // Add more document objects as needed
    ];

    // Function to populate the document list
    function populateDocumentList() {
        const documentList = $("#documentList");

        documents.forEach((doc) => {
            const documentItem = $("<div>")
                .addClass("document-item")
                .append($("<h2>").text(`Document Code: ${doc.code}`))
                .append($("<p>").text(`Sender: ${doc.sender}`))
                .append(
                    $("<a>")
                        .attr("href", doc.pdfUrl)
                        .attr("target", "_blank")
                        .text("View PDF")
                )
                .append(
                    $("<a>")
                        .attr("href", doc.pdfUrl)
                        .attr("download", `Document_${doc.code}.pdf`)
                        .text("Download PDF")
                )
                .append($("<button>").addClass("replyButton").text("Reply"));

            documentList.append(documentItem);
        });
    }

    // Populate the document list on page load
    populateDocumentList();
});
