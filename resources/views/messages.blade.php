@extends('template')

@section('style')
    .container-message-card{
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
    .container-message-card::-webkit-scrollbar{
        display: none;
    }
    .parent-message-card{
        display: flex;
        justify-content: center;
    }
    .message-card{
        text-align: center;
        background-image: url('assets/thanks-paper.svg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 34dvw;
        position: relative;
        z-index: 70;
        padding: 2rem;
        margin-bottom: 5%;
    }
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
    .img-messages {
        position: fixed;
        bottom: 0;
        right: 8%;
        transform: translateY(-50%);
        z-index: 150;
        height: 15dvh;
        display: inline-block;
    }
    .img-messages img {
        height: 100%;
        display: block;
    }
    .img-write-messages-light {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .img-messages:hover .img-write-messages-light {
        opacity: 1;
    }
    .img-messages:hover .img-write-messages {
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

    <a href="/share-message">
        <div class="img-messages">
            <img src="assets/write-messages.svg" alt="" class="img-write-messages">
            <img src="assets/write-messages-light.svg" alt="" class="img-write-messages-light">
        </div>
    </a>

    <div class="content-messages">

        <div class="container-message-card">

            <div class="row">

                <div class="offset-2 col-8">
                        
                    <div class="row">

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
                            <div class="message-card">
                                Dear Cha and Myr
                                <br>
                                Congratulations on your marriage!
                                <br>
                                -John and Jane
                            </div>
                        </div>

                        <div class="col-6 parent-message-card">
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
                    
        </div>

    </div>

@endsection