 <!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


   <div class="container"><div class="row"><nav>
    <div class="nav-wrapper">
      <a href="" onClick="window.location.href=window.location.href" class="brand-logo"><i class="material-icons">dehaze</i> SKOBET</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="https://pastebin.com/raw/QmeqNjNE">Fairness</a></li>
      </ul>
    </div>
  </nav></div> </div>
        	
			
	    

     <div class="container">
   <div class="row">
	   
  <ul class="collapsible popout">
    <li class="active">
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Deposit Bitcoin Below !</div>
      <div class="collapsible-body">
	    
<div class="card horizontal"><div class="card-image">
        <img id="addrimg" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=L|1&chl=bitcoin:1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx" />
      </div>
      <div class="card-stacked">
        <div class="card-content">
	    <input id="addrvalue" type="text" class="form-control" value="1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx">
            <p class="range-field"><input type="range" id="myRange" min="1" max="20" /> </p>    
        </div>
        <div class="card-action">
        Multiplier : <span id="demo">20</span>X - Winchance : <span id="demo2">4.95</span>%
        </div>
      </div>
    </div>
    </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">blur_on</i>FAQ Payouts </div>
      <div class="collapsible-body"><span>When Your Transaction has 5+ Confirmation on blockchain, Payout is Automatically sent to you. 
	    Its Sent To Same Address From Which You Send, if multiple inputs are used then winnigs are sent to the 1st Input.
	     </span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Details SKOBET Store ?</div>
      <div class="collapsible-body"><span>Nothing, No IP, No Logs, No Registeration, No Logins, We Do Not Store Anything. You are 100% anonymous on our SKOBET.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">attach_money</i>FAQ House Edge/Fees</div>
      <div class="collapsible-body"><span>House Edge : 2% + Bitcoin Transaction Payout Fees ( Depends On Network ) Usually 0.00000500 BTC </span></div>
    </li>
  </ul>
        
	   
	   
	 

	   
	   
	  <div class="col s12"><div id="myplot"></div></div>
	  <div class="col s12">
	  <div class="responsive-table"> <table class="responsive-table"  id="myTable" ></table></div>
	  </div>

    </div></div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>  
//ui script		
$(document).ready(function(){
    $('.collapsible').collapsible();
  });
		
		
//core starts		
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output2 = document.getElementById("demo2");
output.innerHTML = slider.value;
slider.oninput = function() {
  beep(10, 1000, 100);	
  output.innerHTML = this.value;
  output2.innerHTML = parseFloat((98/this.value)).toFixed(3);
  document.getElementById("addrvalue").value = addr[this.value];
  $("#addrimg").attr("src","https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=L|1&chl=bitcoin:" + addr[this.value]);
}

//address
var addr = [
    "12JyurJDarDCbtxdcMjfE59BQUyAP7Db5h",
    "12JyurJDarDCbtxdcMjfE59BQUyAP7Db5h",
    "1562ws57S8BxnWyAgTSuR3Y4SNDkoR5p9B",
    "15m2yG8s4zmymjfH3D4gnkvDwCNN94oQhh",
    "168vnBonda2sUb8nRYm83NZcSmtsjxc5aN",
    "17Tx6ozt3jumtfMSEm37MWiFzacc8wjxwW",
    "1AyfJaXioXg5Mj1NeGBV6gywr9mfJE9drJ",
    "1FcRk9EZhCd5GzwhEauo6E62rqKGPT55Yb",
    "1GeepMWBrk2WqAsePmtUYLjz5mVmYe55op",
    "1HD4t4thE9scBeR8CZnweQQoAFB9tCau7H",
    "1HxQc9AUiPovQYBJx4vi13g7WUcki7CVUW",
    "1JBcELusCqjB84FnLPwRET5W7YXWt6ACsF",
    "1JT34AYyqQ5MT7GBT5MceyAvhkkqbE8QLY",
    "1KNsmtUSRHp9eoFypjjN8swG6Y43akobuG",
    "1LGXCYKL4mwxdUiBKqFMvw1SR8VWePXS59",
    "1LHm5bfuabK8tvCH7ej7CN7BuYRBQFBiZ",
    "1LvnnoC4nCcc5N55i6SeTpd6wZSrkNS5V",
    "1MdsKwmLE4UfdtJmwsdpTbLA61aFDxHo5N",
    "1MmjZsoZZjrmHwy5R4svVs1AYCmf6DvVkr",
    "1MyHEvezvUPAzkdUDRKt6T5Xgp8xgj6gLQ",
    "1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx"
];

//https stuff
if (location.protocol != 'https:') {
 location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
}

// socket
var ws = new WebSocket("wss://ws.blockchain.info/inv");

ws.onopen = function() {
 ws.send('{"op":"blocks_sub"}')
};

ws.onmessage = function(evt) {
 var received_msg = evt.data;
 beep(10, 1000, 500);
 window.location.reload(true);
};

ws.onclose = function() {
 window.location.reload(true)
};


// init & fetch JSON
$.getJSON('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?dir=dasc&limit=999').done(function(datax) {
 var p = 0;
 setInterval(function() {
  tempx = datax.address.transactions[p].txid;
  conf = datax.address.transactions[0].confirmations;
  conf2 = datax.address.unconfirmed.balance;
  p = p + 1;

if (Math.floor((Math.random() * 4) + 1) == 1){
  if (conf < 1) {
   M.toast({html: conf2 +' BTC Pending Confirmations'})	  
  }
}


  $.ajax({
   url: tempx + '.json',
   type: 'HEAD',
   error: function() {
    console.log("API " + p + " " + tempx);
    $.getJSON('a.php?t=' + tempx).done(function(dataxx) {
     fetch5(dataxx);
    });
   },
   success: function() {
    console.log("CACHE " + p + " " + tempx);
    $.getJSON(tempx + '.json').done(function(dataxx) {
     fetch5(dataxx);
    });
   }
  });


 }, 4000);
});


// audio beep
a = new AudioContext()

function beep(vol, freq, duration) {
 v = a.createOscillator()
 u = a.createGain()
 v.connect(u)
 v.frequency.value = freq
 v.type = "square"
 u.connect(a.destination)
 u.gain.value = vol * 0.01
 v.start(a.currentTime)
 v.stop(a.currentTime + duration * 0.001)
}


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
  var table = document.getElementById("myTable");

  if(0 > addr.indexOf(fetch5.sender)){
  var row = table.insertRow(-1);
  }

  var cell0 = row.insertCell(0);
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);
  var tempk = (99/fetch5.winroll) + "X";
	
  cell0.innerHTML = `<img width=120px height=120px src="https://flathash.com/${fetch5.sender}" />`;
  cell1.innerHTML = `${fetch5.sender}<br>
  Roll : ${fetch5.roll} < ${fetch5.winroll}<br>
  Bet : ${fetch5.amount} | Won : ${fetch5.winamount} <br>
  Multiplier : ${tempk} | Block : ${fetch5.blocknum}
  `;	

  if (fetch5.result > 0) {
   row.setAttribute('class', 'table-success');
     cell2.innerHTML = `<a class="waves-effect waves-light btn-small" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >Input</a>
    <a class="waves-effect waves-light btn-small pulse" target="_blank" href="https://tradeblock.com/bitcoin/address/${fetch5.sender}" >Output</a>`;	  
  } else {
   row.setAttribute('class', 'table-danger');
     cell2.innerHTML = `<a class="waves-effect waves-light btn-small" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >Input</a>`;  
  }
  // plot
  xplot(fetch5.roll,fetch5.winroll);
}
  </script>
    </body>
  </html>
