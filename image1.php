<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="favicon.png" />
  <title>Hide and show a DIV demo</title>
  <meta name="description" content="Hide and show a DIV demo">
  <meta name="author" content="https://plus.google.com/116801469202683881648/" />
  <meta property="og:title" content="Hide and show a DIV demo" /> 
  <meta property="og:description" content="Demo website showcasing how to hide and show a DIV." />  
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@alexcican">
  <meta name="twitter:creator" content="@alexcican">
  <meta name="twitter:url" content="http://lab.sicanstudios.com/hide_show_div/">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>


  <style type="text/css">
    
    body {
  font-family: Georgia, sans;
  color: #333;
  line-height: 150%;
  font-size: 18px;
  margin-top: 5em;
}
h2 {
  font-weight: 400;
  color: #000;
}
a:link,
a:visited {
  color: #85eefe;
  text-decoration: none;
}
a:hover {
  color: #ffb03b;
  cursor: pointer;
}
a:active {
  color: #ffb03b;
  position: relative;
  top: 1px;
}
#container,
#container_2 {
  width: 980px;
  text-align: center;
  position: relative;
  margin: 210px auto 0;
}
#container_2 {
  margin-top: 20px
}
p.info {
  margin-bottom: 50px;
}
p.info span {
  color: #333;
}
.subscribe {
  display: block;
  width: 350px;
  margin: 0 auto;
}
.subscribe div {
  width: 320px;
  cursor: pointer;
  color: #fff;
  font-size: 25px;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  background-color: #971b00;
  margin: 0 auto;
  padding: 20px;
}
.subscribe:hover>form {
  display: block;
  margin-bottom: -6px;
}
form input[type=text],
form input[type=submit] {
  font-family: Georgia, sans;
  font-size: 22px;
  width: 200px;
  padding: 20px;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
}
input[type=text] {
  background: #eee;
  border: solid 2px #ddd;
}
form input[type=submit] {
  width: 100px;
  cursor: pointer;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-appearance: none;
  border: none;
  color: #fff;
  background: #5f7c1e;
}
.text_container {
  text-align: left;
  width: 500px;
  color: #000;
  background-color: #ddd;
  border: solid 1px #777;
  margin: 0 auto 10px;
  padding: 10px;
  cursor: pointer
}
.text_container div p {
  cursor: default !important;
  margin-bottom: 10px
}
.visible>div {
  display: block;
  font-size: 17px;
}
form,
.subscribe:hover>div,
.hidden>div {
  display: none
}
footer {
  font-size: 12px;
  font-weight: bold;
  font-family: Helvetica, Arial, sans-serif;
  line-height: 1.6em;
  margin-top: 10%;
  color: #999;
  text-shadow: 0 1px 0 #fff;
  text-align: center;
}
.twitter-share-button {
  vertical-align: -15%;
  margin-right: -25px !important;
}
.logo {
  border-bottom: none !important;
  filter: alpha(opacity=30);
  -moz-opacity: 0.3;
  -khtml-opacity: 0.3;
  opacity: 0.3;
  padding: 15px;
  display: inline-block;
  -moz-transition: all .4s;
  -webkit-transition: all .4s;
  -o-transition: all .4s;
  transition: all .4s;
}
.logo:hover {
  filter: alpha(opacity=100);
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
}
© 2019 GitHub, Inc.
  </style>
</head>

<body>
  <div id="container_2">
    <p class="info">In this example, I am hiding and showing all three divs using only JavaScript.<br/>Click with your mouse on one of the text containers below to see the effect:</p>

    <div class="text_container">
      <h2>This is a title, you know that, right?</h2>
      <div><!--div that we want to hide-->
        <p>Notice how, when you clicked on this div, the others didn't open even though they are named the same. This is some hidden text.</p>
      </div>
    </div><!--end div_text_container-->

    <div class="text_container">
      <h2>This is a second title...</h2>
      <div><!--div that we want to hide-->
        <p>Try to disable JavaScript and see what happens with the text containers.</p>
      </div>
    </div><!--end div_text_container-->

    <div class="text_container">
      <h2>This is a third title...</h2>
      <div><!--div that we want to hide-->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit, eros id adipiscing congue, lorem ante sagittis 
        elit, id malesuada nibh est sed orci</p>

        <p>Semper. Morbi ultrices fringilla nibh, vel sodales turpis sodales id. Curabitur id ultricies felis. Quisque varius 
        feugiat magna, id scelerisque justo sodales eu. In hac habitasse platea dictumst.</p>
      </div>
    </div><!--end div_text_container-->
  </div><!--end div_container-->

  <footer><a href="https://twitter.com/share" class="twitter-share-button" data-via="alexcican" data-related="alexcican">Tweet</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> &bull; Created by <a href="http://twitter.com/alexcican" target="_blank" title="Alex Cican on Twitter">Alex Cican</a> &bull; Source code on <a href="http://github.com/alexcican/lab/tree/gh-pages/hide_show_div" target="_blank" title="GitHub">GitHub</a><br/><a href="http://sicanstudios.com" title="SicanStudios" target="_blank" class="logo"><img src="http://sicanstudios.com/images/logo-dark.svg" alt="sicanstudios logo" /></a>
  </footer>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.text_container').addClass("hidden");
      $('.text_container').click(function() {
        var $this = $(this);
        if ($this.hasClass("hidden")) {
          $(this).removeClass("hidden").addClass("visible");
        } else {
          $(this).removeClass("visible").addClass("hidden");
        }
      });
    });
  </script>
</body>
</html>