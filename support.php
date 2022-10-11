<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .supContent{
            background:url(bg3.png);
            padding:50px 50px;
            box-sizing:border-box;
        }
        .supporter{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-evenly;
        }
        .spUser{
            width:200px;
            height:200px;
            background:url(WORDBG.png);
            background-size:contain;
            position:relative;
            margin:10px;
        }
        .spUser .spName{
            position:absolute;
            left:30px;
            right:30px;
            bottom:35px;
            text-align:center;
            color:#fff;
            font-weight:bold;
            background:#4b8400;
            border-radius:10px;
            padding:2px;
        }
        .spUser .spAvatar{
            position:absolute;
            left:20px;
            right:20px;
            top:20px;
            bottom:50px;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .spUser .spBadge{
            position:absolute;
            top:30px;
            left:30px;
        }
        .lastSupports{
            width:35%;
            overflow:hidden;
            background:url(https://habbolar.com/img/neuebg/bg_pattern_abstract1.gif);
            float:right;
            margin-left:10px;
            margin-top:25px;
            border:1px solid #4B8400;
            border-radius:10px;
            padding:15px;
            display:flex;
            justify-content:center;
            flex-direction:column;
        }
        .lastSupports .supportArea{
            position:relative;
        }
        .lastSupports .supportArea span{
            width:calc(100% - 10px);
            height:30px;
            background:#091f0d;
            border:1px solid #4b8400;
            margin-bottom:15px;
            border-radius:10px;
            color:#fff;
            line-height:30px;
            padding-left:40px;
            display:flex;
            overflow:hidden;
            position:relative;
        }
        .lastSupports .supportArea p{
            padding-right:10px;
            color:#4b8400;
            font-weight:bold;
        }
        .lastSupports .supportArea .userHead{
            position:absolute;
            width:40px;
            height:40px;
            top:-5px;
            left:-5px;
            background:#4b8400;
            z-index: 1;
            border-radius:50%;
            border:1px solid white;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .lastSupports .supportArea .userHead img{
            width:40px;
        }
        .lastSupports .title{
            width:100%;
            height:50px;
            background-size:auto !important;
            background:url(https://habbofont.net/font/plants/son+destekler.gif);
            background-repeat:no-repeat;
            background-position:top center;
        }
    </style>
</head>
<body>
    <?php 
    $message = "tum+destekcilerimize+tesekkur+ederiz";
    include 'header.php';
    ?>
    <div class="supContent">
        <div class="lastSupports">
            <div class="title"></div>
            <div class="supportArea">
            <div class="userHead"><img title="maho121" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=maho121&headonly=1&size=m&gesture=sml" alt=""></div>
            <span><p>maho121</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
                <div class="userHead"><img title="Masterahmet72" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Masterahmet72&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>Masterahmet72</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="osmank33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=osmank33&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>osmank33</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="Lucifer.32" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Lucifer.32&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>Lucifer.32</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="-BirkaN-" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=-BirkaN-&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>-BirkaN-</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="Nichole2214" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Nichole2214&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>Nichole2214</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="yigitkarabck" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=yigitkarabck&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>yigitkarabck</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="Ekerhan2" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Ekerhan2&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>Ekerhan2</p>Destekte Bulunmuştur!</span>
            </div>
            <div class="supportArea">
            <div class="userHead"><img title="onur4861" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=onur4861&headonly=1&size=m&gesture=sml" alt=""></div>
                <span><p>onur4861</p>Destekte Bulunmuştur!</span>
            </div>
        </div>
        <div class="supporter">
        <div class="spUser">
                <div class="spName">maho121</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=maho121&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">FireStone146</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=FireStone146&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/gs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">osmank33</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=osmank33&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/gs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">Nichole2214</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Nichole2214&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">Masterahmet72</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Masterahmet72&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">yigitkarabck</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=yigitkarabck&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">onur4861</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=onur4861&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">Ekerhan2</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Ekerhan2&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">-BirkaN-</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=-BirkaN-&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
            <div class="spUser">
                <div class="spName">Lucifer.32</div>
                <div class="spAvatar">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Lucifer.32&action=wav&direction=3&head_direction=3&gesture=sml" alt="Supporter">
                </div>
                <div class="spBadge"><img title="Bronz Supporter" src="images/bs.gif" alt="supporter level badge"></div>
            </div>
        </div>
    </div>
        <?php 
    include 'footer.php';
    ?>
</body>
</html>