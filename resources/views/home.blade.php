<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    
    <main>
    <div class="jumbotron"></div>
    <div class="comics">
        <div class="container">
            <div class="showtitle text-white fs-3 fw-bold text-uppercase">
                <a href="#">Current series</a>
            </div>
            <div class="row pt-5">
                @include('partials.card')
            </div>
            <div class="load text-center d-flex justify-content-center text-uppercase">
                <span>Load more</span>
            </div>
        </div>
    </div>
    <div class="item-dc" style="background-color: #0282f9;">
        <div class="container p-5">
            <div class="d-flex justify-content-around align-items-center flex-wrap gap-3">
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-digital-comics.png" alt="digital comics">
                    <span class="text-uppercase ms-3">Digital Comics</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-merchandise.png" alt="merchandise">
                    <span class="text-uppercase ms-3">DC Merchandise</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-subscriptions.png" alt="Subscription">
                    <span class="text-uppercase ms-3">Subscription</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-shop-locator.png" alt="Locator">
                    <span class="text-uppercase ms-3">Comics Shop Locator</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-dc-power-visa.svg" alt="digital comics">
                    <span class="text-uppercase ms-3">DC Power Visa</span>
                </div>
            </div>
        </div>
    </div><div class="jumbotron"></div>
    <div class="comics">
        <div class="container">
            <div class="showtitle text-white fs-3 fw-bold text-uppercase">
                <a href="#">Current series</a>
            </div>
            <div class="row pt-5">
                <cardComponent />
            </div>
            <div class="load text-center d-flex justify-content-center text-uppercase">
                <span>Load more</span>
            </div>
        </div>
    </div>
    <div class="item-dc" style="background-color: #0282f9;">
        <div class="container p-5">
            <div class="d-flex justify-content-around align-items-center flex-wrap gap-3">
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-digital-comics.png" alt="digital comics">
                    <span class="text-uppercase ms-3">Digital Comics</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-merchandise.png" alt="merchandise">
                    <span class="text-uppercase ms-3">DC Merchandise</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-subscriptions.png" alt="Subscription">
                    <span class="text-uppercase ms-3">Subscription</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-comics-shop-locator.png" alt="Locator">
                    <span class="text-uppercase ms-3">Comics Shop Locator</span>
                </div>
                <div class="item text-white">
                    <img class="small" src="../assets/img/buy-dc-power-visa.svg" alt="digital comics">
                    <span class="text-uppercase ms-3">DC Power Visa</span>
                </div>
            </div>
        </div>
    </div>
    </main>

    @include('partials.footer')

</body>

</html>

<style lang="scss">

    .showtitle a {
        background-color: #0282f9;
        position: absolute;
        top: -40px;
        left: -5px;
        padding: 10px 18px;
        text-decoration: none;
        color: white;
    }

    .jumbotron {
        background-image: url(../assets/img/jumbotron.jpg);
        background-position: top center;
        background-size: cover;
        height: 400px;
    }

    .comics {
        background-color: #1c1c1c;
    }    

    .comics .container {
        position: relative;
    }

    

    .comic-card {
        max-width: 150px
    }

    .cover {
        width: 190px;
        height: 190px;
    }

    img {
        width: 100%;
    }

    .load {
        color: white;
        background-color: #0282f9;
        padding: 10px 50px;
        margin-top: 35px;
        margin-bottom: 20px;
        font-weight: 700;
        cursor: pointer;
    }

    .item img {
        width: 50px;
    }

    img .small{
        width: 0px;
    }



</style>