<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <style>
        *{
            border:none;
            padding:none;
            margin:none;
        }
        .indexContent{
            width:100%;
            background:url(bg3.png);
            overflow:hidden;
            min-height:1000px;
            padding:0 50px;
            box-sizing:border-box;
        }

        .btn_submit{
            position:relative;
            width:200px;
            height:50px;
            color:#03e9f4;
            text-align:center;
            display:inline-block;
            font-size:18px;
            text-decoration:none;
            overflow:hidden;
            line-height:50px;
            background:black
        }
        .btn_submit span{
            position:absolute;
            display:block;
        }
        .btn_submit span:nth-child(1){
            top:0;
            left:-100%;
            width:100%;
            height:2px;
            background:linear-gradient(90deg, transparent, #03e9f4);
            animation:btn_anim1 1s linear infinite;
        }
        @keyframes btn_anim1{
            0%{
                left:-100%
            }

            50%, 100%{
                left:100%
            }
        }
        .btn_submit span:nth-child(2){
            top:-100%;
            right:0;
            width:2px;
            height:100%;
            background:linear-gradient(180deg, transparent, #03e9f4);
            animation:btn_anim2 1s linear infinite;
            animation-delay:.25s;
        }
        @keyframes btn_anim2{
            0%{
                top:-100%
            }

            50%, 100%{
                top:100%
            }
        }
        .btn_submit span:nth-child(3){
            bottom:0;
            right:-100%;
            width:100%;
            height:2px;
            background:linear-gradient(270deg, transparent, #03e9f4);
            animation:btn_anim3 1s linear infinite;
            animation-delay:.50s;
        }
        @keyframes btn_anim3{
            0%{
                right:-100%;
            }

            50%, 100%{
                right:100%;
            }
        }
        .btn_submit span:nth-child(4){
            left:0;
            bottom:-100%;
            width:2px;
            height:100%;
            background:linear-gradient(360deg, transparent, #03e9f4);
            animation:btn_anim4 1s linear infinite;
            animation-delay:.75s;
        }
        @keyframes btn_anim4{
            0%{
                bottom:-100%
            }

            50%, 100%{
                bottom:100%
            }
        }

/* açılır-kapanır slide CSS
ana renk : 0a200e
yan renk : 007431
*/
        .slideContent{
            width:100%;
            padding:30px 0;
            background: rgba(10 ,32 ,14 ,.5);
            box-sizing:border-box;
            backdrop-filter:blur(4px);
            border:1px solid #007431;
            border-radius:10px;
            display:flex;
            justify-content:center;
            margin: 40px 0;
        }
        .slidePage{
            width:8%;
            height:400px;
            border-radius:10px;
            background:transparent;
            margin: 0 5px 0 5px;
            border:1px solid #007431;
            overflow:hidden;
        }
        .slidePage .pageCont{
            width:100%;
            height:100%;
            border-radius:10px;
            background-repeat:no-repeat !important;
            background-position:bottom !important;
            background-color:rgba(0,0,0,.6);
            position:relative;
            display:flex;
            justify-content:center;
        }
        .slidePage .pageCont .title{
            height:60px;
            color:#fff;
            line-height:30px;
            border-radius:5px;
            background:#0a200e;
            border:1px solid #007431;
            box-sizing:border-box;
            position:absolute;
            top:10px;
            left:15px;
            right:15px;
            opacity:0;
        }
        .onPage .pageCont .title{
            height:50px;
            margin:5px;
            background: #0a200e;
            border:1px solid #007431;
            color:white;
            border-radius: 5px;
            position:absolute;
            top:calc(100% - 60px);
            line-height:50px;
            box-sizing:border-box;
            right:5px;
            left:5px;
            opacity:1;
        }
        .slideContent .onPage{
            width:calc(100% - 24% - 100px);
        }
        .slideContent .onPage .pageCont{
            background-size:cover !important;
        }
        .onPage .pageCont{
            border:1px solid #01662b;
        }
        .slidePage:nth-child(1) .pageCont{
            background-image:url(images/design-7.png);
        }
        .slidePage:nth-child(2) .pageCont{
            background-image:url(images/design-6.png);
        }
        .slidePage:nth-child(3) .pageCont{
            background-image:url(images/design-5.png);
        }
        .slidePage:nth-child(4) .pageCont{
            background-image:url(images/design-4.png);
        }
        .slideContent .pageCont .badge{
            width:50px;
            height:50px;
            position:absolute;
            top:5px;
            background:#0a200e;
            border:1px solid #007431;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:10px;
        }
        .onPage .badge{
            left:5px !important;
        }
/* chatt page CSS */
        .chatContent{
            width:100%;
            min-height:700px;
            background:linear-gradient(#ff512f, #dd2476);
            background-repeat:repeat;
            margin:40px 0;
            border-radius:10px;
        }
        /* Hareketli Slider CSS*/
        .animateSlider{
            width:50%;
            height:240px;
            background:#0a1f0e;
            border:1px solid #007431;
            border-radius:10px;
            display:flex;
            overflow:hidden;
            position:relative;
            align-items:center;
            justify-content:center;
        }
        .animateSlider .slide{
            width:200px;
            height:200px;
            background:yellow;
            position:relative;
            line-height:200px;
            text-align:center;
            font-size:20px;
            color:#fff;
            text-transform:uppercase;
            position:absolute;
            display:none;
            transition:all 2s ease;
            border-radius:10px;
        }
        .animateSlider .center{
            display:block;
            background-size:cover !important;
            border:1px solid #007431;
        }
        .animateSlider .slide:nth-child(1){
            background:url(https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-5801618-1665089474180.png)
        }
        .animateSlider .slide:nth-child(2){
            background:url(https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-5801618-1664906210801.png)
        }
        .animateSlider .slide:nth-child(3){
            background:url(https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-5801618-1664644186406.png)
        }
        .animateSlider .slide:nth-child(4){
            background:url(https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-5801618-1656800378742.png)
        }
        .animateSlider .slide:nth-child(5){
            background:url(https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-5801618-1656348436646.png)
        }
        .animateSlider .slide:nth-child(6){
            background:url(https://habbo-stories-content.s3.amazonaws.com/servercamera/purchased/hhtr/p-5801618-1655152708650.png)
        }
    </style>
</head>
<body>
    <?php 
    $message = "habbo+turkiye+ozel+harekat+resmi+web+sitesine+hosgeldiniz";
    include 'header.php';
    ?>
<div class="indexContent">
<?php 
// $api_url = 'https://habboassets.com/api/v1/badges';
// // Get furniture from our API
// $furnis = json_decode(file_get_contents($api_url), true); 
// foreach($furnis['badges'] as $furni){
// 	// Echo out furniture
// 	// echo '<img src="' . $furni['hotel'] . '" />'; 
//     $local_hotel = $furni['hotel'];
//     if ($local_hotel == 'com.tr') {
//         echo $furni['name'];
//         echo '<img src="' . $furni['url_habbo']. '"/>';
//     }
//     else {
//         echo 'not badges';
//     }
// };

?>
<a href="#" class="btn_submit">
    <span class="dnm"></span>
    <span class="dnm"></span>
    <span class="dnm"></span>
    <span class="dnm"></span>
    submit
</a>

<!---Hareketli Slider---->
<div class="animateSlider">
    <div class="slide center"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
</div>
<script>
    slideIN = 0;
    function showSlide(){
        let Slide = document.querySelectorAll(".slide");
    for(let i=0; i < Slide.length; i++){
        Slide[i].style.display = "none";
    }
    slideIN++;
    if(slideIN > Slide.length){slideIN = 1}; 
    Slide[slideIN - 1].style.display = "block";
    Slide[slideIN - 1].classList.add("center");
    };
    setInterval(showSlide, 2000);

</script>

<!--- Slider Page :ONN---->
<div class="slideContent">
<button class="slidePage onPage" onclick="button(this)"><div class="pageCont">
    <div class="title">
        Aktif Olarak Kullanılan Oda Tasarımımız
    </div>
    <div class="badge">
        <img src="favicon.png" alt="">
    </div>
</div></button>
<button class="slidePage" onclick="button(this)"><div class="pageCont">
    <div class="title">
        Şirketimizin 6. Oda Tasarımı
    </div>
    <div class="badge">
        <img src="favicon.png" alt="">
    </div>
</div></button>
<button class="slidePage" onclick="button(this)"><div class="pageCont">
    <div class="title">
        Şirketimizin 5. Oda Tasarımı
    </div>
    <div class="badge">
        <img src="favicon.png" alt="">
    </div>
</div></button>
<button class="slidePage" onclick="button(this)"><div class="pageCont">
    <div class="title">
        Şirketimizin 4. Oda Tasarımı
    </div>
    <div class="badge">
        <img src="favicon.png" alt="">
    </div>
</div></button>
</div>
<!--- Slider Page :OFF---->
<div class="chatContent">

</div>









</div>


<script>
    function button(value) {
        let pageCont = document.getElementsByClassName("slidePage");
        for (var i = 0 ; i <= 4 ; i++){
            pageCont[i].classList.remove('onPage');
            value.classList.add("onPage");
        }
    }
</script>
<?php 
    include 'footer.php';
    ?>
</body>
</html>