<!DOCTYPE html>
<?php
	$title = $_GET["project"];
	$filePath = $title . $title . "json";
	$fileContents = file_get_contents($filePath);
	$rootDictionary = json_decode($fileContents, true);

	$name = $rootDictionary["name"];
	$description = $rootDictionary["desc"];
	$itunesURL = $rootDictionary["itunes"];
	$githubURL = $rootDictionary["github"];
	$imageFilePath = $title . $title . "png";
?>
<html>
	<head>
		<title><?=$name?></title>
		<link rel="stylesheet" href="/style.css" />
		<script src="/detectmobilebrowser.js"></script>
	</head>
	<body>
		<nav id="header">
			<img src="/chris.jpg" alt="chris" />
			<h1>Chris Loonam</h1>
			<ul>
				<li><a href="/contact.html">Contact</a></li>
				<li><a href="">Links</a>
					<ul>
						<li><a href="http://stackoverflow.com/users/1702077/chris-loonam">StackOverflow</a></li>
						<li><a href="https://github.com/chrisl212">Github</a></li>
					</ul>
				</li>
				<li><a href="">Projects</a>
					<ul>
						<li><a href="/projects/index.php?project=mydownload">myDownload</a></li>
					</ul>
				</li>
				<li><a href="/index.html">Home</a></li>
			</ul>
			<hr />
		</nav>
		<div id="content">
			<h1 style="text-align:center;"><?=$name?></h1>
			<img src=<?=$imageFilePath?> alt="Icon" style="width:30%; border-radius:30px;"/>
			<p class="appDescription"><?=$description?></p>
			<p style="text-align:center; width:30%;"><a href=<?=$itunesURL?>>View in iTunes</a></p>
			<p style="text-align:center; width:30%;"><a href=<?=$githubURL?>>View on Github</a></p>
		</div>
		<hr />
		<p style="text-align:center;">Copyright 2015 Chris Loonam</p>
	</body>
</html>