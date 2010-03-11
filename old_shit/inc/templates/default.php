<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  	<title><?php echo $TITLE; ?></title>
  	<link rel="stylesheet" href="/css/SyntaxHighlighter.css" type="text/css" >
  	<link rel="stylesheet" href="/style.css" type="text/css" >
  	<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.php">
  	<script type="text/javascript" language="javascript" src="/js/jquery-1.3.1.min.js"></script>
</head>
<body>
	<div id="frame">
		<div id="header">
			sanity check... [<span id="fail">fail</span>]
		</div>
		<div id="content">
			<?php //$VIEW->render(); ?>
		</div>
		<div id="footer">
			just a <a href="http://zacharydangercampbell.com">nerd</a> getting out of his head
			<br />
			&copy; 2008 sanitycheckfail.com | <?php echo number_format(memory_get_peak_usage() / 1024 , 2, '.', ''); ?>
			| <a href="/rss.php">rss</a>
		</div>
	</div>
	<script type="text/javascript" language="javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript" language="javascript">
		try {
			var pageTracker = _gat._getTracker("UA-3555341-7");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>
	<script type="text/javascript" language="javascript">
	(function() {
		var links = document.getElementsByTagName('a');
		var query = '?';
		for(var i = 0; i < links.length; i++) {
			if(links[i].href.indexOf('#disqus_thread') >= 0) {
				query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
			}
		}
		document.write('<script type="text/javascript" src="http://disqus.com/forums/sanitycheckfail/get_num_replies.js' + query + '"></' + 'script>');
	});
	</script>
	<script language="javascript" type="text/javascript" src="/js/shCore.js"></script>
	<script language="javascript" type="text/javascript" src="/js/shBrushPhp.js"></script>
	<script language="javascript" type="text/javascript" src="/js/shBrushXml.js"></script>
	<script language="javascript" type="text/javascript">
	$(document).ready(function() { dp.SyntaxHighlighter.ClipboardSwf = '/flash/clipboard.swf';
		dp.SyntaxHighlighter.HighlightAll('code');
	});
	</script>
</body>
</html>