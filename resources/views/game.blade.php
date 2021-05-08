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
    <link href="css/game.css" rel="stylesheet" type="text/css" />
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
<style>
  .bolden{font-family:"Arial Black"}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138714632-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138714632-4');
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
                <li class="options"><a id="activityDescription" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal"><img src="./images/bar_02_explanation.png" alt="活動說明"></a>		</li>
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
      
    <div class="WRAPPER game_w">
        <!---------遊戲----------------------->
        <section class="game">
            <div class="group">
                <div class="box">
                    <div class="title">
                        <img src="./images/game/game_title.png">
                    </div>
                    <div class="turn_cards row" id="turn_cards" style="padding:2%;" >

                 <a class="cards memory-card" data-framework="norovirus" >
                        
                        <img class="front-face" src="./images/1.png"  alt="The image isn't showing" />
                        <img class="back-face" src="./images/5-10.png"  alt="The image isn't showing"/>
                   </a>

                   <a class="cards memory-card" data-framework="norovirus">
                    
                    <img class="front-face" src="./images/1.png"  alt="The image isn't showing" />
                    <img class="back-face" src="./images/5-10.png"  alt="The image isn't showing"/>
               </a>

                   <a class="cards memory-card" data-framework="bellyvirus">
                    <img class="front-face" src="./images/3.png"  alt="The image isn't showing"/>
                    <img class="back-face" src="./images/5-10.png" alt="The image isn't showing" />
                   </a>

                   <a class="cards memory-card" data-framework="bellyvirus">
                    <img class="front-face" src="./images/3.png"  alt="The image isn't showing"/>
                    <img class="back-face" src="./images/5-10.png" alt="The image isn't showing" />
                   </a>

                   <a class="cards logomemory-card flip" style="order: 4;" data-framework="logoShow" >
                    <img class="front-face" src="./images/5-9.png" alt="The image isn't showing" />
                   </a>

                   <a class="cards memory-card" data-framework="japanBrainVirus">
                    <img class="front-face" src="./images/5.png"  alt="The image isn't showing"/>
                    <img class="back-face" src="./images/5-10.png" alt="The image isn't showing" />
                   </a>

                   <a class="cards memory-card" data-framework="japanBrainVirus">
                    <img class="front-face" src="./images/5.png"  alt="The image isn't showing"/>
                    <img class="back-face" src="./images/5-10.png" alt="The image isn't showing" />
                   </a>

                   <a class="cards memory-card" data-framework="newCovid2019">
                    <img class="front-face" src="./images/7.png"  alt="The image isn't showing"/>
                    <img class="back-face" src="./images/5-10.png"  alt="The image isn't showing"/>
                   </a>

                   <a class="cards memory-card" data-framework="newCovid2019">
                    <img class="front-face" src="./images/7.png"  alt="The image isn't showing"/>
                    <img class="back-face" src="./images/5-10.png"  alt="The image isn't showing"/>
                   </a>
                  
                </div>
                 </div>
            </div> 
            <!---group--->

    
            <!---遊戲說明---->
            
            <div id="gameDescription" style="cursor: pointer;" data-toggle="modal" class="btn btn-primary description">
           <a>
               <img src="./images/game/game_btn.png">
           </a>
           
        </div>

        </section>



                <!---插圖---->
                <div class="img_left">
                    <img src="./images/game/bg_03.png">
                </div>
    
                <div class="img_right">
                    <img src="./images/game/bg_07.png">
                </div>

        
        </div>

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
            <img style="width: 70px;" src="./images/out.png">
          </button>
        </div>
    
     
      </div>
    </div>
  </div>
        
    <!------挑戰成功------>

    <div class="modal fade pass" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content game_pass">
                <div class="modal-header game_close pass_close">
                    <button id="closeFinishBtn" type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img  style="width: 70px;"  src="./images/out.png"></button>
                </div>
               <div class="other_btn">
                    <div  class="box share " data-href="https://developers.facebook.com/docs/plugins/" data-hashtag="#5566">
                      <a id="fbShare" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.yangminglin.tk&hashtag=%23YangMingLinWEB" > <img src="./images/share.png" alt="立即分享"></a> 
                    </div>

                    <div data-toggle="modal" id="fillData" class="box from">
                        <button><img src="./images/from.png" alt="填寫資料"></button>
                    </div>
                    <div id="playAgain" class="box again" style="cursor: pointer;">
                        <img src="./images/again.png" alt="再一次"></a>
                    </div>
               </div>
            </div>
        </div>
        
    </div>
    <div class="modal fade rotate" id="myModal2">
      <div class="modal-dialog">
          <div class="modal-content game_des">
              <div class="modal-header  game_close">
                  <button id="closeDescription" type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img  style="width: 70px;"  src="./images/out.png"></button>
              </div>

              </div>
          </div>
      </div>

<!------挑戰成功------>
<div class="modal fade from" id="myModal4">
        <div class="modal-dialog">
            <div class="modal-content game_from">
                <div class="modal-header from_close">
                    <button id="closeFilltable" type="button" class="close" data-dismiss="modal" aria-hidden="true"><img  style="width: 70px;"  src="./images/out.png"></button>
                </div>
               
                <div class="modal-body">
                    <div class="message" id="message">
                        <div class="m_group">
                          <div class="box">
                            <input id="name" class="input_field  name" type="text" 
                            maxlength=6 name="name" placeholder="姓名" required >
                          </div>
                          <div class="box sexbox">
                            <!-- <input id="sex" class="input_field sex" type="text" name="sex" maxlength3 size="3" placeholder="女" required > -->
                            <select style="padding-left: 10px;font-family: 'Century Gothic', '微軟正黑體', 'Noto Sans TC', serif, Arial, Heiti TC, sans-serif;" name="sex" id="sex" class="input_field sex">
                              <option value="man">男</option>
                              <option value="female">女</option>
                            </select>
                          </div>

                          <div class="box">
                            <input style="padding-left: 10px;font-family: 'Century Gothic', '微軟正黑體', 'Noto Sans TC', serif, Arial, Heiti TC, sans-serif;" id="birth" class="input_field  date" 
                            maxlength=10 name="date"   type="date"  value="1990-01-01"  required>
                          </div>
                          <!--placeholder="1977/01/01" onfocus="(this.type='date')" onblur="(this.type='text')" -->
                          <div class="box">
                            <input id="identityID" class="input_field  date" type="text" name="ID"  maxlength=10 placeholder="身分證字號" required>
                          </div>

                  
                          <div class="box">
                            <input style="padding-left: 10px;font-family: 'Century Gothic', '微軟正黑體', 'Noto Sans TC', serif, Arial, Heiti TC, sans-serif;" id="phone" class="input_field" type="tel" name="mobile"  placeholder="0912-123-456" required >
                          </div>
                          
                          <div class="box">
                                  <div class="address">
                                    <input  id="address"  class="input_field padding" type="text"  placeholder="請輸入地址" name="address" required>
                                  </label>
                                  </div>
                          </div>
                          <!-- font-size: 18px; -->
                          
                          
                          <div class="box">
                            <select style="padding-left: 10px;font-family: 'Century Gothic', '微軟正黑體', 'Noto Sans TC', serif, Arial, Heiti TC, sans-serif;" name="whichStore" id="whichStore" class="input_field">
                              <option value="天母店">天母店</option>
                              <option value="台中店">台中店</option>
                              <option value="高雄店">高雄店</option>
                              
                            </select>
                          </div>
                    
                          <div class="privacy">
                            <input id="privacyBox" type="checkbox" name="privacyBox"> 我已同意卡洛塔妮小羊愛妮星際探險趣活相關規定，導連至LINE官方，即可獲得相應門市的乖乖兌換劵及商品折價劵參加抽獎，填寫資料名單將顯示於參加名單頁面。
                           
                          </div>
                  
                          <div class="submit_box" >
                            <button id="submit" class="button_sent"><a><span><img    src="./images/sent_btn.png" alt="送出名單"></span></a></button>
                          </div>
                        </div>
                      </div>
                </div>
                
                </div>
            </div>
        </div>
        <!------挑戰成功------>



    <button style="display:none;" id="showFinishModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
        showFinishModal
      </button>
      <button style="display:none;" id="showDescription" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
        showDescription
      </button>
      <button style="display:none;" id="showFillData" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
        showFillData
      </button>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- <script  src="js/index.js"></script> -->
    <div id="successSendData" style="display: none;" class="fromdown">
      <img src="./images/down.png" alt="資料送出後" >

</div>
<!--FB library-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v7.0&appId=1350736258450938&autoLogAppEvents=1" nonce="QkITEPoE"></script>



<script >
gtag('event', 'game_play'); 
  // (function(d, s, id) {
  //   var js, fjs = d.getElementsByTagName(s)[0];
  //   if (d.getElementById(id)) return;
  //   js = d.createElement(s); js.id = id;
  //   js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  //   fjs.parentNode.insertBefore(js, fjs);
  // }(document, 'script', 'facebook-jssdk'));

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));




  // function init() {
  //   FB.ui({
  //   display: 'popup',
  //   method: 'share',
  //   href: 'https://developers.facebook.com/docs/',
  // }, function(response){});
  //   }

  //   window.fbAsyncInit = function() {
  //     FB.init({
  //       appId      : '1350736258450938',
  //       xfbml      : true,
  //       version    : 'v7.0'
  //     });
  //     FB.AppEvents.logPageView();
  //     init();
  //   };


    var cards = document.querySelectorAll('.memory-card');
    // console.log(cards);
    
    $(document).ready(function () {
        
        // 通过该方法来为每次弹出的模态框设置最新的zIndex值，从而使最新的modal显示在最前面
        $(document).on('show.bs.modal', '.modal', function (event) {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            // setTimeout(function() {
            //     $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            // }, 0);
        });
       
        $('#fbShare').click(function(e) {
          gtag('event', 'fb_share'); 
        e.preventDefault();
        window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
    });
    });



    

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;

function flipCard() {
  // 剛剛沒配對成功的話，就把牌蓋起來
  if (lockBoard) return;
  // 避免翻同一張牌當做第二張
  if (this === firstCard) return;
  this.classList.add('flip');

  // if((this.dataset.framework=='logoShow')&&document.querySelectorAll('.flip').length==9){
  //   $(document).ready(function(){
  //     setTimeout(function(){
  //       $('#showFinishModal').trigger('click');
  //     },500);
      
  //   });
  //   return;
  // }
  // else
   if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this; // this => the clicked card
    return;
  }
    secondCard = this;
    checkForMatch();
  
  
}

function checkForMatch() {
  // 如果牌組配對成功 => isMatch
  // 就不可以再點擊那組牌 => disableCards()
  // 配對錯誤就把該牌組蓋起來 => unflipCards()
  // if(firstCard.dataset.framework=='logoShow' || secondCard.dataset.framework=='logoShow'){
  //   if(firstCard.dataset.framework=='logoShow'){
  //     lockBoard = true;
  //     firstCard.removeEventListener('click', flipCard);
  //     setTimeout(() => {
  //       secondCard.classList.remove('flip');
  //       resetBoard();
  //     }, 1500);
  //   }else if(secondCard.dataset.framework=='logoShow'){
  //     lockBoard = true;
  //     secondCard.removeEventListener('click', flipCard);
  //     setTimeout(() => {
  //       firstCard.classList.remove('flip');
  //       resetBoard();
  //     }, 1500);
  //   }
  // }else{
    let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
    isMatch ? disableCards() : unflipCards();
    if(document.querySelectorAll('.flip').length==9){
      gtag('event', 'game_complete'); 
      $(document).ready(function(){
        setTimeout(function(){
          $('#showFinishModal').trigger('click');
        },500);
        
      });
      
      
    }
    
    
    
  // }
}

function disableCards() {
  // 移除監聽事件，釋放記憶體
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);

  resetBoard();
}

function unflipCards() {
  lockBoard = true;

  // 把牌蓋起來
  setTimeout(() => {
    firstCard.classList.remove('flip');
    secondCard.classList.remove('flip');
    resetBoard();
  }, 1500);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

(function shuffle() {
  let nowNumArray=[0,1,2,3,5,6,7,8];
  cards.forEach(card => {
    if(card.dataset.framework=="logoShow"){
      //do nothing
    }else{
    let randomPos = nowNumArray[Math.floor(Math.random() * nowNumArray.length)];
    let nowNum=nowNumArray.indexOf(randomPos);
    if(nowNum>-1){
      nowNumArray.splice(nowNum,1);
    }
    card.style.order = randomPos;
    }
  });
})();


cards.forEach(card => card.addEventListener('click', flipCard));

$('#playAgain').click(function(){
  gtag('event', 'game_play'); 
  let allFlip=document.querySelectorAll('.flip');
  allFlip.forEach(card => {
    if(card.dataset.framework=='logoShow'){
      //do nothing
    }else{
      card.classList.remove('flip');
    }
  });

  cards.forEach(card => card.addEventListener('click', flipCard));

  $('#closeFinishBtn').trigger('click');
  
  (function shuffle() {
  let nowNumArray=[0,1,2,3,5,6,7,8];
  cards.forEach(card => {
    if(card.dataset.framework=="logoShow"){
      //do nothing
    }else{
    let randomPos = nowNumArray[Math.floor(Math.random() * nowNumArray.length)];
    let nowNum=nowNumArray.indexOf(randomPos);
    if(nowNum>-1){
      nowNumArray.splice(nowNum,1);
    }
    card.style.order = randomPos;
    }
  });
})();

});

// $('#shareFB').click(function(){
//   console.log(document.querySelectorAll('.flip').length);
// });


$('#fillData').click(function(){
  $('#showFillData').trigger('click');
  gtag('event', 'fillData'); 
});


$('#gameDescription').click(function(){
  gtag('event', 'showGameDescription'); 
  $('#showDescription').trigger('click');
});

$('#submit').click(function(){
  
  var checkValue=true;
  if($('#privacyBox').is(':checked')==true){
    if($('#name').val()=="" || $('#name').val()==undefined || $('#name').val()==null){
      alert('姓名無填寫');
      checkValue=false;
    }else if($('#sex').val()=="" || $('#sex').val()==undefined || $('#sex').val()==null){
      alert('性別無選擇');
      checkValue=false;
    }else if($('#birth').val()=="" || $('#birth').val()==undefined || $('#birth').val()==null){
      alert('生日無填寫');
      checkValue=false;
    }else if($('#identityID').val()=="" || $('#identityID').val()==undefined || $('#identityID').val()==null){
      alert('身分證無填寫');
      checkValue=false;
    }else if($('#phone').val()=="" || $('#phone').val()==undefined || $('#phone').val()==null){
      alert('手機號碼無填寫');
      checkValue=false;
    }else if($('#address').val()=="" || $('#address').val()==undefined || $('#address').val()==null){
      alert('地址無填寫');
      checkValue=false;
    }else if($('#whichStore').val()=="" || $('#whichStore').val()==undefined || $('#whichStore').val()==null){
      alert('店家未選擇');
      checkValue=false;
    }
    var checkPhone=new RegExp("[\\d]{4}-[\\d]{3}-[\\d]{3}");
    if(checkValue && checkPhone.test($('#phone').val())){
      $.ajax({
            url:"/register",
//             data:{name:$('#name').val(),sex:$('#sex').val(),birth:$('#birth').val(),identityID:$('#identityID').val(),phone:$('#phone').val(),address:$('#address').val(),whichStore:$('#whichStore').val(),FBID:{{$userFBID}}},
data:{name:$('#name').val(),sex:$('#sex').val(),birth:$('#birth').val(),identityID:$('#identityID').val(),phone:$('#phone').val(),address:$('#address').val(),whichStore:$('#whichStore').val(),FBID:"test"},
            type:'POST',
            dataType:'json',
            success:function(data){
                gtag('event', 'fillData_complete'); 
                $('#closeFinishBtn').trigger('click');
                $('#closeFilltable').trigger('click');
                $('#successSendData').css('display','block');
                setTimeout(function(){
                  window.location.href="https://lin.ee/BswxMX5";
                },3000);
                
            }
        }).fail(function(data){
                console.log('error');
        });
    }else if(checkPhone.test($('#phone').val())==false){
      alert("手機號碼格式不正確，需為09XX-XXX-XXX");
    }
    
  }else{
    alert("需同意卡洛塔妮小羊愛妮星際探險趣活相關規定才能參加抽獎哦~");
  }
  
  
});

$('#activityDescription').click(function(){
    gtag('event', 'activityDescription'); 
});

$('#activityStore').click(function(){
    gtag('event', 'activityStore'); 
});
$('#productIntruduce').click(function(){
    gtag('event', 'productIntruduce'); 
});

$('#getInActivity').click(function(){
    gtag('event', 'getInActivity'); 
});
$('.myFBClick').click(function(){
    gtag('event', 'FBClick'); 
});
$('.myLineClick').click(function(){
    gtag('event', 'LineClick'); 
});
</script>
</body>
</html>
