<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Googlemap 

Embed Google map.

<p align="center"><img src="googlemap-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/annaesvensson/yellow-googlemap/archive/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to embed a map

Create a `[googlemap]` shortcut.

The following arguments are available, all but the first argument are optional:

`Address` = text you enter on [Google Maps](https://maps.google.com/), wrap multiple words into quotes  
`Zoom` = zoom value, the default zoom is 15  
`Style` = map style, e.g. `left`, `center`, `right`  
`Width` = map width, pixel or percent  
`Height` = map height, pixel or percent  

You should know that the service provider collects personal data and uses cookies.

## Examples

Embedding a map, different addresses:

    [googlemap Stockholm]
    [googlemap "Malmö, Gamla staden"]
    [googlemap "Bredgatan 1, Lund, Sweden"]

Embedding a map, different GPS coordinates:

    [googlemap "59.32820, 18.07007"]
    [googlemap "55.60490, 12.99833"]
    [googlemap "55.70647, 13.19246"]

Embedding a map, different zoom values:

    [googlemap Stockholm 5]
    [googlemap Stockholm 10]
    [googlemap Stockholm 15]

Embedding a map, different sizes:

    [googlemap Stockholm 15 right 50%]
    [googlemap Stockholm 15 right 320 200]
    [googlemap Stockholm 15 right 640 400]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`GooglemapZoom` = zoom value  
`GooglemapStyle` = map style, e.g. `flexible`  

## Acknowledgements

This extension uses [Google Maps](https://maps.google.com/). Thank you for the free service.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
