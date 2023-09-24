<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Sender</th>
            <th>Details</th>
            <!-- Add more table headers for other columns -->
        </tr>
    </thead>
    <tbody>
        @foreach ($documents as $document)
            <tr>
                <td>{{ $document->Code }}</td>
                <td>{{ $document->Sender }}</td>
                <td>{{ $document->Details }}</td>
                <!-- Add more table cells for other columns -->
            </tr>
        @endforeach
    </tbody>
</table>
