<!DOCTYPE html>
<head>
    <title>The Work Bay</title>
    <meta charset="UTF-8">
    <script src="Script.js"></script>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Styles/UserStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header id="header">
        <div id="flex">
        
        <img src="Styles/Src/UserIcon.jpg" id="icone" onclick="userOptions()"></button>
        </div>

        <div id="cover">
            <button id="changebanner" onclick="bannerSelector()">+</button>
            <img src="Styles/Src/CoolBanner.jpg" id="banner" alt="">
            <img src="Styles/Src/Shadow.png" id="shadow" alt="">
        </div>

        <div>
            <div id="userinfo"></div>
                <button id="changePic" onclick="fileSelector()">+</button>
                <img src="Styles/Src/LeoDicap.jpg" id="user" alt="">     
                <div id="about"></div>
                
            </div>
            <h1 id="name">Felipe Conceição</h1>
            <p id="subtitle">Pindamonhangaba - São Paulo</p>
            <h1 id="aboutText">ABOUT</h1>
            <p id="paragraph">gosto de trens e comunismo</p>
        
            <div id="stars">
                <h1 id="rating">RATING</h1>
                <div id="starelement">
                <span class="fa fa-star" id="star1" onclick="onStarClick(star1)"></span>
                <span class="fa fa-star" id="star2" onclick="onStarClick(star2)"></span>
                <span class="fa fa-star" id="star3" onclick="onStarClick(star3)"></span>
                <span class="fa fa-star" id="star4" onclick="onStarClick(star4)"></span>
                <span class="fa fa-star" id="star5" onclick="onStarClick(star5)"></span>
                </div>
            </div>

            <div id="featured">
                <img src="Styles/Src/ProjectPic.gif" id="projectpic" alt="">
                <h1 id="featuredtitle">FEATURED PROJECT</h1>
                <h1 id="projecttitle">PROJECT TITLE</h1>
                <p id="projectinfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quos totam placeat quia nam voluptatum recusandae praesentium, aut, omnis, dolores illo mollitia odio culpa unde.</p>
            </div>

            <div id="critics">
                <img src="Styles/Src/user.jpg" id="criticspic" alt="">
                <h1 id="criticsname" onclick="redirectTo('UserProfile')">Nickolas P.</h1>
                <p id="critictxt">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga facere eaque veritatis, voluptate in qui debitis voluptates, nihil ab beatae architecto? Ratione cupiditate porro, ipsam, repellendus provident excepturi ipsa sequi et quidem quam neque aliquam tempora. Totam qui impedit nulla!</p>
                <p id="date">20th October 2022</p>
            </div>
        </div>
    </header>
</body>