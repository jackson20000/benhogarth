<style type="text/css">
  html,
body {
  height: 100%;
}

.content-box {
 margin: auto;
 text-align: center;
}

@-webkit-keyframes scaleAnimation {
  0% {
    opacity: 0;
    -webkit-transform: scale(1.5);
            transform: scale(1.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes scaleAnimation {
  0% {
    opacity: 0;
    -webkit-transform: scale(1.5);
            transform: scale(1.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes drawCircle {
  0% {
    stroke-dashoffset: 300px;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes drawCircle {
  0% {
    stroke-dashoffset: 300px;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes drawCheck {
  0% {
    stroke-dashoffset: 35px;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes drawCheck {
  0% {
    stroke-dashoffset: 35px;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes drawLine {
  from {
    stroke-dashoffset: 100;
  }
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes drawLine {
  from {
    stroke-dashoffset: 100;
  }
  to {
    stroke-dashoffset: 0;
  }
}
#successAnimationCircle,
#failureAnimationCircle {
  stroke-dasharray: 300px 300px;
  stroke: #62ff45;
}

#successAnimationCheck,
#failureAnimationCheck {
  stroke-dasharray: 35px 35px;
  stroke: #62ff45;
}

#successAnimation.animated,
#failureAnimation.animated {
  -webkit-animation: 1s ease-out 0s 1 both scaleAnimation;
          animation: 1s ease-out 0s 1 both scaleAnimation;
}
#successAnimation.animated #successAnimationCircle,
#successAnimation.animated #failureAnimationCircle,
#failureAnimation.animated #successAnimationCircle,
#failureAnimation.animated #failureAnimationCircle {
  -webkit-animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCircle;
          animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCircle;
}
#successAnimation.animated #successAnimationCheck,
#failureAnimation.animated #successAnimationCheck {
  -webkit-animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCheck;
          animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCheck;
}
#successAnimation.animated .failureAnimationCheckLine,
#failureAnimation.animated .failureAnimationCheckLine {
  stroke-dasharray: 100;
  stroke-dashoffset: 100;
  -webkit-animation: drawLine 1s cubic-bezier(1, 0.2, 0.1, 1) forwards;
          animation: drawLine 1s cubic-bezier(1, 0.2, 0.1, 1) forwards;
}

#animate {
  background: rgba(255, 255, 255, 0.2);
  cursor: pointer;
  border: 0;
  border-radius: 3px;
  bottom: 100px;
  color: #62ff45;
  left: 50%;
  outline: 0;
  padding: 10px 30px;
  position: absolute;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
#animate:active {
  background: rgba(255, 255, 255, 0.1);
}
.borderless td, .borderless th,.borderless tr {
    border: none;
}
.box .report{
  width: 50%;
  margin: auto;
  border: 1px solid darkgray;
  padding: 15px;
  border-radius: 15px;
}
svg{
  height: 150px;
}
@media only screen and (max-width: 600px) {
  .box .report{
    width: 80%;
  }
}
</style>
<div class="container">
  <div class="box">
    <div class="success content-box">
      <svg id="successAnimation" class="animated " xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 70 70">
      <circle id="successAnimationCircle" cx="35" cy="35" r="20" stroke="#62ff45" stroke-width="2" stroke-linecap="round" fill="transparent"/>
      <polyline id="successAnimationCheck" stroke="#62ff45" stroke-width="2" points="23 34 34 43 47 27" fill="transparent"/>
    </svg>
    <h2 style="margin: 10px 0 5px 0">Your Booking is successful!!</h2>
    <p style="margin-bottom: 20px">Your booking Details are send to your e-mail.</p>
    </div>
    <div class="report">
        <h4>Booking Details</h4>
        <div class="">
          <table class="table borderless table-responsive ">
            <tr>
              <td>Studio :</td>
              <td align="right"><?php echo $studio; ?></td>
            </tr>
            <tr><th colspan="2">Date & time</th></tr>
            <tr>
              <td>Booking Date : </td>
              <td align="right"><?php echo $date; ?></td>
            </tr>
            <tr>
              <td>Booking Time : </td>
              <td align="right"><?php echo $stime; ?> - <?php echo $etime; ?></td>
            </tr>
            <tr>
              <td>Amount : </td>
              <td align="right"><?php echo $amount; ?>$</td>
            </tr>
          </table>
        </div>
    </div>
  </div>
</div>