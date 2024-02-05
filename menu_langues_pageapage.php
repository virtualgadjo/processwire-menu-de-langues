<?php
foreach($languages as $language)
{
	if( ! $page->viewable($language) ) continue;
	$url = $page->localUrl($language);
	$iso = $language->name == 'default' ? 'fr' : $language->name;
	if($language->id != $user->language->id)
	{
		echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . $language->title . '"><img src="/site/assets/img/' . $iso . '.svg" alt="' . $language->title . '" /></a>' . "\n";
		// echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . $language->title . '">' . $iso . '</a>' . "\n";
		// echo '<a hreflang="' . $iso . '" href="' . $url . '" title="' . $language->title . '">' . $language->title . '</a>' . "\n";
	}
	else
	{
		echo '<span><img src="/site/assets/img/' . $iso . '.svg" alt="' . $language->title . '" /></span>' . "\n";
		// echo '<span>' . $iso . '</span>' . "\n";
		// echo '<span>' . $language->title . '</span>' . "\n";
	}
}
// si fichier php à part utilisé avec include ou require
// ne pas mettre la balise de fin
?>