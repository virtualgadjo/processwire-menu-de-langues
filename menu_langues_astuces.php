<?php
function ltitle($iso) {
	switch ($iso) {
		case 'fr': $title = 'Français'; break;
		case 'en': $title = 'English'; break;
		case 'es': $title = 'Español'; break;
		default: $title = 'Français';
	}
	return $title;
}
?>


<?php
// menu page à page
foreach($languages as $language)
{
	if( ! $page->viewable($language) ) continue;
	$url = $page->localUrl($language);
	$iso = $language->name == 'default' ? 'fr' : $language->name;
	if($language->id != $user->language->id)
	{
		echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . ltitle($iso) . '">' . ltitle($iso) . '</a>' . "\n";
	}
	else
	{
		echo '<span>' . ltitle($iso) . '</span>' . "\n";
	}
}

// menu vers la page d'accueil
foreach($languages as $language)
{
	if( ! $page->viewable($language) ) continue;
	$url = $pages->get(1)->localUrl($language);
	$iso = $language->name == 'default' ? 'fr' : $language->name;
	if($language->id != $user->language->id)
	{
		echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . ltitle($iso) . '">' . ltitle($iso) . '</a>' . "\n";
	}
	else
	{
		echo '<span>' . ltitle($iso) . '</span>' . "\n";
	}
}
?>

<!--dans un select-->
<select id="langswitch">
	<?php
	foreach($languages as $language) {
		$selected = '';
		if(!$page->viewable($language)) continue;
		$iso = $language->name == 'default' ? 'fr' : $language->name;
		$selected  = $user->language->id == $language->id ? " selected" : '';
		$url = $page->localUrl($language);

		echo '<option value="' . $url . '"' . $selected . '>' . ltitle($iso) . "</option>\n";
	}
	?>

</select>

<script>
	const lsw = document.querySelector('#langswitch');
	lsw.addEventListener('change', () => {
		window.location = lsw.value;
	});
</script>