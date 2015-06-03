<?php

$f = isset($_GET['f']) ? htmlspecialchars($_GET['f']) : 'titel';

$v = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Marc's Database</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body class="intro">
	<header>
		<h1>De beste 42 platen van Nederland</h1>
		<h2>Alleen hier in Marc's Database en op iTunes voor &euro;17,28</h2>
		<div class="form">
			<form action="search.php">

				<div class="inputwrapper">
					<div class="radio">
						<input type="radio" name="f" id="titel" value="titel" <?php echo $f == 'titel' ? 'checked' : '';?>>
						<label for="titel">Titel</label>
						<input type="radio" name="f" id="band" value="band" <?php echo $f == 'band' ? 'checked' : '';?>>
						<label for="band">Band</label>
						<input type="radio" name="f" id="jaar" value="jaar" <?php echo $f == 'jaar' ? 'checked' : '';?>>
						<label for="jaar">Jaar</label>
					</div>
				</div>

				<div class="inputwrapper">
					<input class="textinput" type="text" name="search" placeholder="Zoek hier.." autocomplete="off" required value="<?php echo $v ?: ''; ?>">
					<input class="submitbutton" type="submit" value="">
				</div>

			</form>
		</div>
		<a href="#begin" class="down" title="Lees meer"></a>
	</header>

	<section id="begin" class="bands">
		<div class="center">
			<h2>Informatie over Bands</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At accusantium tempore nisi animi debitis repellendus reprehenderit et officiis in, explicabo velit. Ab, atque in, veritatis vel temporibus recusandae. Tempore architecto repudiandae molestias accusamus eius itaque odit voluptates facere dolore commodi, iusto quisquam omnis natus tempora ratione doloribus reprehenderit consectetur culpa earum aspernatur numquam dignissimos sit facilis. Modi exercitationem, commodi minima temporibus, velit amet. Mollitia provident odio a, obcaecati illo quas ad pariatur unde. Fuga sed aliquid voluptate placeat, numquam quo odit neque maiores qui ducimus nobis eius, consectetur maxime assumenda illum veritatis aliquam, repellat cum eveniet fugit sit. Consectetur amet unde magnam sapiente, nesciunt consequatur omnis sed minima eveniet delectus! Itaque a eveniet modi, minus sequi blanditiis, aliquam molestiae neque! Rerum fugit saepe dolor, laboriosam rem porro omnis. Libero ea velit suscipit earum quaerat eius alias iure molestias consectetur, nemo ipsa eaque quia molestiae minima beatae aperiam voluptates pariatur et nam ad dolor, porro consequuntur praesentium repudiandae. Odit facere rem illum magnam deserunt eveniet quis optio modi, officia harum labore voluptate laboriosam perspiciatis earum voluptates. Nisi, iure quis, ea aliquid similique laboriosam incidunt exercitationem iste provident, labore doloribus voluptate vitae facilis excepturi quos tenetur expedita perferendis et, reiciendis. Dignissimos sit cum, reprehenderit ipsam, minus itaque voluptas magnam iure blanditiis magni debitis corrupti beatae officia quisquam cumque soluta quos aliquid veritatis, quia. Provident laboriosam beatae nam nisi nemo doloribus dicta necessitatibus quibusdam adipisci animi, aspernatur aut sit quo in sed cumque esse quas id, eos sint consequatur nostrum voluptas quaerat veniam dolor. Vero labore quibusdam consectetur, minima, maxime voluptate voluptates quam sunt eum deserunt dignissimos accusantium dolor suscipit? Nemo maxime iusto illo laudantium asperiores sequi ratione, magni libero adipisci tempora nobis enim omnis repellat delectus ipsum voluptatem dolores expedita fugit optio explicabo ea quasi, quibusdam? Rerum minima assumenda tempora rem quos delectus tempore quasi totam ipsa et, perspiciatis voluptatem itaque, nulla aliquid magnam quaerat vero facilis optio maxime ab, consequuntur. Doloremque officia dolore officiis ratione, culpa unde expedita nihil. Iure expedita saepe vitae, architecto, velit placeat sequi repellat obcaecati rerum nulla itaque rem, officiis eum adipisci asperiores deleniti hic minus porro distinctio. Quos aspernatur explicabo sequi animi, dolores nobis aut autem quisquam, excepturi, possimus veritatis soluta perferendis neque incidunt ipsum ea optio praesentium dolore doloremque quasi tenetur numquam ipsa rem voluptate. Obcaecati repellendus magnam, minus sed. Maiores ea perspiciatis consequatur eos voluptates totam rem nesciunt, impedit vero! Odio vel itaque repellat reiciendis, ea quidem maiores, laboriosam beatae distinctio magni ullam aliquid nulla maxime earum eum ut possimus porro perferendis consequuntur. Commodi distinctio tenetur laborum accusantium deleniti doloremque dolorum consectetur similique reiciendis cum corrupti odit at totam aperiam quis perferendis dolores eligendi voluptates qui repudiandae, itaque sit quod fuga? Dolorum commodi dolores exercitationem nihil nisi saepe nobis ratione itaque debitis ab architecto, quod voluptatem ullam suscipit aut est aliquid esse porro, totam doloremque impedit, cumque officiis rerum. Voluptatibus quaerat dolore dolor at repellendus voluptatem omnis consequuntur. Sit voluptatibus nihil sunt hic id odio beatae dolorum nesciunt, animi, distinctio ex magni doloribus culpa.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At accusantium tempore nisi animi debitis repellendus reprehenderit et officiis in, explicabo velit. Ab, atque in, veritatis vel temporibus recusandae. Tempore architecto repudiandae molestias accusamus eius itaque odit voluptates facere dolore commodi, iusto quisquam omnis natus tempora ratione doloribus reprehenderit consectetur culpa earum aspernatur numquam dignissimos sit facilis. Modi exercitationem, commodi minima temporibus, velit amet. Mollitia provident odio a, obcaecati illo quas ad pariatur unde. Fuga sed aliquid voluptate placeat, numquam quo odit neque maiores qui ducimus nobis eius, consectetur maxime assumenda illum veritatis aliquam, repellat cum eveniet fugit sit. Consectetur amet unde magnam sapiente, nesciunt consequatur omnis sed minima eveniet delectus! Itaque a eveniet modi, minus sequi blanditiis, aliquam molestiae neque! Rerum fugit saepe dolor, laboriosam rem porro omnis. Libero ea velit suscipit earum quaerat eius alias iure molestias consectetur, nemo ipsa eaque quia molestiae minima beatae aperiam voluptates pariatur et nam ad dolor, porro consequuntur praesentium repudiandae. Odit facere rem illum magnam deserunt eveniet quis optio modi, officia harum labore voluptate laboriosam perspiciatis earum voluptates. Nisi, iure quis, ea aliquid similique laboriosam incidunt exercitationem iste provident, labore doloribus voluptate vitae facilis excepturi quos tenetur expedita perferendis et, reiciendis. Dignissimos sit cum, reprehenderit ipsam, minus itaque voluptas magnam iure blanditiis magni debitis corrupti beatae officia quisquam cumque soluta quos aliquid veritatis, quia. Provident laboriosam beatae nam nisi nemo doloribus dicta necessitatibus quibusdam adipisci animi, aspernatur aut sit quo in sed cumque esse quas id, eos sint consequatur nostrum voluptas quaerat veniam dolor. Vero labore quibusdam consectetur, minima, maxime voluptate voluptates quam sunt eum deserunt dignissimos accusantium dolor suscipit? Nemo maxime iusto illo laudantium asperiores sequi ratione, magni libero adipisci tempora nobis enim omnis repellat delectus ipsum voluptatem dolores expedita fugit optio explicabo ea quasi, quibusdam? Rerum minima assumenda tempora rem quos delectus tempore quasi totam ipsa et, perspiciatis voluptatem itaque, nulla aliquid magnam quaerat vero facilis optio maxime ab, consequuntur. Doloremque officia dolore officiis ratione, culpa unde expedita nihil. Iure expedita saepe vitae, architecto, velit placeat sequi repellat obcaecati rerum nulla itaque rem, officiis eum adipisci asperiores deleniti hic minus porro distinctio. Quos aspernatur explicabo sequi animi, dolores nobis aut autem quisquam, excepturi, possimus veritatis soluta perferendis neque incidunt ipsum ea optio praesentium dolore doloremque quasi tenetur numquam ipsa rem voluptate. Obcaecati repellendus magnam, minus sed. Maiores ea perspiciatis consequatur eos voluptates totam rem nesciunt, impedit vero! Odio vel itaque repellat reiciendis, ea quidem maiores, laboriosam beatae distinctio magni ullam aliquid nulla maxime earum eum ut possimus porro perferendis consequuntur. Commodi distinctio tenetur laborum accusantium deleniti doloremque dolorum consectetur similique reiciendis cum corrupti odit at totam aperiam quis perferendis dolores eligendi voluptates qui repudiandae, itaque sit quod fuga? Dolorum commodi dolores exercitationem nihil nisi saepe nobis ratione itaque debitis ab architecto, quod voluptatem ullam suscipit aut est aliquid esse porro, totam doloremque impedit, cumque officiis rerum. Voluptatibus quaerat dolore dolor at repellendus voluptatem omnis consequuntur. Sit voluptatibus nihil sunt hic id odio beatae dolorum nesciunt, animi, distinctio ex magni doloribus culpa.</p>
		</div>
	</section>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/smoothscroll.js"></script>
</body>
</html>