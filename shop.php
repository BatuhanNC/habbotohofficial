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
        }

        body {
            background: url(bg3.png);
        }
        .content{
            width: 100%;
            overflow: hidden;
            margin: 25px 0 0 0;
            padding: 0 5%;
            box-sizing: border-box;
        }
        .content .items{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            box-sizing: border-box;
        }
        .items .item{
            width: 170px;
            height: 190px;
            background: url(slideBG.png);
            border-radius: 5px;
            float: left;
            margin: 25px;
            position: relative;
            border: 2px solid #814704;
        }
        .items .item .itemName{
            height: 25px;
            background: rgb(75, 132, 0, .8);
            border-radius:5px;
            position: absolute;
            bottom: 5px;
            left: 4px;
            right: 4px;
            text-align: center;
            color: #c9d8da;
            font-size: 13px;
            line-height: 25px;
            font-weight: bold;
            box-shadow: 0 0 8px #000000;
        }
        .items .item .itemImg{
            width: 100%;
            height: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .items .item .itemStok{
            position: absolute;
            background:rgb(129, 71, 4, .8);
            top: 4px;
            right: 4px;
            width: 30px;
            height: 30px;
            border-radius: 5px;
            color: #c9d8da;
            font-size: 18px;
            text-align: center;
            line-height: 30px;
            box-shadow: 0 0 6px #000000;
        }
    </style>
</head>

<body>
    <?php 
    $message = "keyifli+kazanclar+dileriz";
    include'header.php';
    ?>
    <div class="content">
        <div class="items">
   
        </div>
    </div>
    <script src="shop.js"></script>
</body>

</html>