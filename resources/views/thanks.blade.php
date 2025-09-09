@extends('template')

@section('style')
    .content-thanks-people{
        color: #0051FF;
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
    .content-thanks{
        text-align: center;
        background-image: {{Storage::url('assets/thanks-paper.svg')}};
        background-repeat: no-repeat;
        background-size: cover;
        width: 77dvw;
        height: 72dvh;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 70;
        padding: 4rem 2rem 2rem;
        overflow: hidden;
        font-size: 24px;
    }
    .content-thanks-line{
        padding: 12px;
    }
    .content-thanks-col{
        padding: 0 5rem;
    }
@endsection

@section('content')

    <a href="/">
        <div class="img-logo">
            <img src={{ Storage::disk('s3')->url("assets/logo.svg") }} alt="Logo" class="logo-default">
            <img src={{ Storage::disk('s3')->url("assets/logo-light.svg") }} alt="Logo Light" class="logo-light">
        </div>
    </a>
    
    <div class="content-thanks">
        <div class="row">
            <div class="col-12">
                Our deepest heartfelt-iest thanks to:
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="content-thanks-col">
                    <div class="content-thanks-line">
                        <span class="content-thanks-people">Xuan</span>
                        </br>
                        for being the reason Cha and I met #mvp
                    </div>
                    <div class="content-thanks-line">
                        <span class="content-thanks-people">Ola and Su En</span>
                        </br>
                        for planning, shopping, and saving us 2.6 billion ringgit
                    </div>
                    <div class="content-thanks-line">
                        <span class="content-thanks-people"><a href="https://yklim.pixieset.com/" target="_blank">Yen Khai</a></span>
                        </br>
                        for the helping us freeze memories in time (im not crying youre crying)
                    </div>
                    <div class="content-thanks-line">
                        <span class="content-thanks-people">Ben and Oscar</span>
                        </br>
                        for the Oscar-worthy filmography (haha geddit)
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="content-thanks-col">
                    <div class="content-thanks-line">
                        <span class="content-thanks-people">Our families</span>
                        </br>
                        for supporting our odd Malay-Cina relationship and its unique perks (yes we give angpao for both Raya and CNY)
                    </div>
                    <div class="content-thanks-line">
                        <span class="content-thanks-people">You</span>
                        </br>
                        for celebrating us!
                    </div>
                    <div class="content-thanks-line">
                        And last but not least:
                    </div>
                    <div class="content-thanks-line">
                        <span class="content-thanks-people">Cha</span>
                        </br>
                        for being the server guy, for giving design opinions, and for being the best hooman bean ever. I'm honoured to have married you. I love you ♡
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection