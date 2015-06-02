<?php

$f = isset($_GET['f']) ? htmlspecialchars($_GET['f']) : 'titel';

$v = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

require 'Database.php';

$db = new Database('platen', 'root', '');

$bands = $db->get('bands')->result();

function kortIn($beschrijving, $limit = 200)
{
	return trim(substr($beschrijving, 0, 100)) . '..';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Marc's Database</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="intro">
	<header>
		<h1>De beste 42 platen van Nederland</h1>
		<h2>Alleen hier in Marc's Database en op iTunes voor &euro;17,28</h2>
		<div class="form">
			<form action="search.php">

				<div class="radio-container">
					<div class="radio">
						<input type="radio" name="f" id="titel" value="titel" <?php echo $f == 'titel' ? 'checked' : '';?>>
						<label for="titel">Titel</label>
						<input type="radio" name="f" id="band" value="band" <?php echo $f == 'band' ? 'checked' : '';?>>
						<label for="band">Band</label>
						<input type="radio" name="f" id="jaar" value="jaar" <?php echo $f == 'jaar' ? 'checked' : '';?>>
						<label for="jaar">Jaar</label>
					</div>
				</div>

				<div class="inputfield">
					<input type="text" name="search" placeholder="Zoek hier.." autocomplete="off" required value="<?php echo $v ?: ''; ?>">
					<input type="submit" value="">
				</div>

			</form>
		</div>
		<a href="#begin" class="down" title="Lees meer"></a>
	</header>
	<section id="begin" class="bands">
		<h1>Informatie over Bands</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perferendis porro placeat excepturi, aut. Magnam odio necessitatibus, expedita sed eos iure maxime, tenetur amet dolorum, deserunt placeat quis exercitationem optio officia ratione ex, rem ea beatae repellat. Minima repellat at corporis magni quas! Magni inventore cum eius quia. Sapiente in, quos perspiciatis nobis dolorem repellat doloribus. Officia beatae tempore rem necessitatibus debitis veniam delectus molestiae excepturi illo, ab placeat eius aspernatur suscipit, aliquam consequuntur ad cumque sunt ducimus! Repellat odit animi ex velit fugiat minima, ipsam atque voluptas expedita praesentium. Soluta sit nulla, a ratione molestiae, quos cum provident, odio reiciendis corporis reprehenderit nesciunt illo fugiat. Totam doloribus iusto atque sunt debitis et consequatur molestiae fugit delectus sed magnam numquam commodi suscipit tempora, ut pariatur placeat eum quis quam aliquam sequi itaque eligendi non. Totam officia voluptates, rerum adipisci ad, quod pariatur beatae error. Corrupti maiores modi sapiente expedita dolor beatae consequuntur, laboriosam? Voluptatem itaque eos quas harum ut animi, repellendus repellat consequuntur assumenda, et facilis vero corporis quam quae? Voluptatum ut maiores maxime quod a rem perspiciatis autem exercitationem, repellendus nesciunt quo, quos optio repudiandae nam nisi! Mollitia culpa, autem eveniet! Quaerat expedita autem, iusto maxime quae doloremque sit quidem, distinctio blanditiis totam unde quis earum veniam, corrupti praesentium laudantium. Dolorem praesentium expedita natus suscipit facere accusamus maxime quasi nulla officiis, provident sunt, ipsam vero nostrum fugit rerum! Repellendus eos, dolorum praesentium voluptate, suscipit illo! Excepturi, numquam nesciunt obcaecati voluptate dicta, consequatur non magnam commodi laborum consequuntur sequi rem iste perspiciatis deserunt sunt. Ea voluptas tempora voluptatem earum vero, odio soluta quasi dolore aliquam velit blanditiis deleniti, ducimus dolorem unde delectus error rem ratione, dignissimos fuga officiis totam? Culpa non quibusdam doloribus accusamus! Commodi esse ullam, quam, nisi aliquid culpa ratione architecto quos. Ex voluptates tempore distinctio at dolor architecto sunt dolores inventore porro. Officiis mollitia nulla maiores quaerat eum, maxime molestias, iste, labore nam voluptatibus, rerum blanditiis. Maiores, suscipit iure hic quidem, eveniet sed neque ullam temporibus nostrum velit aspernatur animi itaque. Esse, quasi earum possimus laborum blanditiis reprehenderit porro ducimus! Sed magni tempore quia, explicabo saepe animi tenetur fugiat facere maxime assumenda. Eligendi facilis magnam, temporibus quos voluptatibus consequatur in! Modi dolorem sunt nihil voluptates temporibus dolor maiores itaque, libero omnis pariatur! Ipsum saepe quam deleniti iure eaque laudantium facere odit quis, quod doloribus in est obcaecati. Iure, nulla. Error sit in sapiente velit accusamus, neque impedit placeat nisi tenetur ab labore quas ratione eveniet asperiores iusto ipsum pariatur corrupti porro expedita dignissimos vero inventore? Similique temporibus laboriosam maiores libero ut explicabo tempore sunt, commodi iure suscipit accusamus nihil iste laborum ab, veritatis officia ratione odit laudantium quidem ex quasi dolore in nam? Molestiae ipsam doloremque dolores omnis nesciunt velit excepturi obcaecati iste est quae optio voluptate quasi, nobis eligendi, temporibus veniam incidunt laborum officiis illo? Tenetur in dignissimos praesentium quasi inventore ipsa accusamus, magni illum ipsam possimus soluta ratione incidunt omnis, eius. Eum tenetur tempore, saepe corrupti consequatur rerum sequi quae similique non, in, alias quibusdam.</p>
	</section>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/smoothscroll.js"></script>
</body>
</html>