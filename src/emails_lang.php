<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'May available na mga update sa system';
$lang['emails_updates_available_message'] = <<<EOT
Kumusta,

May mga bagong update sa system na natukoy para sa {site_anchor}.

Maaaring kasama sa mga update na ito ang mga pag-aayos sa seguridad, mga pagpapabuti sa performance, o mga bagong feature.
Inirerekomenda namin na suriin ang mga ito sa lalong madaling panahon.

Maaari mong suriin at pamahalaan ang mga available na update mula sa admin dashboard:
{link}

Kung nasuri o nailapat mo na ang mga update, wala nang karagdagang aksyon na kinakailangan.

Ito ay isang awtomatikong mensahe ng system na ipinadala ni {site_name}.
Mangyaring huwag tumugon sa email na ito.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Pag-activate ng account';
$lang['emails_account_activation_request_message'] = <<<EOT
Kamusta {name},

Salamat sa pagrehistro sa {site_anchor}. Ang iyong account ay nilikha at kailangang i-activate bago mo ito magamit.

Upang i-activate ang iyong account, i-klik ang sumusunod na link o kopyahin at i-paste ito sa iyong browser:
{link}

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Bagong link ng activation';
$lang['emails_account_activation_resend_message'] = <<<EOT
Kamusta {name},

Kamakailan ay hiniling mo ang isang bagong activation link sa {site_anchor} dahil hindi aktibo ang iyong account.
Upang i-activate ang iyong account, i-klik ang sumusunod na link o kopyahin at i-paste ito sa iyong browser:
{link}

Kung hindi mo ito hiniling, walang karagdagang aksyon ang kailangan.

Ang aksyong ito ay hiningi mula sa IP address na ito: {ip_link}.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Na-activate na ang account';
$lang['emails_account_activation_success_message'] = <<<EOT
Kamusta {name},

Ang iyong account sa {site_anchor} ay matagumpay na na-activate. Maaari ka nang <a href="{login_url}" target="_blank" rel="noopener">mag-login</a> kahit kailan mo gusto.

Sana ay masiyahan ka sa iyong paglagi, mangyaring tanggapin ang aming mainam na pagbati.

-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Naghihintay ng approval ang account';
$lang['emails_account_approval_pending_message'] = <<<EOT
Kamusta {name},

Salamat sa iyong pagsali sa amin sa {site_anchor}. Ang iyong account ay nilikha ngunit kailangan ng aprubyal ng site admin bago ito maging aktibo.
Ito'y aming ipinapatawad na mahalagang hakbang, ngunit ito ay para lamang sa layuning panseguridad.

Makakatanggap ka ng email na kumpirmasyon kapag ang iyong account ay naaprubahan na.

Sana'y masiyahan ka sa iyong paglagi, mangyaring tanggapin ang aming mainam na pagbati.

-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Naaprubahan ang account';
$lang['emails_account_approval_success_message'] = <<<EOT
Kamusta {name},

Magandang balita! Ang iyong account sa {site_anchor} ay aprubado na.

Maaari ka nang mag-login at magsimulang gamitin ang iyong account agad:
{link}

Saya ay masaya na kasama ka na amin.

-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Naibalik ang account';
$lang['emails_account_restored_message'] = <<<EOT
Kamusta {name},

Ang email na ito ay kumokumpirma na ang iyong account sa {site_anchor} ay matagumpay na na-restore.

Maligayong pagbalik! Sana'y masiyahan ka sa iyong paglagi ngayong panahon.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Maligayang pagdating sa {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Kamusta {name},

Karamihan sa mga tao ay may talagang mahahabang welcome email pagkatapos mong mag-register sa kanilang site.

Magandang balita: hindi kami katulad ng karamihan sa mga tao.
Ngunit gusto naming paalamin kang welcome at magpasalamat sa iyo sa pagsali sa {site_anchor}.

Sana'y masiyahan ka sa iyong paglagi. Maraming salamat,

-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Kahilingan sa pagpapalit ng email';
$lang['emails_email_change_request_message'] = <<<EOT
Kamusta {name},

Natanggap mo itong email dahil natanggap namin ang isang request na baguhin ang email address para sa iyong account sa {site_anchor}.

I-klik ang sumusunod na link o kopyahin at i-paste ito sa iyong browser kung gusto mong magpatuloy:
{link}

Kung hindi mo hiniling ang pagbabago ng email address, walang karagdagang aksyon ang kailangan.

Ang aksyong ito ay hiningi mula sa IP address na ito: {ip_link}.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Nabago ang email address';
$lang['emails_email_change_success_message'] = <<<EOT
Kamusta {name},

Ang email na ito ay kumokumpirma na ang iyong email address na ginamit sa {site_anchor} ay matagumpay na nabago.

Kung hindi mo ginawa itong aksyon, mangyaring makipag-ugnayan sa amin sa lalong madaling panahon upang malutas itong problema.

Ang aksyong ito ay isinagawa mula sa IP address na ito: {ip_link}.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Babala sa nabigong pag-login';
$lang['emails_login_alert_failure_message'] = <<<EOT
Kamusta {name},

May isang taong nagsubok na mag-login sa iyong {site_name} account gamit ang maling password.

Petsa sa server: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Kung hindi ka iyon, huwag mag-alala - ang login attempt ay nabigo.

Kung ikaw iyon ngunit hindi mo maalala ang iyong password, i-klik ang link sa ibaba para ibalik ito:
{reset_link}

Kung mayroon kang problema sa pag-login, makipag-ugnayan sa aming team o humingi ng one-time login link.

-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Abiso sa matagumpay na pag-login';
$lang['emails_login_alert_success_message'] = <<<EOT
Kamusta {name},

Ipinapadala namin sa iyo itong email matapos ang matagumpay na login sa iyong {site_name} account.

Petsa sa server: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Kung ikaw ito, maaari mong ligtas na balewalain itong email.

Kung hindi ka iyon, palitan mo agad ang iyong password upang protektahan ang iyong account.

Makipag-ugnayan sa aming suporta kung kailangan mo ng tulong.

-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Mabilis na link ng pag-login';
$lang['emails_login_magic_link_message'] = <<<EOT
Kamusta {name},

Ito ang iyong magic link para mag-login sa iyong {site_name} account.

I-klik ang link sa ibaba para mag-login:
{link}

Eexpire ang link: {time}

Kung hindi mo hiniling itong link, maaari mong balewalain itong email.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Two-factor authentication';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Kamusta {name},

Ang iyong two-factor authentication code ay: <strong>{code}</strong>

Maaari mo palaging i-disable ang two-factor authentication sa mga setting ng iyong account.

Ang aksyong ito ay isinagawa mula sa IP address na ito: {ip_link}.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Kahilingan sa pag-reset ng password';
$lang['emails_password_change_request_message'] = <<<EOT
Kamusta {name},

Natanggap mo itong email dahil natanggap namin ang isang request na i-reset ang iyong password para sa iyong {site_name} account.

I-klik ang sumusunod na link o kopyahin at i-paste ito sa iyong browser kung gusto mong magpatuloy:
{link}

Kung hindi mo hiniling ang pag-reset ng password, walang karagdagang aksyon ang kailangan.

Ang aksyong ito ay hiningi mula sa IP address na ito: {ip_link}.

Maraming salamat,
-- Ang {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Matagumpay na nabago ang password';
$lang['emails_password_change_success_message'] = <<<EOT
Kamusta {name},

Ang email na ito ay kumokumpirma na ang iyong password sa {site_name} ay matagumpay na nabago. Maaari ka nang <a href="{login_url}" target="_blank" rel="noopener">mag-login</a> gamit ang iyong bagong password.

Kung hindi mo ginawa itong aksyon, mangyaring makipag-ugnayan sa amin sa lalong madaling panahon upang malutas itong problema.

Ang aksyong ito ay isinagawa mula sa IP address na ito: {ip_link}.

Maraming salamat,
-- Ang {site_name} Team.
EOT;
