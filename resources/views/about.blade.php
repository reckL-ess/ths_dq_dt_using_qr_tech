@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container">
    <h1>History of Tandaay High School</h1>
    <p> 
            The Tandaay High School has been made possible thru a Sangguniang Bayan resolution
        sponsored by Hon. NORIEL R. BERNALES, with resolution number 005-070-2000F. 
        This was passed on during the 34th Regular Session held on October 13, 2000.
            The said resolution respectfully requested the Provincial Government of Camarines Sur
         thru Gov. Luis R. Villafuerte to establish a Provincial High School at Tandaay, Nabua, 
         Camarines Sur. It was approved by the honorable governor being known for his valuable support
        to the field of education. Finding it with merit, he requested the then Superintendent Dr. Corazon 
        Z. Malaya for her vulnerable assistance in the completion of the requirements relevant to the opening
        of the school. Finally, it was opened June 2001 as an annex of Malawag High School.</p>

    <!-- Add images with descriptions -->
    <div class="image-container">
        <img src="{{ asset('images/image1.jpg') }}" alt="Image 1">
        <p>Description for Image 1</p>
    </div>
    <div class="image-container">
        <img src="{{ asset('images/image2.jpg') }}" alt="Image 2">
        <p>Description for Image 2</p>
    </div>
    <!-- Add more images as needed -->
</div>
@endsection
