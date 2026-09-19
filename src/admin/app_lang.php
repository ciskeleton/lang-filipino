<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Mga Component';
$lang['admin_content'] = 'Nilalaman';
$lang['admin_database_backup'] = 'Mga Database Backup';
$lang['admin_extensions'] = 'Mga Extension';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Tulong';
$lang['admin_languages'] = 'Mga Wika';
$lang['admin_logs'] = 'Mga System Log';
$lang['admin_media'] = 'Aklatan ng Media';
$lang['admin_modules'] = 'Mga Module';
$lang['admin_plugins'] = 'Mga Plugin';
$lang['admin_reports'] = 'Log ng Aktibidad';
$lang['admin_settings'] = 'Mga Setting ng System';
$lang['admin_sysinfo'] = 'Impormasyon ng System';
$lang['admin_system'] = 'System';
$lang['admin_system_firewall'] = 'Firewall ng Sistema';
$lang['admin_themes'] = 'Mga Theme';
$lang['admin_updates'] = 'Mga Update ng System';
$lang['admin_users'] = 'Mga User';
$lang['admin_view_site'] = 'Tingnan ang Site';
$lang['per_page'] = 'Bawat Pahina';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Salamat sa paggawa gamit ang <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Walang aktibong item.} other{<b>#</b> sa <b>%s</b> item ang aktibo.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'I-install';
$lang['admin_install_error'] = 'Nabigong i-install ang package.';
$lang['admin_install_error_com'] = 'Nabigo ang pag-install: %s';
$lang['admin_install_location_app'] = 'Ang application na ito lamang';
$lang['admin_install_location_core'] = 'Lahat ng application';
$lang['admin_install_location_select'] = '&#151; Piliin ang lokasyon &#151;';
$lang['admin_install_success'] = 'Matagumpay na na-install ang package.';
$lang['admin_install_upload'] = 'Mag-upload';
$lang['admin_install_upload_error'] = 'Nabigong i-upload ang package.';
$lang['admin_install_upload_success'] = 'Matagumpay na na-upload ang package.';
$lang['admin_install_upload_tip'] = 'Mag-install ng package sa pamamagitan ng pag-upload ng <b>.zip</b> file nito dito.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Hindi maalis ang mga lumang backup file.';
$lang['admin_database_backup_clean_success'] = '%d backup file ang natanggal. %d disk space ang napalaya.';
$lang['admin_database_backup_create'] = 'Gumawa ng Backup';
$lang['admin_database_backup_create_confirm'] = 'Sigurado ka ba na gusto mong gumawa ng backup ngayon?';
$lang['admin_database_backup_create_error'] = 'Hindi makagawa ng backup file. Tiyakin na ang folder na <b>%s</b> ay maaaring isulat.';
$lang['admin_database_backup_create_success'] = 'Ang database backup file na <b>%s</b> ay matagumpay na nagawa.';
$lang['admin_database_backup_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang mga backup file na ito?';
$lang['admin_database_backup_delete_error'] = 'Hindi mabura ang mga napiling backup file.';
$lang['admin_database_backup_delete_success'] = 'Ang mga backup file ay matagumpay na nabura.';
$lang['admin_database_backup_download_error'] = 'Hindi ma-download ang napiling backup file.';
$lang['admin_database_backup_download_success'] = 'Ang backup file ay matagumpay na na-download.';
$lang['admin_database_backup_lock_confirm'] = 'Sigurado ka ba na gusto mong i-lock ang mga backup file na ito?';
$lang['admin_database_backup_lock_error'] = 'Hindi ma-lock ang mga napiling backup file.';
$lang['admin_database_backup_lock_success'] = 'Ang mga backup file ay matagumpay na nai-lock.';
$lang['admin_database_backup_locked_error'] = 'Hindi mabura ang mga naka-lock na backup file.';
$lang['admin_database_backup_missing_error'] = 'Hindi mahanap ang backup file.';
$lang['admin_database_backup_unlock_confirm'] = 'Sigurado ka ba na gusto mong i-unlock ang mga backup file na ito?';
$lang['admin_database_backup_unlock_error'] = 'Hindi ma-unlock ang mga napiling backup file.';
$lang['admin_database_backup_unlock_success'] = 'Ang mga backup file ay matagumpay na nai-unlock.';
$lang['admin_database_prune'] = 'Prunihin';
$lang['admin_database_prune_confirm'] = 'Sigurado ka ba na gusto mong prune ang database? Lilikha ng backup bago pagpatakbo.';
$lang['admin_database_prune_error'] = 'Hindi ma-prune ang database.';
$lang['admin_database_prune_next'] = 'Susunod na prune: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Ang database ay matagumpay na na-prune.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Burahin ang mga Log';
$lang['admin_logs_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang mga napiling log file?';
$lang['admin_logs_delete_error'] = 'Hindi mabura ang mga log file.';
$lang['admin_logs_delete_success'] = 'Ang mga log file ay matagumpay na nabura.';
$lang['admin_logs_error_disabled'] = 'Ang logging ay kasalukuyang hindi naka-enable.';
$lang['admin_logs_error_empty'] = 'Walang nakitang mga log.';
$lang['admin_logs_error_missing'] = 'Hindi mahanap ang log file, o ito ay walang laman.';
$lang['admin_logs_tip'] = 'Ang logging ay mabilis na lumilikha ng mga malalaking file. Para sa mga live site, isipin ang pagbura sa mga lumang log.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang mga napiling email?';
$lang['admin_emails_delete_error'] = 'Hindi mabura ang mga napiling email.';
$lang['admin_emails_delete_success'] = 'Ang mga napiling email ay matagumpay na nabura.';
$lang['admin_emails_email_from'] = 'Galing sa';
$lang['admin_emails_mail_queue'] = 'Pila ng Koreo';
$lang['admin_emails_mailer'] = 'Bulk na Email';
$lang['admin_emails_search'] = 'Maghanap ng mga email ayon sa paksa o nilalaman...';
$lang['admin_emails_send_error'] = 'Hindi ma-queue ang email. Mangyaring subukan muli.';
$lang['admin_emails_send_none'] = 'Walang mga user na tumugma sa iyong napiling kriteria.';
$lang['admin_emails_send_success'] = 'Ang email ay naka-queue na at madaling ipapadala.';
$lang['admin_emails_send_to_banned'] = 'Ipadala sa mga banned user.';
$lang['admin_emails_send_to_deleted'] = 'Ipadala sa mga deleted user.';
$lang['admin_emails_send_to_disabled'] = 'Ipadala sa mga inactive user.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Magdagdag ng User';
$lang['admin_users_all_users'] = 'Lahat ng User';
$lang['admin_users_ban_confirm'] = 'Sigurado ka bang nais mong i-ban ang mga napiling user?';
$lang['admin_users_ban_error'] = 'Hindi ma-ban ang mga napiling user.';
$lang['admin_users_ban_success'] = 'Matagumpay na na-ban ang mga napiling user.';
$lang['admin_users_delete_confirm'] = 'Sigurado ka bang nais mong tanggalin ang mga napiling user?';
$lang['admin_users_delete_error'] = 'Hindi matanggal ang mga napiling user.';
$lang['admin_users_delete_success'] = 'Matagumpay na natanggal ang mga napiling user.';
$lang['admin_users_disable_confirm'] = 'Sigurado ka bang nais mong i-disable ang mga napiling user?';
$lang['admin_users_disable_error'] = 'Hindi ma-disable ang mga napiling user.';
$lang['admin_users_disable_success'] = 'Matagumpay na na-disable ang mga napiling user.';
$lang['admin_users_edit'] = 'I-edit ang User';
$lang['admin_users_edit_error'] = 'Hindi ma-update ang user.';
$lang['admin_users_edit_success'] = 'Ang user ay matagumpay na na-update.';
$lang['admin_users_enable_confirm'] = 'Sigurado ka bang nais mong i-enable ang mga napiling user?';
$lang['admin_users_enable_error'] = 'Hindi ma-enable ang mga napiling user.';
$lang['admin_users_enable_success'] = 'Matagumpay na na-enable ang mga napiling user.';
$lang['admin_users_groups'] = 'Mga Grupo';
$lang['admin_users_lock_confirm'] = 'Sigurado ka ba na gusto mong i-lock ang mga napiling user?';
$lang['admin_users_lock_error'] = 'Hindi ma-lock ang mga napiling user.';
$lang['admin_users_lock_success'] = 'Ang mga napiling user ay matagumpay na nai-lock.';
$lang['admin_users_logged'] = 'Mga Naka-log in na User';
$lang['admin_users_manage'] = 'Pamahalaan ang mga User';
$lang['admin_users_remove_confirm'] = 'Sigurado ka bang nais mong permanenteng tanggalin ang mga napiling user at lahat ng kanilang data?';
$lang['admin_users_remove_error'] = 'Hindi permanenteng matanggal ang mga napiling user at lahat ng kanilang data.';
$lang['admin_users_remove_success'] = 'Matagumpay na natanggal ang mga napiling user at lahat ng kanilang data.';
$lang['admin_users_restore_confirm'] = 'Sigurado ka bang nais mong ibalik ang mga napiling user?';
$lang['admin_users_restore_error'] = 'Hindi maibalik ang mga napiling user.';
$lang['admin_users_restore_success'] = 'Matagumpay na naibalik ang mga napiling user.';
$lang['admin_users_search'] = 'Maghanap ayon sa pangalan, username, o email...';
$lang['admin_users_unban_confirm'] = 'Sigurado ka bang nais mong i-unban ang mga napiling user?';
$lang['admin_users_unban_error'] = 'Hindi ma-unban ang mga napiling user.';
$lang['admin_users_unban_success'] = 'Matagumpay na na-unban ang mga napiling user.';
$lang['admin_users_unlock_confirm'] = 'Sigurado ka ba na gusto mong i-unlock ang mga napiling user?';
$lang['admin_users_unlock_error'] = 'Hindi ma-unlock ang mga napiling user.';
$lang['admin_users_unlock_success'] = 'Ang mga napiling user ay matagumpay na nai-unlock.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Burahin ang mga Log';
$lang['admin_reports_clear_confirm'] = 'Sigurado ka ba na gusto mong burahin ang actions log?';
$lang['admin_reports_clear_error'] = 'Hindi malinis ang actions log.';
$lang['admin_reports_clear_success'] = 'Ang actions log ay matagumpay na nalinis.';
$lang['admin_reports_latest_actions'] = 'Mga Pinakabagong Aksyon';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang mga napiling file?';
$lang['admin_media_delete_error'] = 'Hindi mabura ang mga file.';
$lang['admin_media_delete_success'] = 'Ang mga file ay matagumpay na nabura.';
$lang['admin_media_file_delete_error'] = 'Hindi mabura ang file.';
$lang['admin_media_file_delete_success'] = 'Ang file ay matagumpay na nabura.';
$lang['admin_media_file_update_error'] = 'Hindi ma-update ang file.';
$lang['admin_media_file_update_success'] = 'Ang file ay matagumpay na na-update.';
$lang['admin_media_search'] = 'Maghanap gamit ang pangalan, paglalarawan, o filename...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Walang aktibong module.} other{<b>#</b> sa <b>%s</b> module ang aktibo.}';
$lang['admin_modules_add'] = 'Magdagdag ng Module';
$lang['admin_modules_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang module: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Hindi mabura ang module.';
$lang['admin_modules_delete_success'] = 'Ang module ay matagumpay na nabura.';
$lang['admin_modules_disable_all_confirm'] = 'Sigurado ka ba na gusto mong i-disable ang lahat ng module?';
$lang['admin_modules_disable_all_error'] = 'Hindi i-disable ang lahat ng module.';
$lang['admin_modules_disable_all_success'] = 'Lahat ng module ay matagumpay na na-disable.';
$lang['admin_modules_disable_confirm'] = 'Sigurado ka ba na gusto mong i-disable ang module: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Hindi ma-deactivate ang module.';
$lang['admin_modules_disable_success'] = 'Ang module ay matagumpay na na-deactivate.';
$lang['admin_modules_enable_all_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang lahat ng module?';
$lang['admin_modules_enable_all_error'] = 'Hindi i-enable ang lahat ng module.';
$lang['admin_modules_enable_all_success'] = 'Lahat ng module ay matagumpay na na-enable.';
$lang['admin_modules_enable_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang module: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Hindi ma-activate ang module.';
$lang['admin_modules_enable_success'] = 'Ang module ay matagumpay na na-activate.';
$lang['admin_modules_install_confirm'] = 'Sigurado ka bang gusto mong i-install ang module na ito?';
$lang['admin_modules_install_error'] = 'Nabigo ang pag-install ng module.';
$lang['admin_modules_install_success'] = 'Matagumpay na na-install ang module.';
$lang['admin_modules_install_tip'] = 'Ang mga module ay nagdadagdag ng mga bagong feature at functionality sa iyong site. Mag-browse sa mga available na module sa <a href="%s" target="_blank" rel="noopener">module directory</a> o mag-upload ng isa bilang <b>.zip</b> package.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Walang aktibong plugin.} other{<b>#</b> sa <b>%s</b> plugin ang aktibo.}';
$lang['admin_plugins_add'] = 'Magdagdag ng Plugin';
$lang['admin_plugins_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Hindi mabura ang plugin.';
$lang['admin_plugins_delete_success'] = 'Ang plugin ay matagumpay na nabura.';
$lang['admin_plugins_disable_all_confirm'] = 'Sigurado ka ba na gusto mong i-disable ang lahat ng plugin?';
$lang['admin_plugins_disable_all_error'] = 'Hindi i-disable ang lahat ng plugin.';
$lang['admin_plugins_disable_all_success'] = 'Lahat ng plugin ay matagumpay na na-disable.';
$lang['admin_plugins_disable_confirm'] = 'Sigurado ka ba na gusto mong i-disable ang plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Hindi ma-deactivate ang plugin.';
$lang['admin_plugins_disable_success'] = 'Ang plugin ay matagumpay na na-deactivate.';
$lang['admin_plugins_enable_all_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang lahat ng plugin?';
$lang['admin_plugins_enable_all_error'] = 'Hindi i-enable ang lahat ng plugin.';
$lang['admin_plugins_enable_all_success'] = 'Lahat ng plugin ay matagumpay na na-enable.';
$lang['admin_plugins_enable_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Hindi ma-activate ang plugin.';
$lang['admin_plugins_enable_success'] = 'Ang plugin ay matagumpay na na-activate.';
$lang['admin_plugins_install_confirm'] = 'Sigurado ka bang gusto mong i-install ang plugin na ito?';
$lang['admin_plugins_install_error'] = 'Nabigo ang pag-install ng plugin.';
$lang['admin_plugins_install_success'] = 'Matagumpay na na-install ang plugin.';
$lang['admin_plugins_install_tip'] = 'Ang mga plugin ay nagpapalawak ng mga kasalukuyang feature na may mga karagdagang opsyon o integrasyon. I-install mula sa <a href="%s" target="_blank" rel="noopener">plugin directory</a> o mag-upload ng <b>.zip</b> file.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Magdagdag ng Theme';
$lang['admin_themes_delete_confirm'] = 'Sigurado ka ba na gusto mong burahin ang theme: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Hindi mabura ang theme.';
$lang['admin_themes_delete_error_active'] = 'Hindi mo mabura ang kasalukuyang aktibong theme.';
$lang['admin_themes_delete_success'] = 'Ang theme ay matagumpay na nabura.';
$lang['admin_themes_disable_confirm'] = 'Sigurado ka bang nais mong i-disable ang theme: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Hindi ma-disable ang theme.';
$lang['admin_themes_disable_success'] = 'Matagumpay na na-disable ang theme.';
$lang['admin_themes_enable_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang theme: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Hindi ma-activate ang theme.';
$lang['admin_themes_enable_success'] = 'Ang theme ay matagumpay na na-activate.';
$lang['admin_themes_install_confirm'] = 'Sigurado ka bang gusto mong i-install ang theme na ito?';
$lang['admin_themes_install_error'] = 'Nabigo ang pag-install ng theme.';
$lang['admin_themes_install_success'] = 'Matagumpay na na-install ang theme.';
$lang['admin_themes_install_tip'] = 'Ang mga theme ay nagbabago ng hitsura at layout ng iyong site. Pumili mula sa <a href="%s" target="_blank" rel="noopener">theme library</a> o mag-upload ng <b>.zip</b> file upang i-install ang sarili mo.';
$lang['admin_themes_none_tip'] = 'Tumatakbo ang application na ito nang walang tema. Mag-install ng isa upang i-customize ang pampublikong interface.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Mga Menu';
$lang['admin_menus_assign_error'] = 'Hindi ma-update ang mga menu location.';
$lang['admin_menus_assign_success'] = 'Ang mga menu location ay matagumpay na na-update.';
$lang['admin_menus_header'] = 'Mayroong <b>%s</b> magagamit na lokasyon ng menu.';
$lang['admin_menus_location'] = 'Lokasyon';
$lang['admin_menus_locations'] = 'Mga Menu Location';
$lang['admin_menus_manage'] = 'Pamahalaan ang mga Menu';
$lang['admin_menus_menu'] = 'Naka-assign na Menu';
$lang['admin_menus_none'] = '&#151; Wala &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Magdagdag ng Wika';
$lang['admin_languages_default_confirm'] = 'Sigurado ka ba na gusto mong gawing default na language ng site ang wika na ito?';
$lang['admin_languages_default_error'] = 'Hindi mabago ang default na language.';
$lang['admin_languages_default_error_nochange'] = 'Ang wika na ito ay default na.';
$lang['admin_languages_default_success'] = 'Ang default na language ay matagumpay na nabago.';
$lang['admin_languages_disable_all_confirm'] = 'Sigurado ka ba na gusto mong i-disable ang lahat ng wika?';
$lang['admin_languages_disable_all_error'] = 'Hindi i-disable ang lahat ng wika.';
$lang['admin_languages_disable_all_success'] = 'Lahat ng wika ay matagumpay na na-disable.';
$lang['admin_languages_disable_confirm'] = 'Sigurado ka ba na gusto mong i-disable ang wika: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Hindi i-disable ang wika.';
$lang['admin_languages_disable_error_default'] = 'Ang default na wika ay hindi maaaring i-disable.';
$lang['admin_languages_disable_error_nochange'] = 'Ang wika na ito ay naka-disable na.';
$lang['admin_languages_disable_success'] = 'Ang wika ay matagumpay na na-disable.';
$lang['admin_languages_enable_all_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang lahat ng wika?';
$lang['admin_languages_enable_all_error'] = 'Hindi i-enable ang lahat ng wika.';
$lang['admin_languages_enable_all_success'] = 'Lahat ng wika ay matagumpay na na-enable.';
$lang['admin_languages_enable_confirm'] = 'Sigurado ka ba na gusto mong i-enable ang wika: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Hindi i-enable ang wika.';
$lang['admin_languages_enable_error_nochange'] = 'Ang wika na ito ay naka-enable na.';
$lang['admin_languages_enable_success'] = 'Ang wika ay matagumpay na na-enable.';
$lang['admin_languages_install_confirm'] = 'Sigurado ka bang gusto mong i-install ang wikang ito?';
$lang['admin_languages_install_error'] = 'Nabigo ang pag-install ng wika.';
$lang['admin_languages_install_success'] = 'Matagumpay na na-install ang wika.';
$lang['admin_languages_install_tip'] = 'Nagdaragdag ang mga wika ng mga pagsasalin para sa interface at nilalaman ng iyong site. Tingnan ang mga available na wika sa <a href="%s" target="_blank" rel="noopener">direktoryo ng wika</a> o mag-upload ng <b>.zip</b> package upang i-install ang sarili mong wika.';
$lang['admin_languages_tip'] = 'I-enable, i-disable, at itakda ang default na wika ng site. Ang mga naka-enable na wika ay available sa mga site visitor.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Umiiral na ang pakete.';
$lang['package_archive_download_failed'] = 'Nabigo ang pag-download ng arkibo ng pakete.';
$lang['package_backup_create_error'] = 'Nabigo ang paglikha ng backup ng pakete.';
$lang['package_backup_dir_failed'] = 'Nabigo ang paglikha ng direktoryo ng backup: %s';
$lang['package_backup_missing'] = 'Hindi umiiral ang file ng backup.';
$lang['package_backup_path_error'] = 'Hindi matukoy ang landas (path) ng backup file.';
$lang['package_backup_request_invalid'] = 'Hindi wastong kahilingan sa backup.';
$lang['package_backup_restore_error'] = 'Nabigo ang pag-restore ng backup ng pakete.';
$lang['package_catalog_type_unknown'] = 'Hindi kilalang uri ng katalogo.';
$lang['package_checksum_error'] = 'Nabigo ang beripikasyon sa checksum ng pakete.';
$lang['package_copy_files_error'] = 'Nabigo ang pag-kopya ng mga file ng pakete patungo sa destinasyon.';
$lang['package_copy_updates_error'] = 'Nabigo ang pag-kopya ng mga file ng pag-update patungo sa destinasyon.';
$lang['package_dest_dir_failed'] = 'Nabigo ang paglikha ng direktoryo ng destinasyon: %s';
$lang['package_destination_error'] = 'Hindi matukoy ang destinasyon ng pakete.';
$lang['package_download_dir_failed'] = 'Nabigo ang paglikha ng direktoryo ng pag-download: %s';
$lang['package_download_empty'] = 'Nagbalik ng blangkong tugon ang pag-download ng pakete.';
$lang['package_download_request_invalid'] = 'Hindi wastong kahilingan sa pag-download ng pakete.';
$lang['package_extract_failed'] = 'Nabigo ang pag-extract ng ZIP: %s';
$lang['package_invalid_lang_files'] = 'Hindi wastong wika — nawawala ang mga kinakailangang file ng wika ng aplikasyon.';
$lang['package_invalid_lang_structure'] = 'Hindi wastong wika — nawawala ang direktoryo ng admin at/o ci3.';
$lang['package_invalid_missing_info'] = 'Hindi wastong %s: nawawala ang "info.php".';
$lang['package_invalid_module_structure'] = 'Hindi wastong module — nawawala ang mga kinakailangang direktoryo ng config at/o controllers.';
$lang['package_invalid_plugin_boot'] = 'Hindi wastong plugin — nawawala ang "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Hindi wastong plugin — hindi maaaring naglalaman ng mga controller o view ang mga plugin.';
$lang['package_invalid_theme_boot'] = 'Hindi wastong tema — nawawala ang "boot.php".';
$lang['package_invalid_theme_views'] = 'Hindi wastong tema — nawawala ang direktoryo ng mga view.';
$lang['package_no_root_dir'] = 'Walang direktoryong pangkalahatan (root directory) ang pakete.';
$lang['package_not_downloadable'] = 'Hindi maaaring ma-download sa publiko ang pakete.';
$lang['package_not_in_registry'] = 'Hindi available ang pakete sa publikong registry.';
$lang['package_request_invalid'] = 'Hindi wastong kahilingan sa pakete.';
$lang['package_rollback_request_invalid'] = 'Hindi wastong kahilingan sa rollback.';
$lang['package_root_mismatch'] = 'Ang ugat (root) ng arkibo ng pakete ay hindi tumutugma sa %s';
$lang['package_single_root_required'] = 'Dapat naglalaman ang pakete ng eksaktong isang direktoryong root.';
$lang['package_source_error'] = 'Hindi matukoy ang pinagmulan ng pakete.';
$lang['package_system_core_restricted'] = 'Hindi maaaring i-install bilang mga pakete ang mga sangkap ng sistema.';
$lang['package_temp_dir_failed'] = 'Nabigo ang paglikha ng pansamantalang direktoryo (temp): %s';
$lang['package_type_unknown'] = 'Hindi kilalang uri ng pakete.';
$lang['package_update_request_invalid'] = 'Hindi wastong kahilingan sa pag-update ng pakete.';
$lang['package_update_root_mismatch'] = 'Ang ugat (root) ng arkibo ng pag-update ay hindi tumutugma sa %s.';
$lang['package_upload_dir_failed'] = 'Nabigo ang paglikha ng direktoryo ng pag-upload: %s';
$lang['package_url_invalid'] = 'Hindi wastong URL ng distribusyon ng pakete.';
$lang['package_write_failed'] = 'Nabigo ang pagsulat ng pakete sa: %s';
$lang['package_zip_not_found'] = 'Hindi umiiral ang ZIP ng pakete: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'May bagong mga update na available!';
$lang['update_backup_error'] = 'Hindi makagawa ng backup ng kasalukuyang package. Ang update ay nahinto.';
$lang['update_check_disabled'] = 'Ang awtomatikong pag-check ng update ay naka-disable. I-enable ang mga ito upang makita ang mga update.';
$lang['update_check_error'] = 'Hindi maisagawa ang pag-check ng update sa kasalukuyan.';
$lang['update_check_success'] = 'Matagumpay na natapos ang pag-check ng update.';
$lang['update_install_error'] = 'Hindi ma-install ang package. Napanatili ang nakaraang bersyon.';
$lang['update_install_success'] = 'Matagumpay na na-update ang package sa pinakabagong bersyon.';
$lang['update_interval_3days'] = 'Bawat 3 Araw';
$lang['update_interval_biweekly'] = 'Bawat 2 Linggo';
$lang['update_interval_daily'] = 'Araw-araw';
$lang['update_interval_monthly'] = 'Minsan sa Isang Buwan';
$lang['update_interval_weekly'] = 'Minsan sa Isang Linggo';
$lang['update_not_available'] = 'Ang iyong website ay updated na.';
$lang['update_rollback_error'] = 'Hindi maibalik ang nakaraang bersyon. Maaaring kailanganin ang manual na interbensyon.';
$lang['update_rollback_success'] = 'Matagumpay na naibalik ang nakaraang bersyon.';
$lang['updates_available'] = 'Available na mga Update';
$lang['updates_check_now'] = 'Suriin ngayon';
$lang['updates_check_now_confirm'] = 'Sigurado ka bang gusto mong suriin ang mga update ngayon?';
$lang['updates_current_version'] = 'Kasalukuyang bersyon';
$lang['updates_enable'] = 'I-enable ang mga Update';
$lang['updates_last_check'] = 'Huling pagsuri: %s';
$lang['updates_latest_version'] = 'Pinakabagong bersyon';
$lang['updates_next_check'] = 'Susunod na naka-iskedyul na pagsuri: %s';
$lang['updates_previous_version'] = 'Nakaraang bersyon';
$lang['updates_recent'] = 'Kamakailan na Na-update';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Nabigo ang pagharang sa tinukoy na IP address.';
$lang['admin_firewall_ban_success'] = 'Matagumpay na naharang ang IP address.';
$lang['admin_firewall_block_ip'] = 'Harangan ang IP address';
$lang['admin_firewall_delete_confirm'] = 'Sigurado ka ba na gusto mong i-unblock ang mga piniling IP address?';
$lang['admin_firewall_delete_error'] = 'Nabigo ang pag-unblock ng mga piniling IP address.';
$lang['admin_firewall_delete_success'] = 'Matagumpay na na-unblock ang mga piniling IP address.';
$lang['admin_firewall_duration'] = 'Tagal ng pagharang';
$lang['admin_firewall_permanent'] = 'Permanente';
$lang['admin_firewall_reason'] = 'Dahilan ng pagharang';
$lang['admin_firewall_tip'] = 'Tingnan at pamahalaan ang mga IP address na naharang ng firewall dahil sa paulit-ulit na paglabag o kahina-hinalang aktibidad.';

// Settings
$lang['404_ban_duration'] = 'Tagal ng Pag-ban ng 404';
$lang['404_threshold'] = 'Limitasyon sa Pag-atake ng 404';
$lang['uri_ban_duration'] = 'Tagal ng Pag-ban ng URI';
$lang['uri_strike_threshold'] = 'Limitasyon sa Pag-atake ng URI';
