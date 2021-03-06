<?php

require_once 'voice.civix.php';

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function voice_civicrm_config(&$config) {
  _voice_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function voice_civicrm_xmlMenu(&$files) {
  _voice_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * It create all the tables and calls civix install function
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function voice_civicrm_install()
{

    foreach (glob(__DIR__ . '/SQL/*_install.sql') as $file)
    {
        CRM_Utils_File::sourceSQLFile(CIVICRM_DSN, $file);
    }

    return _voice_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * It drops all the tables and calls civix uninstall function
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function voice_civicrm_uninstall() {

    foreach (glob(__DIR__ . '/SQL/*_uninstall.sql') as $file)
    {
        CRM_Utils_File::sourceSQLFile(CIVICRM_DSN, $file);
    }

    return _voice_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function voice_civicrm_enable() {
  return _voice_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function voice_civicrm_disable() {
  return _voice_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function voice_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _voice_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function voice_civicrm_managed(&$entities) {
  return _voice_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function voice_civicrm_caseTypes(&$caseTypes) {
  _voice_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function voice_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _voice_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
