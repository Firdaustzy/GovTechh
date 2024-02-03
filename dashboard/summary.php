<?php require 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <svg x="0px" y="0px" width="210px" height="210px" viewBox="0 0 200 200">
                    <g>
                        <defs>
                            <linearGradient id="counter-bg">
                                <stop offset="0%" style="stop-color: #C43D3B;"></stop>
                                <stop offset="100%" style="stop-color: #8D2524;"></stop>
                            </linearGradient>
                        </defs>
                        <polygon stroke="#000000" stroke-width="0.72" points="64.483,9.076 85.768,4.409 93.787,21.524 107.051,20.745
                            117.696,3.164 135.895,7.831 136.975,30.081 149.004,35.993 165.354,26.036 180.778,40.038 166.896,58.399 175.995,72.402
                            195.737,73.958 196.972,93.408 179.391,100.099 176.766,117.212 191.419,126.705 188.796,145.221 167.822,143.821 156.099,156.735
                            162.113,176.496 146.228,186.765 132.501,172.605 115.228,178.672 109.983,196.098 91.166,196.722 85.613,176.027 69.728,172.293
                            55.074,184.897 38.88,175.094 46.438,156.267 35.486,143.354 16.052,145.842 8.804,130.438 22.376,117.369 21.914,99.321
                            5.102,93.408 6.49,72.869 26.386,71.469 33.636,58.399 22.839,42.684 37.029,26.036 55.538,37.394 64.79,29.458"></polygon>
                    </g>
</svg>
                <div class="counter-content">
                    <span class="counter-value">231</span>
                    <h3>Web Designing</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter yellow">
                <svg x="0px" y="0px" width="210px" height="210px" viewBox="0 0 200 200">
                    <g>
                    <defs>
                            <linearGradient id="counter-bg2">
                                <stop offset="0%" style="stop-color: #F2991B;"></stop>
                                <stop offset="100%" style="stop-color: #E1881B;"></stop>
                            </linearGradient>
                        </defs>
                        <polygon stroke="#000000" stroke-width="0.72" points="64.483,9.076 85.768,4.409 93.787,21.524 107.051,20.745
                            117.696,3.164 135.895,7.831 136.975,30.081 149.004,35.993 165.354,26.036 180.778,40.038 166.896,58.399 175.995,72.402
                            195.737,73.958 196.972,93.408 179.391,100.099 176.766,117.212 191.419,126.705 188.796,145.221 167.822,143.821 156.099,156.735
                            162.113,176.496 146.228,186.765 132.501,172.605 115.228,178.672 109.983,196.098 91.166,196.722 85.613,176.027 69.728,172.293
                            55.074,184.897 38.88,175.094 46.438,156.267 35.486,143.354 16.052,145.842 8.804,130.438 22.376,117.369 21.914,99.321
                            5.102,93.408 6.49,72.869 26.386,71.469 33.636,58.399 22.839,42.684 37.029,26.036 55.538,37.394 64.79,29.458"></polygon>
                    </g>
                    </svg>
                <div class="counter-content">
                    <span class="counter-value">253</span>
                    <h3>Brand Building</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<script>
 
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });
</script>