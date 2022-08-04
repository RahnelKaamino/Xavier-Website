<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Xavier University</title>

    <link rel = "icon" href = "{{asset('assets\img\title_logo.ico')}}"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/welcome/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/welcome-body/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
    <body class="antialiased">
        
        @include('layouts.welcome.welcome-navbar')
        <img src="{{asset('assets\img\finance.jpg')}}" alt="admission" class="img-fluid">
        @include('academics.academics-sidebar')
        
        @include('academics.commencement-body')

        @include('layouts.welcome.welcome-footer')




        <style>
            @import url('http://fonts.cdnfonts.com/css/merriweather');
            @import url('http://fonts.cdnfonts.com/css/montserrat');
            @import url('http://fonts.cdnfonts.com/css/poppins');


.logo a{
    width: 70% !important;
}

/* fonts */
.text-font{
    font-family: "Montserrat";
    padding-left: 1ch;
    font-style: normal;
    font-size: 23px;
    color: #000000;
}

.text-font1{
    font-family: "Merriweather" !important;
}

.text-font2{
    font-family: "Montserrat" !important;
    font-weight: bold;
    color: #9D9158;
}

.text-font3{
    font-family: "Merriweather" !important;
    font-weight: normal;
    font-size: 17px;
    color: #000033;
}

.text-font4{
    text-decoration: none !important;
    font-family: "Montserrat" !important;
    font-weight: bold;
    color: #fff !important;
}

.text-font5{
    font-family: "Montserrat" !important;
    font-weight: normal;
    color: #9D9158;
}

.text-font6{
    text-decoration: none !important;
    font-family: "Poppins" !important;
    font-weight: normal;
    color: #2B5FB6;
}

.text-font7{
    text-decoration: none !important;
    font-family: "Poppins" !important;
    font-weight: normal;
    color: #646161 !important;
}

.text-font8{
    text-decoration: none !important;
    font-family: "Kontserrat" !important;
    font-style: italic, bold;
    color: #000033 !important;
}


.dec{
    text-decoration: none;
}

/* colors */
.color1{
    background-color: #283271 !important;
}

.color2{
    background-color: #9D9158 !important;
}

.text-color1{
    text-decoration: none !important;
    color: #fff !important;
}


/* responsive */
@media (max-width: 992px){

}


            </style>
    </body></html>
