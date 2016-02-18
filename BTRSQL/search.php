<html>
<head>
	<title>BSQL</title>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="http://d2c5utp5fpfikz.cloudfront.net/3_1_1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//d2c5utp5fpfikz.cloudfront.net/3_1_1/css/bootstrap.css.map" rel="stylesheet">
	<link href="//d2c5utp5fpfikz.cloudfront.net/3_1_1/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="cinesmain_styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="container-fluid">
	<section id="main">
		<div class="search">
			<h1 class="logo">BTR SQLs</h1>
			<h3 class="tagline">A Simpler Movie Database.</h3>
			<form id="db-search" class="form-wrapper cf" action="/content/search" method="POST">
		                <input type="text" placeholder="Whatchu want, boi?" value=""
		                       id="search-material" name="q"
		                       autocomplete="off"
		                       class="searchbar col-xm-12" required/>
		                <button type="submit" id="btn_action" class="btn btn-default red btn-action">
                        SEARCH
                    	</button>
		    </form>
		    <p class="credit">A Site By Ian Mukherjee and Nathan Smith</p>
		</div>
	</section>
	</div>
</body>
</html>