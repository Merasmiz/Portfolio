<?php 
/**
	Admin Page Framework v3.8.21 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/post-status-broadcaster>
	Copyright (c) 2013-2020, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PostStatusBroadcaster_AdminPageFramework_Form_View___CSS_Field extends PostStatusBroadcaster_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getFormFieldRules();
    }
    static private function _getFormFieldRules() {
        return "td.post-status-broadcaster-field-td-no-title {padding-left: 0;padding-right: 0;}.post-status-broadcaster-fields {display: table; width: 100%;table-layout: fixed;}.post-status-broadcaster-field input[type='number'] {text-align: right;} .post-status-broadcaster-fields .disabled,.post-status-broadcaster-fields .disabled input,.post-status-broadcaster-fields .disabled textarea,.post-status-broadcaster-fields .disabled select,.post-status-broadcaster-fields .disabled option {color: #BBB;}.post-status-broadcaster-fields hr {border: 0; height: 0;border-top: 1px solid #dfdfdf; }.post-status-broadcaster-fields .delimiter {display: inline;}.post-status-broadcaster-fields-description {margin-bottom: 0;}.post-status-broadcaster-field {float: left;clear: both;display: inline-block;margin: 1px 0;}.post-status-broadcaster-field label {display: inline-block; width: 100%;}@media screen and (max-width: 782px) {.form-table fieldset > label {display: inline-block;}}.post-status-broadcaster-field .post-status-broadcaster-input-label-container {margin-bottom: 0.25em;}@media only screen and ( max-width: 780px ) { .post-status-broadcaster-field .post-status-broadcaster-input-label-container {margin-top: 0.5em; margin-bottom: 0.5em;}} .post-status-broadcaster-field .post-status-broadcaster-input-label-string {padding-right: 1em; vertical-align: middle; display: inline-block; }.post-status-broadcaster-field .post-status-broadcaster-input-button-container {padding-right: 1em; }.post-status-broadcaster-field .post-status-broadcaster-input-container {display: inline-block;vertical-align: middle;}.post-status-broadcaster-field-image .post-status-broadcaster-input-label-container { vertical-align: middle;}.post-status-broadcaster-field .post-status-broadcaster-input-label-container {display: inline-block; vertical-align: middle; } .repeatable .post-status-broadcaster-field {clear: both;display: block;}.post-status-broadcaster-repeatable-field-buttons {float: right; margin: 0.1em 0 0.5em 0.3em;vertical-align: middle;}.post-status-broadcaster-repeatable-field-buttons .repeatable-field-button {margin: 0 0.1em;font-weight: normal;vertical-align: middle;text-align: center;}@media only screen and (max-width: 960px) {.post-status-broadcaster-repeatable-field-buttons {margin-top: 0;}}.post-status-broadcaster-sections.sortable-section > .post-status-broadcaster-section,.sortable > .post-status-broadcaster-field {clear: both;float: left;display: inline-block;padding: 1em 1.32em 1em;margin: 1px 0 0 0;border-top-width: 1px;border-bottom-width: 1px;border-bottom-style: solid;-webkit-user-select: none;-moz-user-select: none;user-select: none; text-shadow: #fff 0 1px 0;-webkit-box-shadow: 0 1px 0 #fff;box-shadow: 0 1px 0 #fff;-webkit-box-shadow: inset 0 1px 0 #fff;box-shadow: inset 0 1px 0 #fff;-webkit-border-radius: 3px;border-radius: 3px;background: #f1f1f1;background-image: -webkit-gradient(linear, left bottom, left top, from(#ececec), to(#f9f9f9));background-image: -webkit-linear-gradient(bottom, #ececec, #f9f9f9);background-image: -moz-linear-gradient(bottom, #ececec, #f9f9f9);background-image: -o-linear-gradient(bottom, #ececec, #f9f9f9);background-image: linear-gradient(to top, #ececec, #f9f9f9);border: 1px solid #CCC;background: #F6F6F6;} .post-status-broadcaster-fields.sortable {margin-bottom: 1.2em; } .post-status-broadcaster-field .button.button-small {width: auto;} .font-lighter {font-weight: lighter;} .post-status-broadcaster-field .button.button-small.dashicons {font-size: 1.2em;padding-left: 0.2em;padding-right: 0.22em;min-width: 1em; }@media screen and (max-width: 782px) {.post-status-broadcaster-field .button.button-small.dashicons {min-width: 1.8em; }}.post-status-broadcaster-field .button.button-small.dashicons:before {position: relative;top: 7.2%;}@media screen and (max-width: 782px) {.post-status-broadcaster-field .button.button-small.dashicons:before {top: 8.2%;}}.post-status-broadcaster-field-title {font-weight: 600;min-width: 80px;margin-right: 1em;}.post-status-broadcaster-fieldset {font-weight: normal;}.post-status-broadcaster-input-label-container,.post-status-broadcaster-input-label-string{min-width: 140px;}";
    }
    protected function _getVersionSpecific() {
        $_sCSSRules = '';
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".post-status-broadcaster-field .remove_value.button.button-small {line-height: 1.5em; }";
        }
        if (version_compare($GLOBALS['wp_version'], '3.8', '>=')) {
            $_sCSSRules.= ".post-status-broadcaster-repeatable-field-buttons {margin: 2px 0 0 0.3em;}.post-status-broadcaster-repeatable-field-buttons.disabled > .repeatable-field-button {color: #edd;border-color: #edd;} @media screen and ( max-width: 782px ) {.post-status-broadcaster-fieldset {overflow-x: hidden;}}";
        }
        return $_sCSSRules;
    }
    }
    