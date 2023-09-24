@foreach ($documents as $document)
    <div class="document">
        <h3>{{ $document->title }}</h3>
        <p>{{ $document->description }}</p>
        <img src="{{ asset('storage/qrcodes/' . $document->id . '.png') }}" alt="QR Code">
        <a href="{{ route('documents.generateQrCode', $document->id) }}" class="btn btn-primary">Generate QR Code</a>
    </div>
@endforeach
