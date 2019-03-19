<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "#SITE_DIR#/#IBLOCK_CODE#/",
	"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
	"DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#CODE#/",
	"IBLOCK_TYPE" => "entities",
	"IBLOCK_ID" => "12",
	"DEPTH_LEVEL" => "1",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);

?>