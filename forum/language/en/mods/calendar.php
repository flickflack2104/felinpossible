<?php
/**
*
* calendar [English]
*
* @author alightner alightner@hotmail.com
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2008 alightner
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
    '12_HOURS'								=> '12 hours',
    '24_HOURS'								=> '24 hours',
    'AUTO_PRUNE_EVENT_FREQUENCY'			=> 'Auto Prune Past Events',
    'AUTO_PRUNE_EVENT_FREQUENCY_EXPLAIN'	=> 'How often (in days) should past events be pruned from the calendar?  Note if you select 0, past events will never be auto-pruned, you will have to delete them by hand.',
    'AUTO_PRUNE_EVENT_LIMIT'				=> 'Auto Prune Limits',
    'AUTO_PRUNE_EVENT_LIMIT_EXPLAIN'		=> 'How many days after an event do you want to add the event to the next auto prune\'s delete list?  In other words, do you want all events to remain in the calendar for 0, 30, or 45 days after the event?',
    'CALENDAR_ETYPE_NAME'					=> 'Event Type Name',
    'CALENDAR_ETYPE_COLOR'					=> 'Event Type Color',
    'CALENDAR_ETYPE_ICON'					=> 'Event Type Icon URL',
    'CALENDAR_SETTINGS_EXPLAIN'				=> 'Adjust the calendar settings here.',
    'CHANGE_EVENTS_TO'						=> 'Change all events of this type to',
    'COLOR'									=> 'Color',
    'CREATE_EVENT_TYPE'						=> 'Create new event type',
    'DELETE'								=> 'Delete',
    'DELETE_ALL_EVENTS'						=> 'Delete any existing events of this type',
    'DELETE_ETYPE'							=> 'Delete Event Type',
    'DELETE_ETYPE_EXPLAIN'					=> 'Are you sure you want to delete this event type?',
    'DELETE_LAST_EVENT_TYPE'				=> 'Warning: this is the last event type.',
    'DELETE_LAST_EVENT_TYPE_EXPLAIN'		=> 'Deleting this event type will delete all events from the calendar.  New event creation will be disabled until new event types are created.',
    'DISPLAY_12_OR_24_HOURS'				=> 'Display Time Format',
    'DISPLAY_12_OR_24_HOURS_EXPLAIN'		=> 'Do you want to display the times in 12 hour mode with AM/PM or 24 hour mode?  This does not effect what format the times are displayed to the user - that is set in their profile.  This only effects the pulldown menu for time selection when creating/editing events and the timed headings on the view day calendar.',
    'DISPLAY_HIDDEN_GROUPS'					=> 'Display Hidden Groups',
    'DISPLAY_HIDDEN_GROUPS_EXPLAIN'			=> 'Do you want users to be able to see and invite members of hidden groups?  If this setting is disabled, only group administrators will be able to see and invite members of the hidden group.',
    'DISPLAY_NAME'							=> 'Disply Name (may be NULL)',
    'DISPLAY_FIRST_WEEK'					=> 'Display Current Week',
    'DISPLAY_FIRST_WEEK_EXPLAIN'			=> 'Would you like to have the current week displayed on the forum index?',
    'DISPLAY_NEXT_EVENTS'					=> 'Display Next Events',
    'DISPLAY_NEXT_EVENTS_EXPLAIN'			=> 'Specify the number of current events you want listed on the index page.  Note this option is ignored if you have turned on the option to display the current week.',
    'DISPLAY_TRUNCATED_SUBJECT'				=> 'Truncate Subject',
    'DISPLAY_TRUNCATED_SUBJECT_EXPLAIN'		=> 'Long names in the subject can take up a lot of space on the calendar.  How many characters do you want displayed in the subject on the calendar? (enter 0 if you do not want to truncate the subject)',
    'EDIT'									=> 'Edit',
    'EDIT_ETYPE'							=> 'Edit Event Type',
    'EDIT_ETYPE_EXPLAIN'					=> 'Specify the way you want this event type to display.',
    'FIRST_DAY'								=> 'First Day',
    'FIRST_DAY_EXPLAIN'						=> 'Which day should be displayed as the first day of the week?',
    'FRIDAY'								=> 'Friday',
    'ICON_URL'								=> 'URL for icon',
    'MANAGE_ETYPES'							=> 'Manage Event Types',
    'MANAGE_ETYPES_EXPLAIN'					=> 'Event types are used to help organize the calendar, you may add, edit, delete or reorder the event types here.',
    'MONDAY'								=> 'Monday',
    'FULL_NAME'								=> 'Full Name',
    'NO_EVENT_TYPE_ERROR'					=> 'Failed to find specified event type.',
    'SATURDAY'								=> 'Saturday',
    'SUNDAY'								=> 'Sunday',
    'THURSDAY'								=> 'Thursday',
    'TUESDAY'								=> 'Tuesday',
    'USER_CANNOT_MANAGE_CALENDAR'			=> 'You do not have permission to manage the calendar settings or event types.',
    'WEDNESDAY'								=> 'Wednesday',

));

?>
