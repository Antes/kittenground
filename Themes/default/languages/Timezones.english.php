<?php
// Version: 2.1 Beta 4; Time zone descriptions

/**
 * This file defines custom descriptions for certain time zones to be used in
 * the time zone select menu.
 *
 * It is not necessary to define a custom description for every time zone. By
 * default SMF will populate the description with a list of locations (usually
 * cities) that are in the given time zone, so a custom description is only
 * needed if the default description doesn't work well in a particular case.
 *
 * Translators do not need to use the same list of locations that the English
 * version uses. If you need to add, replace, or remove locations in order to
 * meet the needs of your language, SMF will handle your changes gracefully.
 *
 * HOW THIS FILE WORKS:
 *
 * There are three sections to this file. The first two sections use the $tztxt
 * variable, and the third uses the $txt variable.
 *
 * The first section uses this format:
 *
 *     $tztxt['America/Anchorage'] = 'Alaska';
 *
 * This tells SMF (1) to use 'America/Anchorage' as the specific location to
 * represent all locations that use the same time zone rules that Anchorage
 * does, and (2) to use 'Alaska' as the description string to show the user in
 * the select menu.
 *
 * The second section uses this format:
 *
 *     $tztxt['Europe/London'] = '';
 *
 * This tells SMF (1) to use 'Europe/London' as the specific location to
 * represent all locations that use the same time zone rules that London does,
 * and (2) to place London first in the list of locations used as the
 * description string shown to the user.
 *
 * The third secion uses this format:
 *
 *     $txt['America/Adak'] = 'Aleutian Islands';
 *
 * This simply tells SMF to replace 'Adak' with 'Aleutian Islands' in the
 * description string shown to the user. It does not tell SMF anything in
 * particular about where or how it should use the 'America/Adak' location.
 */

global $tztxt;

// Descriptions for entire time zones to use instead of a list of locations
$tztxt['UTC'] = 'Coordinated Universal Time';
$tztxt['America/Anchorage'] = 'Alaska';
$tztxt['America/Los_Angeles'] = 'Pacific Time (USA, Canada)';
$tztxt['America/Denver'] = 'Mountain Time (USA, Canada)';
$tztxt['America/Phoenix'] = 'Mountain Time (no DST)';
$tztxt['America/Chicago'] = 'Central Time (USA, Canada)';
$tztxt['America/Belize'] = 'Central Time (no DST)';
$tztxt['America/New_York'] = 'Eastern Time (USA, Canada)';
$tztxt['America/Jamaica'] = 'Eastern Time (no DST)';
$tztxt['America/Halifax'] = 'Atlantic Time (Canada)';
$tztxt['America/Anguilla'] = 'Atlantic Time (no DST)';
$tztxt['America/Sao_Paulo'] = 'Brasilia Time';
$tztxt['America/Araguaina'] = 'Brasilia Time (no DST)';
$tztxt['Atlantic/Reykjavik'] = 'Greenwich Mean Time (no DST)';
$tztxt['Europe/Berlin'] = 'Central European Time';
$tztxt['Africa/Khartoum'] = 'Eastern Africa Time';
$tztxt['Europe/Helsinki'] = 'Eastern European Time';
$tztxt['Asia/Riyadh'] = 'Arabia Time';

// Use a list of locations as the description, but force the named one to always be first
$tztxt['Europe/London'] = '';
$tztxt['Europe/Moscow'] = '';

// Custom descriptions for individual locations
$txt['America/Adak'] = 'Aleutian Islands';
$txt['Pacific/Marquesas'] = 'Marquesas Islands';
$txt['Pacific/Gambier'] = 'Gambier Islands';
$txt['Pacific/Pitcairn'] = 'Pitcairn Islands';
$txt['America/St_Johns'] = 'Newfoundland';
$txt['Pacific/Easter'] = 'Easter Island';
$txt['Atlantic/Stanley'] = 'Falkland Islands';
$txt['America/Miquelon'] = 'St. Pierre and Miquelon';
$txt['America/Godthab'] = 'Greenland';
$txt['America/Noronha'] = 'Fernando de Noronha';
$txt['Asia/Kolkata'] = 'India';
$txt['Asia/Colombo'] = 'Sri Lanka';
$txt['Asia/Dhaka'] = 'Bangladesh';
$txt['Antarctica/DumontDUrville'] = 'Dumont D\'Urville Station';
$txt['Antarctica/Vostok'] = 'Vostok Station';
$txt['Australia/Lord_Howe'] = 'Lord Howe Island';
$txt['Pacific/Guadalcanal'] = 'Solomon Islands';
$txt['Pacific/Norfolk'] = 'Norfolk Island';
$txt['Pacific/Noumea'] = 'New Caledonia';
$txt['Antarctica/McMurdo'] = 'McMurdo Station';
$txt['Pacific/Kwajalein'] = 'Marshall Islands';
$txt['Pacific/Chatham'] = 'Chatham Islands';

?>