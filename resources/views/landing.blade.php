@extends('template')

@section('style')
    .img-container {
        position: fixed;
        width: fit-content;
        height: fit-content;
        z-index: 100;
        cursor: pointer;
    }
    .img-container img {
        display: block;
        width: 100%;
        height: auto;
    }
    .img-container .img-light {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        height: 100%;
    }
    .img-container:hover .img-light {
        opacity: 1;
    }
    .img-logo-container {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 12dvw;
    }
    .img-messages-container {
        top: 50%;
        left: 19%;
        transform: translateY(-50%);
        width: 8dvw;
    }
    .img-memories-container {
        top: 50%;
        left: 73%;
        transform: translateY(-50%);
        width: 8dvw;
    }
@endsection

@section('content')

    <a href="/messages">
        <div class="img-container img-messages-container">
            <img src='{{Storage::url("assets/messages.svg")}}' alt="Messages">
            <img src='{{Storage::url("assets/messages-light.svg")}}' alt="Messages Light" class="img-light">
        </div>
    </a>

    <a href="/thanks">
        <div class="img-container img-logo-container">
            <img src='{{Storage::url("assets/logo.svg")}}' alt="Logo">
            <img src='{{Storage::url("assets/logo-light.svg")}}' alt="Logo Light" class="img-light">
        </div>
    </a>

    <a href="/memories">
        <div class="img-container img-memories-container">
            <img src='{{Storage::url("assets/memories.svg")}}' alt="Memories">
            <img src='{{Storage::url("assets/memories-light.svg")}}' alt="Memories Light" class="img-light">
        </div>
    </a>
    
@endsection

            