<?php

// Jika kamu menggunakan shared hosting, atau monitor layanan tidak berfungsi, ubahlah ini menjadi IP atau nama domain kamu
// Cobalah dengan localhost dulu

$domain = 'localhost';

// tambahkan port yang ingin kamu monitor di bawah ini dalam format berikut
// 'Service Name' => 0 (where 0 = port number)

$services_list = [
	'HTTP' => 80,
	'SSH' => 22,
	'MySQL' => 3306,
	'FTP' => 21,
	'DNS' => 53,
	'SSL' => 443,
	'SMTP' => 25,
	'POP3' => 110
];

// Tambahkan server yang ingin kamu monitor di bawah ini dalam salah satu format berikut
// 'Server Name' => '0.0.0.0' (IP address)
// 'Server Name' => 'http://domain.com' (domain name)
// Perlu diingat, jika kamu menggunakan Cloudflare atau domain tidak menunjuk langsung ke server, kamu perlu menggunakan IP server yang sebenarnya, bukan nama domainnya.
// Jika kamu menggunakan shared hosting, ping mungkin dinonaktifkan oleh penyedia hosting

$servers_list = [
	'Google' => 'https://google.com'
];