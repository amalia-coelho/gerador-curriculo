<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	<div id="site">
		<form>
			<div id="cima">
				<duv id="hobbies">
					<h1>Hobbies</h1>
					<p>Apenas os três primeiros selecionados serão considerados e inseridos no currículo.</p>
					<div id="checks">
						<div id="1">
							<input type="checkbox" name="hobbies[]" value="Pintura">Pintura
							<input type="checkbox" name="hobbies[]" value="Leitura">Leitura
							<input type="checkbox" name="hobbies[]" value="Vôlei">Vôlei
							<input type="checkbox" name="hobbies[]" value="Fotografia">Fotografia
							<input type="checkbox" name="hobbies[]" value="Modelagem">Modelagem
							<input type="checkbox" name="hobbies[]" value="Moda">Moda
							<input type="checkbox" name="hobbies[]" value="Trabalho Voluntário">Trabalho Voluntário
							<input type="checkbox" name="hobbies[]" value="Música">Música
							<input type="checkbox" name="hobbies[]" value="Dança">Dança
							<input type="checkbox" name="hobbies[]" value="Culinária">Culinária
							<input type="checkbox" name="hobbies[]" value="Natação">Natação
						</div>
					</div>
				</duv>
			</div>
		</form>
	</div>
</body>
</html>