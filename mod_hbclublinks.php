<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

//This is the parameter we get from our xml file above
//$selectedSponsor = $params->get('clublink');
$displayMode = null;
//if ($selectedSponsor === 'all') {
//	$displayMode = $params->get('displayMode');
//}

// get parameter from component menu item
$menuitemid = JRequest::getInt('Itemid');
if ($menuitemid)
{
	$menu = JFactory::getApplication()->getMenu();
	$menuparams = $menu->getParams( $menuitemid );
}
//$displayMode = $menuparams->get('displayMode');
//print_r($menuparams);

//Add database instance
$db = JFactory::getDBO();
$jAp = JFactory::getApplication();

// getting training information
$query = $db->getQuery(true);
//$query->select('*');
$query->select('*');
$query->from($db->qn('hb_link'));
$query->where($db->qn('kategorie').' = '.$db->q('TSV'));
$db->setQuery($query);
$clublinks = $db->loadObjectList ();
//echo "Links<pre>"; print_r($clublinks); echo "</pre>";


//Returns the path of the layout file
switch ($displayMode)
{
//	case 'all':
//		$layout = 'all';
//		break;
	default:
		$layout = 'default';
		break;
}
require JModuleHelper::getLayoutPath('mod_hbclublinks', $params->get('layout', $layout));

