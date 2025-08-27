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
    .container-memory-card{
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
        padding-bottom: 4rem;
    }
    .container-memory-card::-webkit-scrollbar{
        display: none;
    }
    .parent-memory-card{
        display: flex;
        justify-content: center;
    }
    .memory-card{
        text-align: center;
        position: relative;
        z-index: 70;
        margin-bottom: 5%;
    }
    .memory-card-img{
        border: 0.4rem solid white;
        height: 32vh;
    }
    .img-memory {
        position: fixed;
        bottom: 0;
        right: 8%;
        transform: translateY(-50%);
        z-index: 150;
        display: inline-block;
    }
    .img-memory img {
        display: block;
    }
    .img-share-memory-light {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .img-memory:hover .img-share-memory-light {
        opacity: 1;
    }
    .img-memory:hover .img-share-memory {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
@endsection

@section('content')

    <a href="/">
        <div class="img-logo">
            <img src="assets/logo.svg" alt="Logo" class="logo-default">
            <img src="assets/logo-light.svg" alt="Logo Light" class="logo-light">
        </div>
    </a>

    <a href="/share-memory">
        <div class="img-memory">
            <img src="assets/share-memory.svg" alt="" class="img-share-memory">
            <img src="assets/share-memory-light.svg" alt="" class="img-share-memory-light">
        </div>
    </a>

    <div class="content-memory">

        <div class="container-memory-card">

            <div class="row">

                <div class="offset-2 col-8">
                        
                    <div class="row">

                        @foreach ($images as $image)
                            <div class="col-6 parent-memory-card">
                                <div class="memory-card">
                                    <img src="{{ asset($image) }}" alt="Memory" class="memory-card-img">
                                </div>
                            </div>
                        @endforeach
            
                    </div>

                </div>

            </div>
                    
        </div>

    </div>

@endsection