<?php
//  the math:

        // rating(the total number of stars) eg 150
        // divided by the total number of votes cast
        // keep result to one decimal point
?>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Star rating using pure CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
/*
   background-image: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(0,0,146,1)), color-stop(99%, rgba(255,0,243,1)), color-stop(100%, rgba(255,0,243,1)));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
*/
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
/*
    background-image: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(0,0,146,1)), color-stop(99%, rgba(255,0,243,1)), color-stop(100%, rgba(255,0,243,1)));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
*/
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
/*
    background-image: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(0,0,146,1)), color-stop(99%, rgba(255,0,243,1)), color-stop(100%, rgba(255,0,243,1)));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
*/
    color: #c59b08;
}
    input:checked.text{
/*
        background-image: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(0,0,146,1)), color-stop(53%, rgba(255,0,243,1)), color-stop(100%, rgba(255,0,243,1)));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
*/
    }


/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    .checked {
  color: orange;
}
</style>
<body>
    
    <h1>To get the rating</h1>
  <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text" class="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text" class="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text" class="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text" class="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text" class="text">1 star</label>
  </div>
    <br><br>
    <h1>To display the rating</h1>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>

    <br><br><br><br>
    <p>the math is a php comment. </p>
</body>

</html>