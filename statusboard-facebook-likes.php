<?php
/*
 * statusboard-facebook-likes - Show the number of likes of a Facebook page on your Panic Status Board.
 * https://github.com/gimesi/statusboard-facebook-likes
 * author: Thomas Gimesi < Twitter: @gimesi >
 *
 * Public Domain. Use, modify and distribute it any way you like. No attribution required.
 * To the extent possible under law, Thomas Gimesi has waived all copyright and related or neighboring rights.
 * Please see http://creativecommons.org/publicdomain/zero/1.0/
 *
 * NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.
 * 
 * Contains modified html/css based on Panic Status Board's DIY example.
 + For further info see http://panic.com/statusboard
 */

$url = "http://graph.facebook.com/YOURPAGENAME"; // enter your fb-sitename here
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$results = curl_exec($ch);
curl_close($ch);
$json = json_decode($results, true);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
		<meta http-equiv="Cache-control" content="no-cache" />
		<style type="text/css">
			@font-face { font-family: "Roadgeek2005SeriesD";
						 src: url("http://panic.com/fonts/Roadgeek 2005 Series D/Roadgeek 2005 Series D.otf"); }		
			body, * { }
			body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, th, td { margin: 0;
			                                                                                                                         padding: 0; }
			fieldset, img { border: 0; }
			html, body, #main { overflow: hidden; }
			body { color: white;
			       font-family: 'Roadgeek2005SeriesC', sans-serif;
			       font-size: 24px;
			       line-height: 28px; }
			body, html, #main { background: transparent !important; }
			#container { width: 250px;
			             height: 250px;
			             text-align: center; }
			#container * { font-weight: normal; }
			h1 { font-size: 100px;
			     line-height: 120px;
			     margin-top: 15px;
			     margin-bottom: 28px;
			     color: white;
			     text-shadow: 0px -2px 0px black;
			     text-transform: uppercase; }
			h2 { width: 180px;
			     margin: 0px auto;
			     padding-top: 20px;
			     font-size: 20px;
			     line-height: 22px;
			     color: #7e7e7e;
			     text-transform: uppercase; }
			h2 span { font-size: 24px;
			          color: white; }
		</style>
	</head>	
	<body onload="init()">
		<div id="main">
			<div id="container">
				<h2>Fans on<br /><span>Facebook</span></h2>
				<h1><?php echo $json['likes']; ?></h1>
			</div>
		</div>
	</body>
</html>
