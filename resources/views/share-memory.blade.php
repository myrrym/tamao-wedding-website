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
    .header-container {
        text-align: center;
    }
    .header{
        background-color: #FFFFFF;
        font-size: 24px;
        display: inline-block;
        padding: 0.25em 0.5em;
    }
@endsection

@section('content')

    <a href="/">
        <div class="img-logo">
            <img src="assets/logo.svg" alt="Logo" class="logo-default">
            <img src="assets/logo-light.svg" alt="Logo Light" class="logo-light">
        </div>
    </a>

    <div class="content-share-memory">

        <div class="row">
            <div class="offset-2 col-8">

                <div class="container-header">
                    <div class="header">share a memory with us</div>
                </div>

                <div class="form-card">
                    <p class="">From:</p>
                    <input type="text">
                    <p class="">Photo upload:</p>
                    <input type="file" id="myFile" name="filename">
                </div>

            </div>
        </div>

    </div>

@endsection