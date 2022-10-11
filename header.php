<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }        
        ::-webkit-scrollbar{
            width:8px;
        }
        ::-webkit-scrollbar-thumb{
            background-image:linear-gradient(45deg, #703d03, #4b8400);
            border-radius:10px;
        }
        ::-webkit-scrollbar-track{
            background:rgba(0,0,0,.8);
        }
        header {
            background: url(https://www.habborator.org/archive/webview/web_view_bg_cn2.gif);
            background-size: cover;
            width: 100%;
            height: 200px;
        }

        header .header {
            width: 100%;
            background-repeat: no-repeat;
            position: absolute;
            top: -30px;
            display: flex;
            justify-content: space-around;
        }

        .header .menu {
            margin: 90px 0 0 0;
            display: flex;
            justify-content: space-between !important;
            align-items: center;
            position: absolute;
        }

        .header .menu .menuLink {
            list-style: none;
            float: left;
            margin-right: 25px;
            color: #4B8400;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .duyuru p{
            width: 190px;
            height: 90px;
            position: absolute;
            left: 57px;
            top: 47px;
            font-size: 12px;
            color: #fff;
            font-weight: bold;
            word-wrap: break-word;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .borderH{
            width: 100%;
            height: 50px;
            background: #703d03;
            border: 1px solid #4B8400;
            border-width: 2px 0 2px 0 ;
            overflow:hidden;
            position:relative;
        }
        .borderH:before{
            content:" ";
            position:absolute;
            width:100%;
            height:100%;
            background:linear-gradient(
                rgba(0,0,0,.5),
                rgba(0,0,0,.1),
                rgba(0,0,0,.5));
        }
        .borderH p{
            width:100%;
            height:100%;
            background-repeat:no-repeat !important;
            background-position:center , center !important;
            position:absolute;
            z-index:2;
        }
        header .header .menu .menuLink a{
            color:#4B8400;
            text-decoration:none;
        }
        .header .menu .menuLink a:hover{
            color:#10350c;
            cursor:pointer;
        }
        .header .menu .menuLink a{
            display:flex;
            flex-direction:column;
            align-items:center
        }
        .header>.menu>.menuLink>a>img{
            max-width:40px;
        }
        .header .menu .dropMenu{
            display:none;
            position:absolute;
            background:#0a200e;
            padding:10px 0;
            border-radius:10px;
            z-index:100;
            border:1px solid #007431;
        }
        .header .menu .dropMenu li:nth-child(1){
            border-top:1px solid #007431
        }
        .header .menu .dropMenu li{
            list-style:none;
            border-bottom:1px solid #007431;
            width:100%;
            padding:5px;
        }
        .header .menu .onMenu{
            display:block;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <img src="header-bg.png" alt="header background" style="position:absolute">
            <ul class="menu">
                <li><a href="index.php"><img src="favicon.png" alt=""></a></li>
                <li id="dropBtn" class="menuLink"><a href="index.php"><img src="images/home.png" alt=""> anasayfa</a></li>
                <li id="dropBtn" class="menuLink"><a href=""><img src="images/king.png" alt="">galeri</a></li>
                <li id="dropBtn" class="menuLink"><a href="shop.php"><img src="images/shop.png" alt="">market</a></li>
                <li id="dropBtn" class="menuLink"><a href=""><img src="images/news.png" alt="">kayıt</a></li>
                <li id="dropBtn" class="menuLink"><a><img src="images/habbo.png" alt="">topluluk</a>
                <ul class="dropMenu">
                <li><a href="#">Ailemiz</a></li>
                <li><a href="support.php">Destekçilerimiz</a></li>
            </ul></li>
            </ul>
        </div>
        <script>
            let dropMenu = document.querySelectorAll('.dropMenu');
            let menuLink = document.querySelectorAll('.menuLink');
            menuLink[4].addEventListener('click', () =>{
                dropMenu[0].classList.toggle('onMenu');
            });




            window.onclick = function(e){
                if(!e.target.matches('.menuLink')){
                for(var i = 0; i< 5; i++){
                    if(dropMenu.classList.contains('onMenu')){
                        dropMenu.classList.remove('onMenu')
                    }
                }
            }
            }
        </script>
        <div class="duyuru" style="position: absolute;background: url(duyuru.gif);width: 300px;height: 146px;background-size: countain;background-position: center;background-repeat: no-repeat;">
            <p>İlk karoda *mayınları patlat* yazınız ve kırmızı işaretli kolu çekiniz. İlk karoda *mayınları patlat* yazınız ve kırmızı işaretli kolu çekiniz. İkinci karoya geldiğinizde *ateş aç* yazınız ve kırmızı işaretli kolu çekiniz.</p>
        </div>
    </header>
    <div class="borderH">
        <p style="background:url(https://habbofont.net/font/exchange/<?php echo $message; ?>.gif)"></p>
    </div>
</body>
</html>