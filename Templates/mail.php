<?php
	global $data;

	function imprimirDatos( $data ){
		foreach ($data as $key => $value) {
			if( $key == 'asunto' ){
				continue;
			}
			else{
				?>
					<tr>
						<td><?php echo( $key ); ?></td> <td><?php echo( $value ); ?></td>
					</tr>
			<?php
			}
		}
	}
?>
<!DOCTYPE html">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>BOWLERO</title>
		<style type="text/css">
 			table {
			  font-family: "Arial Narrow", Arial, sans-serif;
			  background-color: #FFFFFF;
			  width:700px;
			  border: 2px solid #FFFFFF;
			}

			table td, table th {
			  padding: 3px 2px;
			}

			table th {
			  font-size: 15px;
			  font-weight: bold;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th style="border-bottom: 2px solid #EC0E27;">
					<img style="padding-bottom: 10;" width=100" src="https://bolichesamf.com/wp-content/uploads/2019/05/logo_AMF.png" alt="Logotipo AMF">
				</th> 
				<th style="border-bottom: 2px solid #EC0E27;">
					<h1 style="font-size: 24px"><?php echo( $data['asunto'] ); ?></h1>
				</th>
			</tr>
			<tr></tr>
			<?php 
				imprimirDatos( $data );
			?>
			<tr></tr>
			<tr style="background: #EC0E27; text-align: center;" height="35">
			<td colspan="2" style="color: #FFFFFF; padding: 5px;">
				Boliches AMF - <a style="color: #FFFFFF; font-size: 14px; text-decoration: none;font-weight: bold;" href="http://bolichesamf.com" target="_blank">bolichesamf.com</a>
			</td>
			</tr>
		</table>
	</body>
</html>