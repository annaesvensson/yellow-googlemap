<?php
// Googlemap extension, https://github.com/annaesvensson/yellow-googlemap

class YellowGooglemap {
    const VERSION = "0.8.10";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("googlemapZoom", "15");
        $this->yellow->system->setDefault("googlemapStyle", "flexible");
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="googlemap" && ($type=="block" || $type=="inline")) {
            list($address, $zoom, $style, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($zoom)) $zoom = $this->yellow->system->get("googlemapZoom");
            if (is_string_empty($style)) $style = $this->yellow->system->get("googlemapStyle");
            if (is_string_empty($height)) $height = $width;
            $width = $this->convertValueAndUnit($width, 640);
            $height = $this->convertValueAndUnit($height, 360);
            $language = $page->get("language");
            $output = "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<iframe src=\"https://maps.google.com/maps?q=".rawurlencode($address)."&amp;ie=UTF8&amp;t=m&amp;z=".rawurlencode($zoom)."&amp;hl=$language&amp;iwloc=near&amp;num=1&amp;output=embed\" frameborder=\"0\"";
            if ($width && $height) $output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
            $output .= "></iframe></div>";
        }
        return $output;
    }
    
    // Return value according to unit
    public function convertValueAndUnit($text, $valueBase) {
        $value = $unit = "";
        if (preg_match("/([\d\.]+)(\S*)/", $text, $matches)) {
            $value = $matches[1];
            $unit = $matches[2];
            if ($unit=="%") $value = $valueBase * $value / 100;
        }
        return intval($value);
    }
}
