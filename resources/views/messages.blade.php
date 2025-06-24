@extends('template')

@section('style')
    .container-message-card{
        position: fixed;
        top: 0;
        left: 50%;
        transform: translate(-50%);
        z-index: 100;
        height: 100vh;
        overflow: scroll;
        padding-top: 8%;
    }
    .message-card{
        text-align: center;
        background-image: url('assets/thanks-paper.svg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 52dvw;
        position: relative;
        z-index: 70;
        padding: 2rem;
        margin-bottom: 5%;
    }
    .img-logo-home{
        width: 35dvw;
        position: fixed;
        top: 50%;
        right: 0;
        transform: translate(50%, -50%) rotate(-90deg);
        z-index: 100;
    }
    .img-write-messages{
        width: 20dvw;
        position: fixed;
        top: 50%;
        left: 3%;
        transform: translateY(-50%);
        z-index: 100;
    }
    .memories {
        background-color: #007099;
    }
    .bar-memories-left {
        display: none;
    }
    .bar-memories-right {
        display: none;
    }
    .bar-messages-left {
        left: unset;
        right: 3%;
    }
    .bar-messages-right {
        left: unset;
        right: 0;
    }
@endsection

@section('content')

    <a href="/">
        <img src="assets/write-messages.svg" alt="" class="img-write-messages">
    </a>

    <a href="/">
        <img src="assets/logo.svg" alt="" class="img-logo-home">
    </a>

    <div class="content-messages">
        <div class="row">
            <div class="col-12">

                <div class="container-message-card">

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>

                    <div class="message-card">
                        Dear Cha and Myr
                        <br>
                        Congratulations on your marriage!
                        <br>
                        -John and Jane
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

@endsection