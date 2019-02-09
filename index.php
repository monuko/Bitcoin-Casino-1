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
        <li><a target="_blank" href="https://bit.ly/2G1broA">View On Blockchain</a></li>
      </ul></div></nav>    </div></div>


        <div class="container"> <div class="row">
        <div class="col s12 l6">
            <blockquote><span id="maxbet">Deposit Bitcoin (BTC) Only, 1 Confirmation Required. Deposit From Your Wallet Only, Payouts Are Sent Back To Same Address.</span></blockquote>

		
		

 <div class="card">
        <div class="card-image">
          <img  id="addrimg" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=L|1&chl=bitcoin:1V7L2QKLuZ1m7PNFfHAcR2ddnwoZBqhTk">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>


            <div id="deposit" class="card horizontal">
                <div class="card-image">
                    <img  id="addrimg" alt="Deposit Bitcoin only" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=L|1&chl=bitcoin:1V7L2QKLuZ1m7PNFfHAcR2ddnwoZBqhTk" />
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <input id="addrvalue" type="text" class="form-control" value="1V7L2QKLuZ1m7PNFfHAcR2ddnwoZBqhTk">

                        <p class="range-field">
                            <input type="range" id="myRange" min="2" max="20" class="tooltipped" data-position="bottom" data-tooltip="Set Your Multiplier" /> </p>
                            Multiplier : <span id="demo">20X</span> - Winchance : <span id="demo2">4.950%</span>
                    </div>
                </div>
            </div>






		
		
        <div class="progress"> <div class="indeterminate"></div></div>
	<div id="myplot"></div>
        </div>

        <div class="col s12 l6">
            <blockquote>Recent Bets On Skobet :</blockquote>
            <div class="responsive-table">
                <table class="responsive-table highlight" id="myTable"></table>
            </div>
        </div>
	</div></div>
	
        <div class="container"> <div class="row">
 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Terms Of Service</h5>
                <p class="grey-text text-lighten-4">
		      You are 100% anonymous, Skobet Doesn't Store any Of Your Data. Privacy As Promised. House Edge: 1%
		     </p>
              </div>
              <div class="col l4 offset-l2 s12">
		<h5 class="white-text">Know More</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" target="_blank" href="https://bit.ly/2UuQa9W">Fariness Verify</a></li>
                  <li><a class="grey-text text-lighten-3" target="_blank" href="https://bit.ly/2G1broA">View Our Wallet</a></li>
                  <li><a class="grey-text text-lighten-3" target="_blank" href="https://bitcointalk.org/index.php?topic=5098423">BitcoinTalk</a></li>
                </ul>
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
output.innerHTML = slider.value;
slider.oninput = function() {
  output3.innerHTML = "Maxbet " + parseFloat(tempbalx/this.value).toFixed(6) +" BTC";	
  output.innerHTML = this.value +"X";
  output2.innerHTML = parseFloat((99/this.value)).toFixed(3) +"%";
  document.getElementById("addrvalue").value = addr[this.value];
  $("#addrimg").attr("src","https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=L|1&chl=bitcoin:" + addr[this.value]);
}

//address
var addr = [
    "00",
    "00",
    "1934No2n9Rx2Xxem49WnS8FEuPZtdon9WV",
    "19pey1UUWvvu17DLGXQomSVAnqoWGLPNrR",
    "1AbXWU92jbX7548RdLorw3Ya147X9nPqfz",
    "1CpJxcnS1X1AW2xVT3mwWsh6mCcPue7LcS",
    "1DtF21Na1AoQZdXPVCg5BLhuPhVU5xeEbg",
    "1EM49SKjeRNqXFmwhKbYqPaXenCroFRcHz",
    "1Ewa6qiK4MMZt4eiC9fMNRh3ytEKismMFn",
    "1FtJusHG8M4e8fu67EccQhDMFJUA8o16sW",
    "1GNvQZw8ig1cy2avWJv2FuMA8yKasuTy94",
    "1GiSya3dupzspyY1cT7KgUqiRBmK82ccGk",
    "1HjWuh7s6BeziKTTNusFwKSWouME57tBLv",
    "1JRMkpMfb7dwaNZof4hhHCQmKkHsbV7Fuy",
    "1JYt4AtzSqWh7uYL4QrsiTFjLVEBq9hNEo",
    "1MYHGU9f3Yn5TdsqRzH539FD7MVzw2GimU",
    "1NuYrKRA4XpEx44Mwz7v7mDV96VLTwWqZR",
    "1PKobUyAM54shkbHKAEAnK551BhqGxUKVu",
    "1PZPkGRkJSJmnxkvKyBswLLEZRVrEJpLpF",
    "1Q8cpiRb136xbXMQ9m8c4UtQHmrn59mKJH",
    "1V7L2QKLuZ1m7PNFfHAcR2ddnwoZBqhTk"
];





// init & fetch JSON
$.getJSON('https://api.smartbit.com.au/v1/blockchain/address/xpub661MyMwAqRbcEiNk4KqoCzFJEfqDKkoyYZ1sEkJu3G4EKJVNczpNmUq9AYrdV8RJ4Swcd3N3CtBAZwat1RrqaQycG5wkZaVRCWQC5m6UiTL?dir=dasc&limit=13').done(function(datax) {
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
