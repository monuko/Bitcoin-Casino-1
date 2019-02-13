 <!DOCTYPE html>
  <html>
<head>
<title>SKOBET - Bitcoin Blockchain Betting</title>
<meta name="Description" content="Bitcoin Blockchain Betting, Earn Upto 20 Times Your Bet.  SKOBET is Decenterlized, Fast, Fair, Provides Each Bet Verification Directly on Bitcoin Blockchain. ">
<meta name="Keywords" content="Bitcoin Bet,SKOBET,skobet bitcoin,skobet btc,skobet play,skobet fair">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="refresh" content="183">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>


<div class="container"> <div class="row">
  <nav><div class="nav-wrapper">
      <a href="#" onClick="window.location.href=window.location.href"  class="brand-logo"><i class="material-icons">dehaze</i> SKOBET</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a target="_blank" href="https://www.blockchain.com/btc/xpub/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7">View On Blockchain</a></li>
      </ul></div></nav>    </div></div>

        <div class="container"> <div class="row">
<div class="col s12 l12">
<center>
<img style="max-width:640px;" width=100% height=auto src="https://i.ibb.co/wcnqcxz/skobet.png"/><br>
<img id="addrimg" alt="Deposit Bitcoin only" src="https://chart.googleapis.com/chart?chs=280x280&cht=qr&chld=L|1&chl=bitcoin:1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H" />
<br>
<span id="addrvalue">1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H</span>
</center>
</div>

<div class="col s12 l12">
<p class="range-field"><input type="range" id="myRange" min="2" max="40" /></p>
</div>



<div class="col s12 l4"><blockquote><center>
<span id="maxbet">Maxbet 0.2 BTC</span></blockquote></center>
</div>

<div class="col s12 l4"><blockquote><center>
Bet Multiplier : <span id="demo">20 X</span></blockquote></center>
</div>

<div class="col s12 l4"><blockquote><center>
Bet Winchance : <span id="demo2">4.950 %</span></blockquote></center>
</div>

<div class="col s12 l12"><blockquote><center>
<span id="demo3">Move The Slider.........</span></blockquote></center>
</div>

<div class="col s12 l12">
 <div class="progress">
      <div class="indeterminate"></div>
  </div>
        
</div>
          

<div class="col s12 l12">
<div id="myplot"></div>
 </div>

<div class="col s12 l12">
 <div class="progress">
      <div class="indeterminate"></div>
  </div>
        
</div>
          
          
<div class="col s12 l12">
<div class="responsive-table">
<table class="responsive-table" id="myTable"></table>
</div>
</div>



</div></div>
	


        <div class="container"> <div class="row">
 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l12 s12">
                <h5 class="white-text">100% Anonymous</h5>
                <p class="grey-text text-lighten-4">
		    Skobet Doesn't Store any Of Your Data. Privacy As Promised.  
			<a class="grey-text text-lighten-3" target="_blank" href="https://bit.ly/2UuQa9W">Fariness Verify</a>
		     </p>
              </div>
      
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 SKOBET
            </div>
          </div>
        </footer>          </div>          </div>
            

	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>  
//https stuff
if (location.protocol != 'https:') {
 location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
}		
		
//core starts		
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output2 = document.getElementById("demo2");
var output3 = document.getElementById("maxbet");
var output4 = document.getElementById("demo3");
output.innerHTML = slider.value;
slider.oninput = function() {
  output3.innerHTML = "Maxbet " + parseFloat(tempbalx/this.value).toFixed(6) +" BTC";	
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





// init & fetch JSON
$.getJSON('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?dir=dasc&limit=15').done(function(datax) {
tempx = datax.address.transactions;
tempbalx = datax.address.total.balance;	

tempx.forEach(function(elementp) {

$.ajax({
   url: elementp.txid + '.json',
   type: 'HEAD',
   error: function() {
    console.log("API " + elementp.txid);
    $.getJSON('a.php?t=' + elementp.txid).done(function(dataxx) {
     fetch5(dataxx);
    });
   },
   success: function() {
    console.log("CACHE " + elementp.txid);
    $.getJSON(elementp.txid + '.json').done(function(dataxx) {
     fetch5(dataxx);
    });
   }
  });


});
});


// plot function
var yar = [];
var yar2 = [];

function xplot(n,nn) {
 yar.push(n);
 yar2.push(nn);

 var roll = {
  y: yar,
  type: 'scatter',
  name: 'Bet Roll'
 };
 
  var roll2 = {
  y: yar2,
  type: 'scatter',
  name: 'Roll To Win'
 };

var data = [roll, roll2];
var layout = {title: 'Recent Bets Roll', showlegend: false};
Plotly.newPlot('myplot', data, layout, {showSendToCloud: true});
}



//fetch function
function fetch5(fetch5) {
  if(fetch5.depositadd.localeCompare('null')){
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell0 = row.insertCell(0);
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);
  var tempk = (99/fetch5.winroll) + "X";
	
  cell0.innerHTML = `<img width=80px height=80px src="https://flathash.com/${fetch5.sender}" />`;
  cell1.innerHTML = `${fetch5.sender} <br>
  Roll : ${fetch5.roll} <  Chance : ${fetch5.winroll.toFixed(2)}<br>
  Bet : ${fetch5.amount} BTC | Won : ${fetch5.winamount} BTC<br>
  Multiplier : ${tempk} | Block : ${fetch5.blocknum}
  `;	

  if (fetch5.confirmation < 2) {
  cell2.innerHTML = `<a class="waves-effect waves-light btn-small pulse red" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >${fetch5.confirmation} Confirmations</a>`;  
  }else{
  if (fetch5.result > 0) {
     cell2.innerHTML = `<a class="waves-effect waves-light btn-small blue" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >Input</a>
    <a class="waves-effect waves-light btn-small pulse" target="_blank" href="https://tradeblock.com/bitcoin/address/${fetch5.sender}" >Output</a>`;	  
     row.setAttribute('class', 'teal accent-1');

  } else {
     cell2.innerHTML = `<a class="waves-effect waves-light btn-small blue" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >Input</a>`;  
     row.setAttribute('class', 'red accent-1');
}
  }

  // plot
  xplot(fetch5.roll,fetch5.winroll);
}
}
  </script>
 </body>
 </html>
