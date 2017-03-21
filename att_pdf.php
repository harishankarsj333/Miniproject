<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form>
hello hello
<a href="att_view.php" download>Download link</a>
</form>
<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("username", "apikey");

    // convert a web page and store the generated PDF into a $pdf variable
    $pdf = $client->convertHtml("att_pdf.php");

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"att.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
		}
?>
</body>
</html>
