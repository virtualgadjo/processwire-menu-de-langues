<select id="langswitch">
	<?php
	foreach($languages as $language) {
		$selected = '';
		if(!$page->viewable($language)) continue;
		$selected  = $user->language->id == $language->id ? " selected" : '';
		$url = $page->localUrl($language);

		echo '<option value="' . $url . '"' . $selected . '>' . $language->title . "</option>\n";
	}
	?>

</select>
<!--
beaucoup plus sain et élégant
soit dans une feuille de script externe
soit dans un pavé de script en bas de la page juste avant le </body>
-->
<script>
	const lsw = document.querySelector('#langswitch');
	lsw.addEventListener('change', () => {
		window.location = lsw.value;
	});
</script>