@section('custom-css')
<style>
    body {
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    .maintenance {
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: scroll;
        background-size: cover;
    }

    .maintenance {
        width: 100%;
        height: 100%;
    }

    .maintenance {
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
    }

    .maintenance_contain {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 15px;
    }

    .maintenance_contain img {
        width: auto;
        max-width: 100%;
    }

    .pp-infobox-title-prefix {
        font-weight: 500;
        font-size: 20px;
        color: #000000;
        margin-top: 30px;
        text-align: center;
    }

    .pp-infobox-title-prefix {
        font-family: sans-serif;
    }

    .pp-infobox-title {
        color: #000000;
        font-family: sans-serif;
        font-weight: 700;
        font-size: 40px;
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
        display: block;
        word-break: break-word;
    }

    .pp-infobox-description {
        color: #000000;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-size: 18px;
        margin-top: 0px;
        margin-bottom: 0px;
        text-align: center;
    }

    .pp-infobox-description p {
        margin: 0;
    }

    .title-text.pp-primary-title {
        color: #000000;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        padding-right: 0px;
        font-family: sans-serif;
        font-weight: 500;
        font-size: 18px;
        line-height: 1.4;
        margin-top: 50px;
        margin-bottom: 0px;
    }

    .pp-social-icon {
        margin-left: 10px;
        margin-right: 10px;
        display: inline-block;
        line-height: 0;
        margin-bottom: 10px;
        margin-top: 10px;
        text-align: center;
    }

    .pp-social-icon a {
        display: inline-block;
        height: 40px;
        width: 40px;
    }

    .pp-social-icon a i {
        border-radius: 100px;
        font-size: 20px;
        height: 40px;
        width: 40px;
        line-height: 40px;
        text-align: center;
    }

    .pp-social-icon:nth-child(1) a i {
        color: #4b76bd;
    }

    .pp-social-icon:nth-child(1) a i {
        border: 2px solid #4b76bd;
    }

    .pp-social-icon:nth-child(2) a i {
        color: #00c6ff;
    }

    .pp-social-icon:nth-child(2) a i {
        border: 2px solid #00c6ff;
    }

    .pp-social-icon:nth-child(3) a i {
        color: #fb5245;
    }

    .pp-social-icon:nth-child(3) a i {
        border: 2px solid #fb5245;
    }

    .pp-social-icon:nth-child(4) a i {
        color: #158acb;
    }

    .pp-social-icon:nth-child(4) a i {
        border: 2px solid #158acb;
    }

    .pp-social-icons {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection
<x-app.app-layout pageHeader=0>
    <div class="maintenance">
        <div class="maintenance_contain">
            <img src="{{ asset('main/assets/images/breadcrumb/maintenance.png') }}" alt="maintenance">
            <span class="pp-infobox-title-prefix">WE ARE COMING SOON</span>
            <div class="pp-infobox-title-wrapper">
            @if(session()->get('maintenance'))
                <h3 class="pp-infobox-title">{{ session()->get('message') }}</h3>
            @endif
                <h3 class="pp-infobox-title">Our Crayon Ninjas & Code Monkeys<br />are at the work making improvements</h3>
            </div>
            <div class="pp-infobox-description">
                <p>We'll be back shortly, sorry for any inconvenience!</p>
            </div>
        </div>
    </div>
</x-app.app-layout>