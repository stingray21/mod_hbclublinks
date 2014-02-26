<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );


$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_hbclublinks/css/default.css');

//echo "<p>".JText::_('DESC_MODULE')."</p>";

echo "<div class=\"clublinkBox\">";

foreach ($clublinks as $clublink) {
	echo '<a href="'.$clublink->link.'" target="_blank" />';
	echo '<img src="./hbdata/images/misc/'.$clublink->logo.'" alt="'.$clublink->linktext.'" />';
	echo '</a>';
}


echo "</div>";