
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SKOBET - Bitcoin Casino</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/pure/0.5.0/pure-min.css'>
  <meta http-equiv="refresh" content="30">

   <style>

     @import url(https://fonts.googleapis.com/css?family=Roboto);
body {
  background-color: #333;
  color: #fff;
  font-family: 'Roboto', Arial;
  padding: 10em;
}

.flex-grid-center {
  display: flex;
  justify-content: center;
  margin: 5em 0;
}

.fuller-button {
  color: white;
  background: none;
  border-radius: 0;
  padding: 1.2em 5em;
  letter-spacing: 0.35em;
  font-size: 0.7em;
  transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
  margin: 1em;
}
.fuller-button.blue {
  box-shadow: inset 0 0 1em rgba(0, 170, 170, 0.5), 0 0 1em rgba(0, 170, 170, 0.5);
  border: #0dd solid 2px;
}
.fuller-button.blue:hover {
  background-color: #0dd;
  box-shadow: inset 0 0 0 rgba(0, 170, 170, 0.5), 0 0 1.5em rgba(0, 170, 170, 0.7);
}
.fuller-button.red {
  box-shadow: inset 0 0 1em rgba(251, 81, 81, 0.4), 0 0 1em rgba(251, 81, 81, 0.4);
  border: #fb5454 solid 2px;
}
.fuller-button.red:hover {
  background-color: #fb5454;
  box-shadow: inset 0 0 0 rgba(251, 81, 81, 0.4), 0 0 1.5em rgba(251, 81, 81, 0.6);
}
.fuller-button.white {
  box-shadow: inset 0 0 0.8em rgba(255, 255, 255, 0.3), 0 0 0.8em rgba(255, 255, 255, 0.3);
  border: #fff solid 2px;
}
.fuller-button.white:hover {
  color: rgba(0, 0, 0, 0.8);
  background-color: #fff;
  box-shadow: inset 0 0 0 rgba(255, 255, 255, 0.3), 0 0 1.2em rgba(255, 255, 255, 0.5);
}

.pure-control-group {
  display: flex;
  flex-direction: column;
  position: relative;
  padding: 0 1em 2.6em 1em;
}

.pure-form .pure-control-group label {
  text-align: left;
  position: absolute;
  left: 0;
  top: 15%;
  z-index: 0;
  letter-spacing: 0;
  margin: 0 1em;
}

.pure-form .pure-control-group input {
  background: none;
  box-shadow: none;
  padding-left: 0;
  border-radius: 0;
  border: none;
  border-bottom: 2px solid rgba(255, 255, 255, 0.4);
  position: relative;
  z-index: 1;
  color: #fff;
}

.pure-form .pure-control-group input:focus {
  border-bottom: 2px solid white;
}

.pure-form .pure-control-group textarea {
  background: none;
  box-shadow: none;
  border-radius: 0;
  border: none;
  border-left: 2px solid rgba(255, 255, 255, 0.4);
  resize: none;
  height: 8em;
  color: #fff;
}

.pure-form .pure-control-group textarea:focus {
  border-left: 2px solid white;
}

.pure-form .pure-control-group input[type=email]:focus:invalid {
  color: #fff;
}

.pure-form .pure-control-group input[type=email]:invalid {
  color: #fb5454;
}

.pure-form button {
  margin: 0.5em 1em;
}
  </style>

  
</head>

<body>

<div class="flex-grid-center">
  <a href="/pvc.html"><div class="pure-button fuller-button blue">Player Vs Casino</div></a>
  <a href="/pvp.php"><div class="pure-button fuller-button red">Player Vs Player</div></a>
  <div class="pure-button fuller-button white">Telegram</div>
</div>

</body>
</html>
