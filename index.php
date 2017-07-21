<?php

$start = microtime(true);

require('conf.php');
require('info.php');

?>

<html>
<head>
	<title>status server</title>
	<link href="css/status.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div id="sidebar">

		<div class="title">services</div>
		<ul id="services">
<?php

foreach ($services as $name)
{

?>
			<li><?php echo $name; ?></li>
<?php

}

?>
		</ul>
<?php

if ($servers_list)
{

?>

		<div class="title">servers</div>
		<ul id="servers">
<?php

	foreach ($servers as $name)
	{

?>
			<li><?php echo $name; ?></li>
<?php

	}

?>
		</ul>
<?php

}

?>

	</div>

	<div id="main">

		<div class="title">uptime</div>
		<div id="uptime" class="box">
			<div>
				<span id="uptime-days" class="value"><?php echo $uptime_days; ?></span> hari, 
				<span id="uptime-hours" class="value"><?php echo $uptime_hours; ?></span> jam, 
				<span id="uptime-minutes" class="value"><?php echo $uptime_minutes; ?></span> menit dan
				<span id="uptime-seconds" class="value"><?php echo $uptime_seconds; ?></span> detik
			</div>
		</div>

		<div class="title">rata-rata pemakaian cpu</div>
		<div id="cpu" class="box">
			<ul>
				<li><span id="cpuload-1" class="value"><?php echo $cpu['1']; ?></span> (rata-rata lebih dari yang terakhir 1 menit)</li>
				<li><span id="cpuload-5" class="value"><?php echo $cpu['5']; ?></span> (rata-rata lebih dari yang terakhir 5 menit)</li>
				<li><span id="cpuload-15" class="value"><?php echo $cpu['15']; ?></span> (rata-rata lebih dari yang terakhir 15 menit)</li>
			</ul>
		</div>

		<div class="title">penggunaan memory</div>
		<div id="meminfo" class="box">
			<div>
				<span id="mem-usage" class="value"><?php echo ($mem['total'] - $mem['free']); ?></span> /
				<span id="mem-total"><?php echo $mem['total']; ?></span> <?php echo $mem_multiple; ?>
				(<span id="mem-cached" class="value"><?php echo $mem['cached']; ?></span> <?php echo $mem_multiple; ?> cached)
				<progress id="mem" value="<?php echo ($mem['total'] - $mem['free']); ?>" max="<?php echo $mem['total']; ?>"></progress>
			</div>
		</div>

		<div class="title">ruang penyimpanan</div>
		<div id="diskinfo" class="box">
			<div>
				<span id="disk-usage" class="value"><?php echo ($disk['total'] - $disk['free']); ?></span> /
				<span id="disk-total"><?php echo $disk['total']; ?></span> <?php echo $disk_multiple; ?>
				<progress id="disk" value="<?php echo ($disk['total'] - $disk['free']); ?>" max="<?php echo $disk['total']; ?>"></progress>
			</div>
		</div>

		<div class="title">software</div>
		<div id="software" class="box">
			<ul>
				<li>Nama Host Server: <span class="value"><?php echo gethostname(); ?></span></li>
				<li>IP Server: <span class="value"><?php echo $_SERVER['SERVER_ADDR']; ?></span></li>
				<li>Sistem Operasi: <span class="value"><?php echo $distro; ?></span></li>
				<li>Webserver: <span class="value"><?php echo $webserver; ?></span></li>
				<li>CPU: <span class="value"><?php echo $cpu_model; ?></span></li>
			</ul>
		</div>

		<div id="footer">
			halaman dimuat <?php echo (microtime(true) - $start); ?> detik || <a href="http://github.com/py7hon">Created by Iqbal Rifai</a>
		</div>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/status.js" type="text/javascript"></script>

</body>
</html>