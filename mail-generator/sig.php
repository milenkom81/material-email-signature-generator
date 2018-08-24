<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<?php

		$slash = false;
		if($_GET['name']){
			$name = htmlspecialchars($_GET['name']);	
		}
		if($_GET['position']){
			$position = htmlspecialchars($_GET['position']);
		}
		if($_GET['email']){
			$email = htmlspecialchars($_GET['email']);	
		}
		if($_GET['work']){
			$work = htmlspecialchars($_GET['work']);
		}
		if($_GET['cell']){
			$cell = htmlspecialchars($_GET['cell']);
		}
		?>
		
	<head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/getSignature.js"></script>
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--Import materialize.css-->
	</head>
	<body>
		<div class="container card hoverable">
			<div class="card-content">
				<div id="signature">
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<table cellpadding="0" cellspacing="0" border="0" align="left" id="backgroundTable" style="padding:0 margin:0; float:none; background-color:#fff;">
						<tr >
							<td style="padding:0;margin:0;float:left; display:block;">
								<font color="#d2502e"><font style="font-size:28px">
									<b><br /><?php echo $name;?><span style="color:#d2502e;"></b></font></font>
									</span><br /><span style="color: black; font-size: medium"><?php echo $position; ?></span><br /><br />
									</font>
								</font>
							</td>
						</tr>
						
						<tr>
							<td style="padding:0;margin:0;float:left; display:block;font-size:small;">
								<a href="https://www.intens.rs"><img src="https://drive.google.com/uc?id=1jqL2fk0Mj0-OHD_DgKlHVHbVjk9XRGrz" /></a><hr></td>
						</tr>
						<tr>
							<td style="padding:0;margin:0;float:left; display:block;">
									<font color="#d2502e"><font style="font-size: 14pt" size="3"><b>Intens d.o.o.</b></font></font><br>
									<font style="font-size: 14px;" >tel:
									+381 21 446 222 <br>
									Bulevar Evrope 28 <br>
									21000 Novi Sad,
									Serbia
								</font><br><font><font ><b><a style="color:#d2502e;text-decoration:none;" href="http://www.intens.rs">www.intens.rs</b></a></font></font></td>
						</tr>
						<tr><td style="padding:0;margin:0;float:left; display:block;font-size: 3em;"><a href="https://www.facebook.com/Intens-479682622067337/?fref=ts"><img src="https://drive.google.com/uc?id=1xBrX3Puv6JfkzkN92LrtgUrTKyDB5308"/></a> <a href="https://twitter.com/intens"><img src="https://drive.google.com/uc?id=1IWgnkDpAqpegQweIL27MyL8OWW5Kn8JP"/></a> <a href="https://www.linkedin.com/company/intens/"><img src="https://drive.google.com/uc?id=1OlcKUXXXbj32U0JonuZ_r3Vbee-ygX-6"/></a></td>
						</tr>
						<tr>
							<td style="padding:0;margin:0;float:left; display:block;">
								<p style="margin:0; padding:0; font-size:xx-small; letter-spacing:0.1em; font-family:'verdana'; font-weight:100; color: #FF3333;">
									This e-mail (and any attachments thereto) may contain information which is confidential and/or protected by intellectual property rights and are intended for the sole use of the recipient(s) named above. Any use of the information contained herein (total or partial reproduction, communication or distribution in any form) by persons other than the designated recipient(s) is prohibited. 
									If you have received this e-mail in error, please notify the sender either by telephone or by e-mail and delete the material from any computer.<br />
									<br />
									
								</p>
							</td>
						</tr>
					</table>
				</div>
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("markup");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Kopirano sledeće: " + copyText.value);
}
</script>
				<p>Kopirati HTML code u polje za potpis u vašem email klijentu. <button onclick="myFunction()"><i style="font-size:2em; font-color:blue;" class="fa fa-clipboard" aria-hidden="true"></i></button>  <!-- <button type="button" value="save" id="save">Snimi</button>--></p>
								
				<textarea id="markup" class="sig-markup" name="message">
				</textarea>
				<div>
				<script>
				function saveTextAsFile() {
				var textToWrite = document.getElementById("markup").innerHTML;
				//textToWrite = textToWrite.replace("&lt;","<");
				//textToWrite = textToWrite.replace("&gt;",">");
				var textFileAsBlob = new Blob([ textToWrite ], { type: 'text/html;charset=utf-8' });
				
				var fileNameToSaveAs = "Potpis.htm";

				var downloadLink = document.createElement("a");
				downloadLink.download = fileNameToSaveAs;
				downloadLink.innerHTML = "Download File";
				if (window.webkitURL != null) {
				// Chrome allows the link to be clicked without actually adding it to the DOM.
				downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
				} else {
				// Firefox requires the link to be added to the DOM before it can be clicked.
				downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
				downloadLink.onclick = destroyClickedElement;
				downloadLink.style.display = "none";
				document.body.appendChild(downloadLink);
				}

				downloadLink.click();
				}

				var button = document.getElementById('save');
				button.addEventListener('click', saveTextAsFile);

				function destroyClickedElement(event) {
				// remove the link from the DOM
				document.body.removeChild(event.target);
				}
				</script>
				</div>
				
			</div>
		</div>	
	</body>
</html>
