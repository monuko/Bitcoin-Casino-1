<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Skobet </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>

<style>
/*** Mixins & Default Styles ***/
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  overflow-x: hidden;
  overflow-y: scroll;
}

/*** Color Variables ***/
/*** Centering Hack ***/
/*** Header Styles ***/
header {
  width: 100vw;
  height: 100vh;
  background: #5661f2;
  display: flex;
}

/*** Navigation Styles ***/
nav {
  width: 100vw;
  height: 160px;
  background: #46b2f0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  position: fixed;
  z-index: 10;
  transition: all 0.3s;
}
nav.navShadow {
  box-shadow: 0 4px 30px -5px rgba(0, 0, 0, 0.2);
  height: 100px;
}
nav.navShadow #word-mark {
  opacity: 0;
}

#brand,
#menu,
ul {
  display: flex;
  align-items: center;
}

#brand {
  padding-left: 40px;
}

#logo {
  width: 55px;
  height: 55px;
  background: #fff;
  border-radius: 50%;
  cursor: pointer;
}

#word-mark {
  width: 120px;
  height: 20px;
  background: #fff;
  border-radius: 90px;
  margin-left: 20px;
  opacity: 1;
  transition: all 0.3s;
}

/*** Menu Styles ***/
#menu {
  justify-content: flex-end;
  padding-right: 40px;
}

li {
  margin-left: 20px;
}
li a {
  width: 80px;
  height: 20px;
  background: #fff;
  display: block;
  border-radius: 90px;
}

#menu-toggle {
  width: 55px;
  height: 55px;
  background: #2ea8ee;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  cursor: pointer;
  display: none;
}
#menu-toggle:hover .bar {
  width: 25px;
}
#menu-toggle.closeMenu .bar {
  width: 25px;
}
#menu-toggle.closeMenu .bar:first-child {
  -webkit-transform: translateY(7px) rotate(45deg);
          transform: translateY(7px) rotate(45deg);
}
#menu-toggle.closeMenu .bar:nth-child(2) {
  -webkit-transform: scale(0);
          transform: scale(0);
}
#menu-toggle.closeMenu .bar:last-child {
  -webkit-transform: translateY(-7px) rotate(-45deg);
          transform: translateY(-7px) rotate(-45deg);
}

.bar {
  width: 25px;
  height: 2px;
  background: #fff;
  transition: 0.3s ease-in-out;
}
.bar:nth-child(2) {
  width: 20px;
  margin: 5px 0;
}
.bar:last-child {
  width: 15px;
}

/*** Hero Section Styles ***/
#hero-section {
  width: 100vw;
  height: calc(100vh - 160px);
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 160px;
}


/*** Section Styles ***/
section {
  width: 100vw;
  height: calc(100vh - 100px);
  display: flex;
  justify-content: center;
}
section:nth-child(odd) {
  background: #fa6c98;
}
section:nth-child(even) {
  background: #79edfc;
}

#heading {
  width: 580px;
  height: 580px;
  background: #fff;
  border-radius: 90px;
  margin-top: 40px;
}


/*** Responsive Menu For Smaller Device ***/
@media screen and (max-width: 767px) {
  #menu-toggle {
    display: flex;
  }

  ul {
    display: inline-block;
    width: 100vw;
    height: 0;
    background: #79edfc;
    position: absolute;
    top: 160px;
    -webkit-transform: translate(, );
            transform: translate(, );
    box-shadow: 0 5px 30px -4px rgba(0, 0, 0, 0.2);
    transition: all 0.3s;
  }
  ul.showMenu {
    height: 250px;
  }
  ul.showMenu li {
    height: 80px;
    opacity: 1;
    visibility: visible;
  }

  li {
    width: 50%;
    height: 80px;
    float: left;
    padding-left: 40px;
    opacity: 0;
    visibility: hidden;
    margin-left: 0;
    transition: all 0.3s 0.1s;
  }
  li:first-child, li:nth-child(2) {
    margin-top: 80px;
  }

  #head-line {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
  }
}


</style>
  
</head>

<body>

  
<header>
  <nav>
    <div id="brand">
      <div id="logo"></div>
      <div id="word-mark"></div>
    </div>
    <div id="menu">
      <div id="menu-toggle">
        <div id="menu-icon">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
      <ul>
        <li><a href="#section00"></a></li>
        <li><a href="#section01"></a></li>
        <li><a href="#section02"></a></li>
        <li><a href="#section03"></a></li>
      </ul>
    </div>
  </nav>
  
  
  <div id="hero-section">

<center>
<img id="addrimg" alt="Deposit Bitcoin only" src="https://chart.googleapis.com/chart?chs=280x280&cht=qr&chld=L|1&chl=bitcoin:1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H" />
<br>
<span id="addrvalue">1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H</span>
<br>
<p class="range-field"><input type="range" id="myRange" min="2" max="40" /></p>
<br>
<span id="maxbet">Maxbet 0.2 BTC</span>
<span id="demo3"></span>
<span tyle="background: #fff;border-radius: 90px;"   id="demo2"></span>
<br>	
<span id="demo">Move The Slider.........</span>
</center>

  </div>
  

</header>



<section id="section00">
<div id="heading">
<img src="https://flathash.com/jhghvhggvhgvhgv" />
<br> ADDDRESS
<br> MULT
</div>
</section>

<?
$a=array();
$obj = json_decode(file_get_contents("https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?dir=dasc&limit=11"), true);
$tempa = $obj['address']['total']['balance'];

for ($x = 0; $x <= 11; $x++) {
array_push($a,$obj['address']['transactions'][$x]['txid']);
}


foreach($a as $aa) {

echo "
<section>
<img id='heading' src='https://flathash.com/$aa' />
</section>
";

}

?>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script>
	
	$( () => {
	
	//On Scroll Functionality
	$(window).scroll( () => {
		var windowTop = $(window).scrollTop();
		windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
		windowTop > 100 ? $('ul').css('top','100px') : $('ul').css('top','160px');
	});
	
	//Click Logo To Scroll To Top
	$('#logo').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		},500);
	});
	
	//Smooth Scrolling Using Navigation Menu
	$('a[href*="#"]').on('click', function(e){
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		},500);
		e.preventDefault();
	});
	
	//Toggle Menu
	$('#menu-toggle').on('click', () => {
		$('#menu-toggle').toggleClass('closeMenu');
		$('ul').toggleClass('showMenu');
		
		$('li').on('click', () => {
			$('ul').removeClass('showMenu');
			$('#menu-toggle').removeClass('closeMenu');
		});
	});
	
});

	
//core starts		
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output2 = document.getElementById("demo2");
var output3 = document.getElementById("maxbet");
var output4 = document.getElementById("demo3");
output.innerHTML = slider.value;
slider.oninput = function() {
  output3.innerHTML = "Maxbet " + parseFloat(<? echo $tempa; ?>/this.value).toFixed(6) +" BTC";	
  output.innerHTML = this.value +"X";
  output2.innerHTML = parseFloat((99/this.value)).toFixed(3) +"%";
  output4.innerHTML =  "Example : If You Bet 0.1 BTC, You Have " + parseFloat((99/this.value)).toFixed(3) +"% Chance Of Winning " + (this.value*0.1).toFixed(3) + " BTC";
  document.getElementById("addrvalue").innerHTML = addr[this.value];
  $("#addrimg").attr("src","https://chart.googleapis.com/chart?chs=280x280&cht=qr&chld=L|1&chl=bitcoin:" + addr[this.value]);
}

//address
var addr = [
    "00",
    "00",
    "12JyurJDarDCbtxdcMjfE59BQUyAP7Db5h",
    "14kX8t11jWXGVgQU5Uy97pnwvT4E54znmp",
    "1562ws57S8BxnWyAgTSuR3Y4SNDkoR5p9B",
    "15FG48J3vJR8nV9CmAwx3ScZP25sTBQhb9",
    "15m2yG8s4zmymjfH3D4gnkvDwCNN94oQhh",
    "15tzbEb4qkZZ8reUUEdvvPRfEBNLCBJJQ7",
    "161RkFzd6fQbkov7GSjg7Xx7FhDexyZW5a",
    "168vnBonda2sUb8nRYm83NZcSmtsjxc5aN",
    "17RbxMuun5cEnbK5emECYQeqPNDvoNtbd",
    "17Tx6ozt3jumtfMSEm37MWiFzacc8wjxwW",
    "18td87U1ZzYtGcJL2CJNuNWwKb1TDxRd9d",
    "19TUrWn8JXU4eQBgtnxZC5EPDyEW7n9b8g",
    "1AyfJaXioXg5Mj1NeGBV6gywr9mfJE9drJ",
    "1BM6bNvRxSZxUBpa73sx8SR5Wnpj4EdaJn",
    "1CMMpRY5WULMBi38FHKAvKX56tj2zg5WUP",
    "1DaFSBxwtNAceuVFtqKW4wX3GRUBopDsPm",
    "1FcRk9EZhCd5GzwhEauo6E62rqKGPT55Yb",
    "1FebKkwvenTUn6tr6QZ85sECiWnYjVUSoe",
    "1FrGra9hJxhLZBdSUxBRPa2kE2byPKFckz",
    "1GeepMWBrk2WqAsePmtUYLjz5mVmYe55op",
    "1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H",
    "1Hk1WHuhH3HK88vHLGFiy73ssYthPDKpJp",
    "1HxQc9AUiPovQYBJx4vi13g7WUcki7CVUW",
    "1JBcELusCqjB84FnLPwRET5W7YXWt6ACsF",
    "1JT34AYyqQ5MT7GBT5MceyAvhkkqbE8QLY",
    "1JrYAa8HhDzdN1tbiS75VvXk5bZUXbsPEW",
    "1KNsmtUSRHp9eoFypjjN8swG6Y43akobuG",
    "1Kr7UY5pzH1yjBim8pHgfapi1kfuRtQXsd",
    "1LGXCYKL4mwxdUiBKqFMvw1SR8VWePXS59",
    "1LHm5bfuabK8tvCH7ej7CN7BuYRBQFBiZ",
    "1LvnnoC4nCcc5N55i6SeTpd6wZSrkNS5V",
    "1MZCeDGiXvq9ewXnvQs7u664yYnai9KPi5",
    "1MdsKwmLE4UfdtJmwsdpTbLA61aFDxHo5N",
    "1MmjZsoZZjrmHwy5R4svVs1AYCmf6DvVkr",
    "1MyHEvezvUPAzkdUDRKt6T5Xgp8xgj6gLQ",
    "1Nb7KqtNyXSmcj2YdJqr2nMQPASpUqV6Xh",
    "1PFHPUEk5mkJcTUs375XvmNC6pmnd44tSq",
    "1Q5zHQiCz34gauntDMRh9Z9duXjrya3JJr",
    "1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx"
];
</script>


</body>
</html>
