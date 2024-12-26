@extends('layouts.general')

@section('content')
    <div class="assembly-description-container-back ">
        <div class="content article-fixel-text-white article-description-size-60">
            {{-- article-description-text --}}
            <p>Звернення Буданова до капелланів</p>
        </div>
    </div>
    <div class="assembly-content-container-back ">
        <div class="content article-fixel-text ">
            <div class="article-text-container article-video">
                <video class="" width="1400" 
                {{-- height="240"  --}}
                controls>
                    <source src="../video/video_01.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        {{-- <div class="article-img-container">
            <img class="article-content-img" src="../img/military_img1.png" alt="">
            <img class="article-content-img" src="../img/military_img2.png" alt="">
            <img class="article-content-img" src="../img/military_img3.png" alt="">
        </div> --}}
    </div>
@endsection