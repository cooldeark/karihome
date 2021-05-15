<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title>James Website</title>

        <!-- for Google -->

    <meta name="title" content="卡洛塔妮-小羊愛妮打擊病菌翻牌去">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="卡洛塔妮" />
    <meta name="copyright" content="卡洛塔妮" />
    <meta name="application-name" content="卡洛塔妮" />

    <!-- for Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="卡洛塔妮-小羊愛妮打擊病菌翻牌去" />
    <meta property="og:description" content=""/>
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="卡洛塔妮" /> 
    <meta property="og:image" content=""/>
 
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138714632-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138714632-4');
</script> --}}

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : "{{config('app.fb_varible.FB_CLIENT_ID')}}",
      app_secret : "{{config('app.fb_varible.FB_CLIENT_SECRET')}}",
      cookie     : true,
      xfbml      : true,
      version    : 'v7.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <!---NAV--->
<header>
    <nav class="mobile-menu">
        <div class="Logo_pc"><a href="/"><img src="./images/bar_01_logo.png"></a></div>
        <label for="show-menu" class="show-menu"><span><a href="/"><img src="./images/bar_01_logo.png"></a></span>
            <div class="lines"><img src="./images/nav.png"></div></label>
            <input type="checkbox" id="show-menu">
                <ul id="menu">
                    <li class="logo"><a href="#"> </a></li>
                <li class="options"><a id="activityDescription"  style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal"><img src="./images/bar_02_explanation.png" alt="活動說明"></a></li>
                <li class="options"><a id="activityStore" href="/store"><img src="./images/bar_02_store.png" alt="活動店家"></a>		</li>
                <li class="options"><a id="productIntruduce" href="https://www.karihome.com.tw/zh-TW/product.php?id=15" target="_blank"><img src="./images/bar_03_product.png" alt="產品介紹"></a></li>
                <li class="options"><a id="getInActivity" href="/roster"><img src="./images/bar_04_roster.png" alt="參加名單"></a></li>
                
                <div class="FB_PC myFBClick">
                    <a href="https://www.facebook.com/karihome.tw/" target="_blank"><img src="./images/facebook.png" alt="FB"></a></div>
                <div class="LINE_PC myLineClick"><a href="https://line.me/R/ti/p/83diRrD9ou" target="_blank"><img  src="./images/line.png" alt="LINE"></a></div>

                <div class="FB myFBClick">
                    <a  href="https://www.facebook.com/karihome.tw/" target="_blank"><img class="icon-size" src="./images/facebook.png" alt="FB"></a></div>
                <div class="LINE myLineClick"><a href="https://line.me/R/ti/p/83diRrD9ou" target="_blank"><img  class="icon-size" src="./images/line.png" alt="LINE"></a></div>
                <!--<li><span><a><img style="width: 20%;" class="icon-size" src="./images/facebook.png" alt="FB"></a>
                <a><img  style="width: 20%;"  src="./images/header-line-icon.png" alt="line"></a></span></li>-->
               
            </ul>
            
        </nav>
    </header>       
    
    <div class="WRAPPER">
        <!---------活動首頁----------------------->


        <section class="event">
            <div class="group">
                <div class="attend">
                   <div  class="number"><p style="font-size:x-large;" id="number">{{$countTimes}}</p></div> 
                </div>
                <div class="title">
                    <div class="bg">
                    <div class="kuai"><img src="./images/C1_kuai_img.png"></div>
                    <div class="content"><p>點擊右側開始遊戲按鈕並參加小遊戲分享至個人Facebook塗鴉牆
                        即可獲得商品優惠券及卡洛塔妮限定乖乖乙包兌換資格。<br>
                        參與次數越多不但可以做公益還可以抽到Mister baby系列產品唷。
                    </p></div>
                    </div>
                </div>
                <div class="title_m">
                    <!-- <img src="./images/Mtitle1-1.png"> -->
                    <div class="bg">
                    <div class="content ml-5 mt-5"><p>點擊右側開始遊戲按鈕並參加小遊戲分享至個人Facebook塗鴉牆
                        即可獲得商品優惠券及卡洛塔妮限定乖乖乙包兌換資格。<br>
                        參與次數越多不但可以做公益還可以抽到Mister baby系列產品唷。
                    </p></div>
                </div>
                </div>

                    <div class="video">
                    <!-- <iframe id="ytPlayer" src="https://www.youtube.com/embed/ekNZNDNvz3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <div id="player"></div>
                    <script src="https://www.youtube.com/player_api"></script>
                    </div>
                    <div class="start">
                        <div class="gamename">
                            <img src="./images/c1_title.png">
                        </div>
                        <div id="gameBtn" class="game_btn" style="cursor:pointer;">
                            <a ><img src="./images/c1_btn.png"></a>
                        </div>
                    </div>
              
               
            </div>
            
            </div>
        </section>

        <!------活動說明------->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title even_text_box scrollbar" id="exampleModalLabel">
          <h5>2020/07/01至2020/12/31 於活動首頁點擊參加小遊戲，並登入個人Facebook 帳戶觀賞卡洛塔妮洗手舞影片，觀看完畢後進入小遊戲。</h5><br>
           <p>
            1. 挑戰完成後需填寫參加人資訊：姓名、身分證字號、生日、地址、聯絡電話<br>
            2. 勾選「✓」 我已同意卡洛塔妮小羊愛妮 星際探險趣活動相關規定<br>
            3. 分享活動資訊至個人Facebook 塗鴉牆(需公開)<br>
            4. 導連至LINE 官方加入好友後即可獲得相應門市的乖乖兌換券及商品折價券(限選定之門市使用)。<br>
            5. 參加抽獎，將有機會獲得Mister baby 系列產品乙份。</p><br>
            6.資料搜集為抽獎用途，並不會將個人資料使用於抽獎之外的其他地方<br><br>
            <h5>填寫資料將顯示於參加名單頁面供確認是否參加成功，並於每月30 日抽出得獎者，公佈於參加名單頁面。</h5>
            
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img style="width: 70px;"  src="./images/out.png">
          </button>
        </div>
    
     
      </div>
    </div>
  </div>
        
    </div>
<div id="alreadyWatch" style="display:none;">{{$alreadyWatch}}</div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<script>

 let watchVideo=false;  
 if($('#alreadyWatch').text()=='true'){
    watchVideo=true;
 }else{
    watchVideo=false;
 }
 var player;
 function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
            //   width: '640',
            //   height: '390',
              videoId: 'ekNZNDNvz3U',
              events: {
                onReady: onPlayerReady,
                onStateChange: onPlayerStateChange
              }
            });
        }

        // autoplay video
        function onPlayerReady(event) {
            // event.target.playVideo();
            // $('#play-btn').on("click", function() { 
            // playerVideo.playerPlay();
            // console.log('play');
            // return false;
            // });
        }

        // when video ends
        function onPlayerStateChange(event) {   
            if(event.data==YT.PlayerState.PLAYING){
                gtag('event', 'video_start'); 
            }
            
            if(event.data === 0) {          
                watchVideo=true;
                gtag('event', 'video_complete'); 
            }
        }

        



//正式上線把這裡拿掉註解就好
$('#gameBtn').click(function(){
    if(watchVideo){
        FB.login(function(response){
        console.log(response);
        if(response.status=='unknown'){
            alert('請先登入FB才能玩遊戲哦~');
        }else if(response.status=='connected'){

        //FB.api=>取得user身上的資訊    
        FB.api('/me', { locale: 'tr_TR', fields: 'name, email,birthday, hometown,education,gender,website,work' },
          function(response) {
            console.log(response);
            console.log(response.email);
            console.log(response.name);
            console.log(response.gender);
            console.log(response.birthday);
            console.log(response.hometown);
            console.log(response.education);
            console.log(response.website);
            console.log(response.work);
          }
        );


            $.ajax({
            url:"/getBladeFBID",
            data:{FBId:response.authResponse.userID},
            type:'get',
            success:function(data){
                console.log('success');
                // window.location.href="{{url('/game')}}";
            }
        }).fail(function(data){
        });
        }
    },{scope: 'public_profile,email'});
    }else{
        alert("請先觀賞完卡洛塔妮洗手舞就能玩遊戲囉");
    }
    
    
});

//上線拿掉這裡以下
// $('#gameBtn').click(function(){
//     if(watchVideo){
//             $.ajax({
//             url:"/getBladeFBID",
//             data:{FBId:'test'},
//             type:'get',
//             success:function(data){
//                 console.log('success');
//                 window.location.href="{{url('/game')}}";
//             }
//         }).fail(function(data){
//         });
        
    
//     }else{
//         alert("請先觀賞完卡洛塔妮洗手舞就能玩遊戲囉");
//     }
    
    
// });
//上線拿掉這裡以上

//GTAG事件code
// $('#activityDescription').click(function(){
//     gtag('event', 'activityDescription'); 
// });

// $('#activityStore').click(function(){
//     gtag('event', 'activityStore'); 
// });
// $('#productIntruduce').click(function(){
//     gtag('event', 'productIntruduce'); 
// });

// $('#getInActivity').click(function(){
//     gtag('event', 'getInActivity'); 
// });
// $('.myFBClick').click(function(){
//     gtag('event', 'FBClick'); 
// });
// $('.myLineClick').click(function(){
//     gtag('event', 'LineClick'); 
// });

</script>

    
</body>
</html>
