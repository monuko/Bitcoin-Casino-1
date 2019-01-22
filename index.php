 <!DOCTYPE html>
  <html>
    <head>
<title>SKOBET - Bitcoin Blockchain Betting</title>
<meta name="Description" content="Bitcoin Blockchain Betting, Earn Upto 20 Times Your Bet.  SKOBET is Decenterlized, Fast, Fair, Provides Each Bet Verification Directly on Bitcoin Blockchain. ">
<meta name="Keywords" content="SKOBET,skobet bitcoin,skobet btc,skobet play,skobet fair">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="refresh" content="300">

	    
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">
	    
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	    
<link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "56e2278b-0156-4823-8c51-53b991849d78",
      autoRegister: true,
      notifyButton: {
        enable: true,
      },
    });
  });
</script>
</head>
<body>
<div class="container">
    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <a href="" onClick="window.location.href=window.location.href" class="brand-logo"><i class="material-icons">dehaze</i> SKOBET</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a target="_blank" href="https://pastebin.com/raw/fTs1tUdz">Fairness</a></li> 
                    <li><a target="_blank" href="https://www.blockchain.com/btc/xpub/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7">Block Explorer</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 l6">

            <ul class="collapsible popout">
                <li class="active">
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Deposit Bitcoin Below !</div>
                    <div class="collapsible-body">

                        <div id="deposit" class="card horizontal">
                            <div class="card-image">
                                <img id="addrimg" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=L|1&chl=bitcoin:1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx" />
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <input id="addrvalue" type="text" class="form-control" value="1RFyvLeDJhrmGh1nRmr34kzKR9Z3uFLBx">
                                    <p class="range-field">
                                       <input type="range" id="myRange" min="1" max="20" /> </p>
                                       Multiplier : <span id="demo">7</span> - Winchance : <span id="demo2">14</span>

                                </div>
                            </div>
                        </div>
<div class="progress"><div class="indeterminate"></div></div>
                    </div>
                </li>


                <li>
                <div class="collapsible-header"><i class="material-icons">code</i>BET ROLL VERIFY</div>
                <div class="collapsible-body">
			
            <div class="input-field">
            <textarea id="textarea2" class="materialize-textarea" data-length="64"></textarea>
            <label for="textarea2">[BETVERIFY] BTC Transaction Hash</label>
            </div>

			<textarea id="ro1" type="text" placeholder="Press Enter" class="materialize-textarea"></textarea>
			<label for="ro1">Player</label>
			
			<textarea id="ro2" type="text" placeholder="Press Enter" class="materialize-textarea"></textarea>
			<label for="ro2">Transaction Hash</label>
			
			<textarea id="ro3" type="text" placeholder="Press Enter" class="materialize-textarea"></textarea>
			<label for="ro3">Block Number</label>
			
			<textarea id="ro4" type="text" placeholder="Press Enter" class="materialize-textarea"></textarea>
			<label for="ro4">Block Hash</label>
			
			<textarea id="ro5" type="text" placeholder="Press Enter" class="materialize-textarea"></textarea>
			<label for="ro5">BETHASH</label>
			
			<textarea id="ro6" type="text" placeholder="Press Enter" class="materialize-textarea"></textarea>
			<label for="ro6">BET ROLL</label>

	    </div>
             </li>
               
            </ul>




            <ul class="collapsible popout">
                <li class="active">
                 <div class="collapsible-header"><i class="material-icons">grain</i>Graph</div>
                <div class="collapsible-body">    
                <div id="myplot"></div>
		</div> 
                </li>

                <li>
                    <div class="collapsible-header"><i class="material-icons">blur_on</i>FAQ Payouts </div>
                    <div class="collapsible-body"><span>When Your Transaction has 5+ Confirmation on blockchain, Payout is Automatically sent to you. 
	    Its Sent To Same Address From Which You Send, if multiple inputs are used then winnings are sent to the 1st Input.
	     </span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">attach_money</i>FAQ House Edge/Fees</div>
                    <div class="collapsible-body"><span>House Edge : 1% </span></div>
                </li>
            </ul>





        </div>

        <div class="col s12 l6">
            <div class="responsive-table">
                <table class="responsive-table highlight" id="myTable"></table>
            </div>
		
        </div>
    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>  
//ui script		
$(document).ready(function(){
$('.collapsible').collapsible();	

	
//bet roll verify
$("#textarea2").change(function(){
$.getJSON('a.php?t=' + $('textarea#textarea2').val()).done(function(dataxxxx) {
console.log('fetchiiiiiiiiing');
	
	$('#ro1').val(dataxxxx.sender); 	
	$('#ro2').val(dataxxxx.trxn); 	
	$('#ro3').val(dataxxxx.blocknum);
	$('#ro4').val(dataxxxx.blockhash); 	
	$('#ro5').val(dataxxxx.bethash); 	
	$('#ro6').val(dataxxxx.roll); 	
});
});

		
});
		
		
//core starts		
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output2 = document.getElementById("demo2");
output.innerHTML = slider.value;
slider.oninput = function() {
  output.innerHTML = this.value +"X";
  output2.innerHTML = parseFloat((99/this.value)).toFixed(3) +"%";
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
 ws.send('{"op":"blocks_sub"}');
};

ws.onmessage = function(evt) {
 var received_msg = evt.data;
 beep(10, 1000, 500);
 window.location.reload(true);
};

ws.onclose = function() {
 window.location.reload(true);
};


// init & fetch JSON
$.getJSON('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcFxdbMFrMK8hxKW5nKBq9rwY816XLd3zpFneQydN7An8JtEKyFe7Xc87p87N7LochEat7nvodkJAUS4GPBzGv5mvmjZEgsm7?dir=dasc&limit=15').done(function(datax) {
tempx = datax.address.transactions;
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
  if(0 > addr.indexOf(fetch5.sender)){
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell0 = row.insertCell(0);
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);
  var tempk = (99/fetch5.winroll) + "X";
	
  cell0.innerHTML = `<img width=100px height=100px src="https://flathash.com/${fetch5.sender}" />`;
  cell1.innerHTML = `${fetch5.sender} <br>
  Roll : ${fetch5.roll} <  Chance : ${fetch5.winroll.toFixed(2)}<br>
  Bet : ${fetch5.amount} BTC | Won : ${fetch5.winamount} BTC<br>
  Multiplier : ${tempk} | Block : ${fetch5.blocknum}
  `;	

  if (fetch5.confirmation < 3) {
  cell2.innerHTML = `<a class="waves-effect waves-light btn-small pulse red" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >${fetch5.confirmation} Confirmations</a>`;  
  }else{
  if (fetch5.result > 0) {
     cell2.innerHTML = `<a class="waves-effect waves-light btn-small blue" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >Input</a>
    <a class="waves-effect waves-light btn-small pulse" target="_blank" href="https://tradeblock.com/bitcoin/address/${fetch5.sender}" >Output</a>`;	  
  } else {
     cell2.innerHTML = `<a class="waves-effect waves-light btn-small blue" target="_blank" href="https://tradeblock.com/bitcoin/tx/${fetch5.trxn}" >Input</a>`;  
  }
  }

  // plot
  xplot(fetch5.roll,fetch5.winroll);

}
}
  </script>
    </body>
  </html>
