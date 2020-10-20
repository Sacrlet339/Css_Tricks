<html>
    <head></head>
    <style>
    main {
	font-family: Helvetica, sans-serif;
	color: black;
	padding: 2em;
	width: 75%;
	min-height: 100vh;
	margin: 0 auto 0 auto;
     background-color: red;
    }
    .overlay span{
	position: relative;
	opacity: 0;
	top: 1em;
	animation: animateOverlay 1s ease-in-out forwards;
        }
        .overlay span:nth-child(4n) { animation-delay: 0s; }
        .overlay span:nth-child(4n+1) { animation-delay: 1s; }
        .overlay span:nth-child(4n+3) { animation-delay: 2s; }
        .overlay span:nth-child(4n+2) { animation-delay: 3s; }    
        @keyframes animateOverlay {
          to {
        opacity: 1;
        top: 0;
        } }
    </style>

    <body>
        <main>
            <h2 class="overlay">
              This is a story all about how...
            </h2>
          </main>
    </body>
        <script>
    window.addEventListener("load", function(){
	var nodes = document.querySelectorAll(".overlay");
	for(var i=0; i<nodes.length; i++){
        var words = nodes[i].innerText;
        var html = "";
        for(var i2=0; i2<words.length; i2++){
            if(words[i2] == " ")html += words[i2];
                else html += "<span>"+words[i2]+"</span>"
        }
        nodes[i].innerHTML = html;
	} 
});

    </script>
</html>