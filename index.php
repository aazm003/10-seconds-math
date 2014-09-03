<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"  prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"  prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"  prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mental Math Trainer | A professional brain trainer. One that is both efficient and fun to use</title>
        <meta name="description" content="A professional brain trainer. One that is both efficient and fun to use.
We want to show you that mathematics is far from boring. It's awesome! It's fun! It makes sense.
Don't lollygag around on the web or with other dull 'learning' apps. You just found what you were looking for. A professional brain trainer, one that is both efficient and fun to use.
Strengthen your mental abilities, improve your ability to stay concentrated over long periods of time and sharpen your perception skills.
You won't regret it.
We guarantee, if you make it through the entire plan you'll be better than you've ever been. Pinky promise!">


        <meta name="author" content="Troubi Entertainment">
        <meta name="keywords" content="mental math trainer, math practice, mental arithmetic, mental calculations, math trainer, online, free, no download, mathematik kopfrechentrainer, mathe trainer online, mathe üben, kopfrechnen üben" />



        <meta property="og:image" content="http://www.mental-math-trainer/img/mental-math-trainer.png" />
        <meta property="og:title" content="Mental Math Trainer | Education" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="Education" />
        <meta property="og:url" content="http://www.mental-math-trainer" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="mental-math-trainer.ico?v=1">

        <link rel="canonical" href="https://play.google.com/store/apps/details?id=com.troubi.kingofmath" />
        <link rel="canonical" href="https://play.google.com/store/apps/details?id=com.troubi.mathtricks" />
        <link rel="canonical" href="https://www.troubi.com" />
        <link rel="canonical" href="https://www.michael-jakob.com" />
        <link rel="canonical" href="https://www.metahill.com" />



        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!-- The noUiSlider stylesheet -->
        <link href="css/jquery.nouislider.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div id="title">
          <img src="img/mental-math-trainer.png" alt="Mental Math Trainer App Icon" />
          <h1 id="text-title">Mental Math Trainer</h1>
      </div>
      <div id="settings-and-stats" class="container">
        <div id="settings" class="white-box">
            <p id="text-selectrange">Number range</p>
            <div id="math-range-slider"></div>

            <p id="text-operations">&nbsp;</p>
            <div id="div-operations">
                <ul class="nobullets">
                    <li><label><input type="checkbox" checked="checked" value="add"> + <span id="text-op-add">Addition</span></label></li>
                    <li><label><input type="checkbox" value="sub"> - <span id="text-op-sub">Subtraction</span></label></li>
                    <li><label><input type="checkbox" value="pow"> x&sup2; <span id="text-op-pow">Powers</span></label></li>
                </ul>
                <ul class="nobullets">
                    <li><label><input type="checkbox" value="mul"> &times; <span id="text-op-mul">Multiplication</span></label></li>                    
                    <li><label><input type="checkbox" value="div"> &divide; <span id="text-op-div">Division</span></label></li>
                    <li><label><input type="checkbox" value="sqrt"> &radic;x <span id="text-op-pow">Square roots</span></label></li>
                </ul>
            </div>
        </div>
        <div id="stats" class="white-box">
            <p id="time-box">
                <span id="time-left">60</span>
                <span id="time-left-text">seconds left</span>
                <span id="time-left-indicator"></span>
            </p>
            <p id="repeat-box">
                <img id="repeat" src="img/repeat.png" />
                <span id="repeat-text">again!</span>
            </p>
            <p class="bonus">
              <table id="bonus-list">
                <!-- <tr><td><span id="num-correct-calculations">0</span></td><td></td></tr>
 -->                
              </table>
            </p>
            <p><a class="btn btn-primary btn-lg sharefb" role="button">Share on Facebook</a></p>
        </div>
        <p id="start-quiz"><a class="btn btn-primary btn-lg" role="button">Go for it!</a></p>
      </div>
    </div>

    <div id="questionbox" class="jumbotron">
        <p id="question"></p>
        <div id="answerbox">
          <div class="input-group">
            <input id="question-answer" pattern="[0-9]{1, 4}" autofocus placeholder="your answer" type="tel" class="form-control">
            <span class="input-group-btn">
              <button id="submit-answer" class="btn btn-default" type="button">&#x21a9;</button>
            </span>
          </div>
        </div>
    </div>

    <div id="social-container" class="container">
      <div id="viewport"></div>
      <footer>
        <p>&copy; <a href="http://troubi.com">Troubi Entertainment</a> 2014</p>
      </footer>
    </div> <!-- /container -->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/setup.js"></script>
    <script src="js/setdefaults.js"></script>
    <script src="js/localization.js"></script>

    <script src="js/utility.js"></script>
    <script src="js/questionfactory.js"></script>
    <script src="js/main.js"></script>

    <!-- The noUiSlider script -->
    <script src="js/jquery.nouislider.min.js"></script>
    <script src="js/jquery.color.js"></script>


    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-52396561-1');ga('send','pageview');
    </script>

  </body>
</html>
