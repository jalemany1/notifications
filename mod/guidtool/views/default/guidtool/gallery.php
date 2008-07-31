<?php
	/**
	 * Elgg GUID Tool
	 * 
	 * @package ElggGUIDTool
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

	global $CONFIG;
	
	$entity = $vars['entity']->entity;
	$by = $entity->getOwnerEntity();
	
	

	$info .= "<p><b><a href=\"{$CONFIG->url}pg/guidtool/view/{$entity->guid}/\">" . get_class($entity) . "</a></b></p>";
	
	$info .= "<div>";
	if ($by) $info .= elgg_echo('by') . " <a href=\"".$by->getURL()."\">{$by->name}</a> ";
	$info .= " " . friendly_time($entity->time_created )."</div>";

	echo elgg_view_listing($icon, $info);
?>