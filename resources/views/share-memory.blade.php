@extends('template')

@section('style')
    .img-logo {
        position: fixed;
        top: 4%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 100;
        height: 17dvh;
        display: inline-block;
    }
    .img-logo img {
        height: 100%;
        display: block;
    }
    .logo-light {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .img-logo:hover .logo-light {
        opacity: 1;
    }
    .img-logo:hover .logo-default {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .content-share-memory{
        position: fixed;
        top: 0;
        left: 50%;
        transform: translate(-50%);
        z-index: 100;
        height: 75vh;
        overflow: scroll;
        margin-top: 25vh;
        width: 100%;
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    .container-header {
        text-align: center;
    }
    .header{
        background-color: #FFFFFF;
        font-size: 24px;
        display: inline-block;
        padding: 0.25em 0.5em;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    }
    .form-card{
        margin-top: 5%;
        background-image: {{Storage::url('assets/thanks-paper.svg')}};
        background-repeat: no-repeat;
        background-size: cover;
        padding: 4% 8%;
        font-size: 24px;
    }
    .input-from{
        border-bottom: 1px solid black;
        width: 100%;
    }
    .input-from:focus {
        outline: none;
    }
    /* Hide default input */
    #image {
        display: none;
    }
    /* Custom button */
    .custom-file-label {
        margin-top: 0.4rem;
        display: inline-block;
        padding: 10px 20px;
        background-color: #000000;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .custom-file-label:hover {
        background-color: #3D3D3D;
    }
    /* Preview grid */
    .preview-container {
        margin-top: 15px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .preview-container img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 6px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .container-btn-submit-memory{
        text-align: center;
    }
    .btn-submit-memory{
        display: inline-block;
        background-color: #000000;
        color: #FFFFFF;
        border-radius: 0;
        margin-top: 4%;
        font-size: 24px;
        padding: 1% 4%;
        cursor: pointer;
    }
    .btn-submit-memory:hover, .btn-submit-memory:active{
        background-color: #3D3D3D;
        color: #FFFFFF;
    }
@endsection

@section('content')

    <a href="/">
        <div class="img-logo">
            <img src={{ Storage::disk('s3')->url("assets/logo.svg") }} alt="Logo" class="logo-default">
            <img src={{ Storage::disk('s3')->url("assets/logo-light.svg") }} alt="Logo Light" class="logo-light">
        </div>
    </a>

    <div class="content-share-memory">

        <div class="row">
            <div class="offset-2 col-8">

                <div class="container-header">
                    <div class="header">share a memory with us</div>
                </div>

                <form action="{{ route('share-memories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-card">

                        <div class="row mb-4">
                            <div class="col-3">
                                From:
                            </div>
                            <div class="col-9">
                                <input name="from" type="text" class="input-from" placeholder="Your name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                Photo upload:
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="image-upload-wrapper">
                                    <label for="image" class="custom-file-label">choose image (limit of 1000KB)</label>
                                    <input type="file" id="image" name="image" accept="image/*" required>
                                    <div id="preview" class="preview-container"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="container-btn-submit-memory">
                        <button tyep="submit" class="btn-submit-memory">submit memory</button>
                    </div>
                
                </form>

                @if(session('success'))
                    <div class="alert alert-success" style="text-align:center; margin-top:10px;">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
        </div>

    </div>

    <script>
        document.getElementById("image").addEventListener("change", function(event) {
            const preview = document.getElementById("preview");
            preview.innerHTML = ""; // clear old thumbnails
            
            Array.from(event.target.files).forEach(file => {
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = e => {
                const img = document.createElement("img");
                img.src = e.target.result;
                preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
            });
        });
    </script>

@endsection