<?php 
/**
	Admin Page Framework v3.8.21 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/post-status-broadcaster>
	Copyright (c) 2013-2020, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PostStatusBroadcaster_AdminPageFramework_FieldType_section_title extends PostStatusBroadcaster_AdminPageFramework_FieldType_text {
    public $aFieldTypeSlugs = array('section_title',);
    protected $aDefaultKeys = array('label_min_width' => 30, 'attributes' => array('size' => 20, 'maxlength' => 100,),);
    protected function getStyles() {
        return ".post-status-broadcaster-section-tab .post-status-broadcaster-field-section_title {padding: 0.5em;} .post-status-broadcaster-section-tab .post-status-broadcaster-field-section_title .post-status-broadcaster-input-label-string { vertical-align: middle; margin-left: 0.2em;}.post-status-broadcaster-section-tab .post-status-broadcaster-fields {display: inline-block;} .post-status-broadcaster-field.post-status-broadcaster-field-section_title {float: none;} .post-status-broadcaster-field.post-status-broadcaster-field-section_title input {background-color: #fff;color: #333;border-color: #ddd;box-shadow: inset 0 1px 2px rgba(0,0,0,.07);border-width: 1px;border-style: solid;outline: 0;box-sizing: border-box;vertical-align: middle;}";
    }
    protected function getField($aField) {
        $aField['attributes'] = array('type' => 'text') + $aField['attributes'];
        return parent::getField($aField);
    }
    }
    