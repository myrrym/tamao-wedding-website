@extends('template')

@section('style')
    .content-thanks-people{
        color: #0051FF;
    }
    .img-logo-thanks{
        width: 20dvw;
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 100;
    }
    .content-thanks{
        text-align: center;
        background-image: url('assets/thanks-paper.svg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 72dvw;
        height: 76dvh;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 70;
        padding: 6rem 2rem 2rem;
        overflow: scroll;
    }
@endsection

@section('content')

    <a href="/">
        <img src="assets/logo.svg" alt="" class="img-logo-thanks">
    </a>

    <div class="content-thanks">
        Our deepest heartfelt-iest thanks to:
        </br>
        </br><span class="content-thanks-people">Xuan</span> - for being the reason Cha and I met #mvp
        </br><span class="content-thanks-people">Ola and Su En</span> - for planning, shopping, and saving us 2.6 billion ringgit
        </br><span class="content-thanks-people">Yen Khai</span> - for the helping us freeze memories in time (im not crying youre crying)
        </br><span class="content-thanks-people">Ben and Oscar</span> - for the Oscar-worthy filmography (haha geddit)
        </br><span class="content-thanks-people">Our families</span> - for supporting our odd Malay-Cina relationship and its unique perks (yes we give angpao for both Raya and CNY)
        </br><span class="content-thanks-people">You - for celebrating us!</span>
        </br>    
        </br>And last but not least:
        </br>    
        </br><span class="content-thanks-people">Cha</span> - for being the server guy, for giving design opinions, and for being the best hooman bean ever. I'm honoured to have married you. I love you ♡
    </div>

@endsection