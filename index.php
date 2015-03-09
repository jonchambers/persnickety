<!--
Persnickety Vintage website utilizing the parallax function from Stellar.js by Mark Dalgleish
http://markdalgleish.com/projects/stellar.js/
-->
<!doctype html>

<html>

<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Persnickety Vintage</title>
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/stellar.js"></script>
	<script>
        $(function(){
			$.stellar({
				horizontalScrolling: false

			});
		});
	</script>

    <script type="text/javascript">
        //if we are on a small screen, re-direct to mobile index
        if (screen.width <= 699) {
            document.location = "mobileindex.php";
        }

    </script>

</head>

<body style="zoom: 1;">

    <div id="wrapper">

        <div class="photo landing" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">
		
		    <div class="titletextcontainer" >
		        <h1>
		        Persnickety Vintage
		        </h1>
		    </div>

		</div>

        <div class="spacebar" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;"></div>

		<div class="photo2 about" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">
		
		    <div class="textcontainer" >
		        <h1>
		        <a href="https://www.etsy.com/shop/persnicketyvintage" target="_blank">Shop</a>
		        </h1>
		    </div>
		
		</div> 
		
		<div class="spacebar" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;"></div>

		<div class="photo3 store" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">
		
		    <div class="textcontainer" >
                <h1>
		        <a href="http://persnicketyvintage.com/blog/" target="_blank" >Blog</a>
		        </h1>
		    </div>

		</div>
	    
	    <div class="spacebar" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;"></div>

		<div class="photo4 blog" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">

            <div class="textcontainer" >
		        <h1>
			    <a href="about.php">About</a>
		        </h1>
		    </div>

        </div>

	</div>

</body>

</html>