<?php

if(isset($_POST['valider']))#button de validation de la commande dans le panier
$id = mysqli_connect("127.0.0.1","root","","wo");
$Mail = $_POST["mail"];
$header="MIME-Version: 1.0\r\n";
$header.='From:"WatchsOriginals"<watchsoriginals@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="../logo-wo.png"/>
			<br />
			<img src="http://www.primfx.com/mailing/separation.png"/>
			<br />
			Bonjour,
            Merci pour votre confiance.
            Nous vous confirmons la validation de votre commande ce jour.
            Cordialement
            Watchs Originals
            <br />
            <img src="../logo-wo.png"/>
		</div>
	</body>
</html>
';

mail("$Mail", "Confirmation de commande", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Valider ma commande" name="valider"/>
</form>