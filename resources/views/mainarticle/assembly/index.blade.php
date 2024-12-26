@extends('layouts.general')

@section('content')
    <div class="assembly-description-container-back ">
        <div class="content article-fixel-text-white">
            {{-- article-description-text --}}
            <p><span>Військовий капелан</span> — це священнослужитель, який служить в збройних силах, надаючи духовну, моральну та психологічну підтримку військовослужбовцям і їхнім сім’ям. Він є посередником між релігійними потребами військових і командуванням, забезпечуючи свободу віросповідання навіть у складних умовах війни чи військової служби.</p>
        </div>
    </div>
    <div class="assembly-content-container-back ">
        <div class="content article-fixel-text ">
            <div class="article-text-container ">
                <video width="900" 
                {{-- height="240"  --}}
                controls>
                    <source src="../video/video_01.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="article-img-container">
            <img class="article-content-img" src="../img/military_img1.png" alt="">
            <img class="article-content-img" src="../img/military_img2.png" alt="">
            <img class="article-content-img" src="../img/military_img3.png" alt="">
        </div>
    </div>
@endsection