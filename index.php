
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="30">

  <title>Dual Sliding Landing page</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
 <style>
   html, body {
  width: 100%;
  height: 100%;
  overflow-x: hidden;
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

h1 {
  color: #fff;
  position: relative;
  position: absolute;
  left: 50%;
  top: 20%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  white-space: nowrap;
}
h1:after {
  content: "";
  position: absolute;
  width: 0;
  height: 4px;
  left: 0;
  bottom: -8px;
  background: #fff;
  transition: 500ms all ease-in-out;
}

a.cta {
  display: block;
  position: absolute;
  height: 50px;
  line-height: 50px;
  width: 120px;
  text-align: center;
  color: #fff;
  text-decoration: none;
  left: 50%;
  bottom: 20%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  border: 2px solid #fff;
  font-size: 0.75em;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
}
a.cta:before {
  content: "";
  background: #fff;
  height: 0;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
  transition: 300ms all ease-in-out;
}
a.cta:hover:before {
  height: 4px;
}

.container {
  background: #09f;
  width: 100%;
  height: 100%;
  position: relative;
}
.container .one-half {
  position: absolute;
  width: 50%;
  height: 100%;
  overflow: hidden;
}
.container .one-half.left {
  left: 0;
  background: url("http://andrewerrico.com/jura-panorama.jpg") center center no-repeat;
  background-size: cover;
}
.container .one-half.left:before {
  content: "";
  width: 100%;
  height: 100%;
  background: rgba(255, 0, 120, 0.5);
  position: absolute;
}
.container .one-half.right {
  right: 0;
  background: url("https://images.unsplash.com/photo-1517134191118-9d595e4c8c2b") center center no-repeat;
  background-size: cover;
}
.container .one-half.right:before {
  content: "";
  width: 100%;
  height: 100%;
  background: rgba(25, 120, 220, 0.5);
  position: absolute;
}
.container .one-half.left, .container .one-half.right {
  transition: 500ms all ease-in-out;
}
.container .one-half.left:before, .container .one-half.right:before {
  transition: 500ms all ease-in-out;
}
.container.left-is-hovered .left {
  width: 85%;
}
.container.left-is-hovered .left h1:after {
  width: 100%;
}
.container.left-is-hovered .right {
  width: 15%;
}
.container.left-is-hovered .right:before {
  background: rgba(0, 0, 0, 0.65);
  z-index: 2;
}
.container.right-is-hovered .right {
  width: 85%;
}
.container.right-is-hovered .right h1:after {
  width: 100%;
}
.container.right-is-hovered .left {
  width: 15%;
}
.container.right-is-hovered .left:before {
  background: rgba(0, 0, 0, 0.65);
  z-index: 2;
}
   </style>

  
</head>

<body>

  <div class="container">
  <div class="one-half left">
    <h1>Player Vs Casino</h1>
    <a href="pvc.html" class="cta">Let's Go</a>
  </div>
  <div class="one-half right">
    <h1>Player Vs Player</h1>
    <a href="pvp.php" class="cta">Let's Go</a>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>
  $l = $('.left')
$r = $('.right')

$l.mouseenter(function() {
  $('.container').addClass('left-is-hovered');
}).mouseleave(function() {
  $('.container').removeClass('left-is-hovered');
});

$r.mouseenter(function() {
  $('.container').addClass('right-is-hovered');
}).mouseleave(function() {
  $('.container').removeClass('right-is-hovered');
});
  </script>




</body>

</html>
