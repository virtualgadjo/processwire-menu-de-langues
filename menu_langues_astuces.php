<?php
// menu page à page
foreach($languages as $language)
{
	if( ! $page->viewable($language) ) continue;
	$url = $page->localUrl($language);
	$local_title = $language->getLanguageValue($language->name, 'title');
	$iso = $language->name == 'default' ? 'fr' : $language->name;
	if($language->id != $user->language->id)
	{
		echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . $local_title . '">' . $local_title . '</a>' . "\n";
	}
	else
	{
		echo '<span>' . $local_title . '</span>' . "\n";
	}
}

// menu vers la page d'accueil
foreach($languages as $language)
{
	if( ! $page->viewable($language) ) continue;
	$url = $pages->get(1)->localUrl($language);
	$local_title = $language->getLanguageValue($language->name, 'title');
	$iso = $language->name == 'default' ? 'fr' : $language->name;
	if($language->id != $user->language->id)
	{
		echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . $local_title . '">' . $local_title . '</a>' . "\n";
	}
	else
	{
		echo '<span>' . $local_title . '</span>' . "\n";
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
		$local_title = $language->getLanguageValue($language->name, 'title');

		echo '<option value="' . $url . '"' . $selected . '>' . $local_title . "</option>\n";
	}
	?>

</select>

<script>
	const lsw = document.querySelector('#langswitch');
	lsw.addEventListener('change', () => {
		window.location = lsw.value;
	});
</script>