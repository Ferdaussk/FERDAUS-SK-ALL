<!DOCTYPE html>
<html>

<head>
	<title>Download PDF using PHP from HTML Link</title>
</head>

<body>
	<center>
		<h2 style="color:green;">Welcome To GFG</h2>
		<p><b>Click below to download PDF</b>
		</p>
		<a href="gfgpdf.php?file=gfgpdf">Download PDF Now</a></center>
</body>

</html>
<?php

$file = $_GET["file"] .".pdf";

// We will be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="gfgpdf.pdf"');

$imagpdf = file_put_contents($image, file_get_contents($file));

echo $imagepdf;
?>
