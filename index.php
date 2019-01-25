<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
body {
  font-family: 'Open sans', sans-serif;
  font-size:100%;
  line-height:1.5;
}
* {
  box-sizing: border-box;
}
.example-item {
  padding:1em;
  border-radius:5px;
  max-width:15em;
}
.l-grid-half {
  width: 50%;
}

.l-flex-parent {
  //by having a parent with flex-direction:row, the min-height bug in IE doesn't stick around.
  display:flex;
  flex-direction:row;
  
}
.l-flex-child {
  padding:1em;
  min-height: 100vh;
  align-items: center;
  display:flex; //if you have items within the child you'll need to make it display flex
  justify-content: center;
  flex-direction: column;
  
}
.t-purple {
  background-color: #7b5a9e;
  color:#fff;
}
.t-white {
  background-color: #fff;
  color:  #7b5a9e;
}
.t-white .example-item {
  background:  #7b5a9e;
  color: #fff;
}

.t-purple .example-item {
  
  background:#fff;
  color:#000;

}
</style>



<div class="l-flex-fix">
<div class="l-flex-parent">
  <div class="t-purple l-flex-child l-grid-half">
     <div class="example-item">
       This is my fix for the flexbox min-height bug in IE11/10 mentioned by Philip Walton in <a href="#https://github.com/philipwalton/flexbugs#3-min-height-on-a-column-flex-container-wont-apply-to-its-flex-items">Flexbugs</a>, bug number #3 
    </div>
  </div>
  <div class="t-white l-flex-child l-grid-half">
    <div class="example-item">
      You need to wrap any flex-direction:column inside a flex-direction:row (or just display:flex for simple)
    </div>
  </div>
</div>
</div>

