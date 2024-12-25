<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chaplain</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="mainbody">
    @csrf
        <div class="content main">
            <div class="mainname">
                {{-- <h2>ГРОМАДСЬКА ОРГАНІЗАЦІЯ УКРАЇНСЬКЕ КАПЕЛАНСТВО ДНІПРО</h2> --}}
                <h1>ГРОМАДСЬКА ОРГАНІЗАЦІЯ УКРАЇНСЬКЕ КАПЕЛАНСТВО ДНІПРО</h1>
            </div>
            <div class="shields">          
                <a href="{{ route('shield.military.index') }}">
                    <img class="shield1" src="../img/shield_military.png" alt="">                         
                </a>
                <a href="{{ route('shield.hospital.index') }}">
                    <img class="shield2" src="../img/shield_hospital.png" alt="">                        
                </a>                      
                <a href="{{ route('shield.penitentiary.index') }}">
                    <img class="shield3" src="../img/shield_penitentiary.png" alt="">   
                </a> 
                <a href="{{ route('shield.maritime.index') }}">
                    <img class="shield4" src="../img/shield_maritime.png" alt="">   
                </a>
                <a href="{{ route('main') }}">
                    <img class="shieldmain" src="../img/chaplain.png" alt="">   
                </a>
                <a href="{{ route('shield.municipal.index') }}">
                    <img class="shield5" src="../img/shield_municipal.png" alt="">   
                </a>
                <a href="{{ route('shield.police.index') }}">
                    <img class="shield6" src="../img/shield_police.png" alt="">   
                </a>
                <a href="{{ route('shield.corporate.index') }}">
                    <img class="shield7" src="../img/shield_corporate.png" alt="">   
                </a>
                <a href="{{ route('shield.sports.index') }}">
                    <img class="shield8" src="../img/shield_sports.png" alt="">   
                </a>                                
            </div>
            <div class="titles">
                <a class="title1" href="{{ route('shield.military.index') }}">
                    Військове
                </a>            
                <a class="title2" href="{{ route('shield.police.index') }}">
                    Поліцейське
                </a>
                <a class="title3" href="{{ route('shield.penitentiary.index') }}">
                    Пенітенціарне
                </a>
                <a class="title4" href="{{ route('shield.municipal.index') }}">
                    Муніципальне
                </a>
                <a class="title5" href="{{ route('shield.hospital.index') }}">
                    Госпітальне
                </a>
                <a class="title6" href="{{ route('shield.maritime.index') }}">
                    Морське
                </a>
                <a class="title7" href="{{ route('shield.sports.index') }}">
                    Спортивне
                </a>
                <a class="title8" href="{{ route('shield.corporate.index') }}">
                    Корпоративне
                </a>
                <a href="#" class="title9">
                    Реабілітація
                </a>
                <a href="#" class="title10">
                    війскових
                </a>
                <img class="cross" src="../img/cross.png" alt="">
            </div>
            <div class="assembly ">
                <div class="assembly-left ">
                    <div class=" assembly-left-one">                        
                        <a class="assembly-link-color" href="{{ route('mainarticle.missionswerk.index') }}"> 
                            <img class="logo-missionswerk-main" src="../img/Logo_Missionswerk2.png" alt="">
                        {{-- <span>Missionswerk</span>  --}}
                        <br> Промені радості</a>
                    </div>
                    <div class=" assembly-left-two">
                        <a class="assembly-link-color" href="#">
                            <img class="logo-assembly-main" src="../img/Logo_assembly.png" alt=""> <br> Асамблея</a>
                    </div>
                    {{-- <div class=" assembly-left-three">
                        <a class="assembly-link-color" href="#">Новини дня</a>
                    </div> --}}
                    {{-- <div class="assembly-left-four">

                    </div> --}}
                </div>
                <div class="assembly-right ">
                    <div class=" assembly-right-one">
                        <a class="assembly-link-color" href="{{ route('mainarticle.assembly.index') }}">
                            <img class="logo-symbiosis-main" src="../img/Logo_symbiosis.png" alt=""> 
                            <br> Симбіоз з Богом</a>
                    </div>
                    <div class=" assembly-right-two">
                        <a class="assembly-link-color" href="{{ route('mainarticle.arc.index') }}">
                            <img class="logo-hippos-main" src="../img/Logo_hippos.png" alt=""><br> Центр реабілітації</a>
                    </div>
                    {{-- <div class=" assembly-right-three">
                        <a class="assembly-link-color" href="#">Новини дня</a>
                    </div> --}}
                    {{-- <div class="assembly-right-four">
                        
                    </div> --}}
                </div>
            </div>
        </div>
        @include('layouts.footer')
            {{-- <div>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure, rem ratione nulla delectus mollitia doloribus earum voluptate officia consequatur dolores similique itaque quia facere harum necessitatibus voluptatum. Animi, dolores.
            </div>
            <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque molestias laudantium optio, ut at explicabo, harum distinctio corrupti ipsum hic deserunt quasi sint consectetur veritatis saepe alias, molestiae voluptate? Quo!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, temporibus. Perferendis quis quod eveniet sint commodi vero assumenda voluptatum ipsam minima ducimus porro, aut nisi fuga quia, recusandae consectetur? Libero.
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia, nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consequuntur dolorem et nam distinctio earum, corporis aperiam doloribus officia,
            nisi dolorum sequi esse quas facere numquam praesentium. Animi, vitae fugiat!</div>--}}   
</body>
</html>
