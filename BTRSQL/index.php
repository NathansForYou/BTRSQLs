<html>
<head>
	<title>BSQL</title>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="http://d2c5utp5fpfikz.cloudfront.net/3_1_1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//d2c5utp5fpfikz.cloudfront.net/3_1_1/css/bootstrap.css.map" rel="stylesheet">
	<link href="//d2c5utp5fpfikz.cloudfront.net/3_1_1/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="cinesmain_styles.css" rel="stylesheet" type="text/css"/>
	<script>
	$(function() {
	  $('button[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script> 
</head>
<body>
	<div class="container-fluid">
	<section id="main">
		<div class="search">
			<h1 class="logo">BTR SQLs</h1>
			<h3 class="tagline">A Simpler Movie Database.</h3>
			<form id="db-search" class="form-wrapper cf" action="#result" method="GET">
		                <input type="text" placeholder="Whatchu want, boi?" value=""
		                       id="query" name="q"
		                       autocomplete="off"
		                       class="searchbar col-xm-12" required/>
		                <button type="submit" href="#result" id="btn_action" onclick="toggle_visibility('result'); return false;" class="btn btn-default red btn-action">
                        SEARCH
                    	</button>
		    </form>
		</div>
	</section>
	<section id="result">
		<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 info">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h3 class="tagline">RESULT</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<p>What you want: echo $_POST["q"]; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
			<p class="credit">A Site By Ian Mukherjee and Nathan Smith</p>
		</div>
	<section>
	</div>
</body>
</html>