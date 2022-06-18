<?php
$sayfalar = array("yorum", "doctype", "a", "abbr", "audio", "body", "br", "button", "datalist", "div", "footer", "form", "baslik", "head", "html", "iframe", "img", "input", "label", "li", "link", "meta", "option", "ol", "p", "script", "select", "span", "table", "textarea", "title", "ul");
$syf_ad = array("&lt;!-- &hellip; --&gt;", "&lt;!DOCTYPE&gt;", "&lt;a&gt;", "&lt;abbr&gt;", "&lt;audio&gt;", "&lt;body&gt;", "&lt;br&gt;", "&lt;button&gt;", "&lt;datalist&gt;", "&lt;div&gt;", "&lt;footer&gt;", "&lt;form&gt;", "&lt;h1 ... h6&gt;", "&lt;head&gt;", "&lt;html&gt;", "&lt;iframe&gt;", "&lt;img&gt;", "&lt;input&gt;", "&lt;label&gt;", "&lt;li&gt;", "&lt;link&gt;", "&lt;meta&gt;", "&lt;option&gt;", "&lt;ol&gt;", "&lt;p&gt;", "&lt;script&gt;", "&lt;select&gt;", "&lt;span&gt;", "&lt;table&gt;", "&lt;textarea&gt;", "&lt;title&gt;", "&lt;ul&gt;");

for ($x = 0; $x < count($sayfalar); $x++) {
    echo '<a href="' . $sayfalar[$x] . '.php">' . $syf_ad[$x] . '</a>';
}
