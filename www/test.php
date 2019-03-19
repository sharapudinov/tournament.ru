<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
\Bitrix\Main\UI\Extension::load("ui.progressbar");
\Bitrix\Main\UI\Extension::load("ui.buttons");

?>

    <div id="container"></div>

    <script>
        (function() {
            var button = new BX.UI.Button({ text: "Привет, кнопка!" });
            var container = document.getElementById("container");
            button.renderTo(container);
        })();
    </script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>