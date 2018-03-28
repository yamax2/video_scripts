<?php
    $ar = [];

    if ($handle = opendir('.')) {
	while (false !== ($entry = readdir($handle))) {
	    if (preg_match('/\.mp4$/', $entry)) {
		array_push($ar, $entry);
    	    }
    }
    closedir($handle);
    sort($ar);
}
?>

<html>
    <head>
        <meta charset="utf-8">
	<title>01.2017</title>
        <link href="https://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">
	<script src="https://vjs.zencdn.net/6.2.8/video.js"></script>
	<style>
	    h4 {
		margin: 0.5rem 0;
	    }
	</style>
    </head>
    <body>
	<?php
	    foreach ($ar as $item) {
		?>
		<p>
		    <h4><?=$item; ?></h4>
		    <video class="video-js vjs-default-skin"controls preload="none" width="640" height="360" controls poster="imgs/<?= $item; ?>.png" data-setup='{"playbackRates": [1, 2, 3]}'>
			<source src="<?=$item; ?>" type='video/mp4'/>
		    </video>
		</p>
		<?php
	    }
	?>
    </body>
</html>
