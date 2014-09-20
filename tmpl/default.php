<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );

JHtml::stylesheet('mod_hbclublinks/default.css', array(), true);

//echo "<p>".JText::_('DESC_MODULE')."</p>";

echo "<div class=\"clublinkBox\">";

foreach ($clublinks as $clublink) {
	echo '<a href="'.$clublink->link.'" target="_blank" />';
	echo '<img src="./media/mod_hbclublinks/images/'.$clublink->logo.'" '
		. 'alt="'.$clublink->linktext.'" />';
	echo '</a>';
}

echo '<div class="clr"></div>';
echo "</div>";