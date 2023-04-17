<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Googlemap 0.8.9

Bädda in Google-karta.

<p align="center"><img src="googlemap-screenshot.png?raw=true" alt="Skärmdump"></p>

## Hur man installerar ett tillägg

[Ladda ner ZIP-filen](https://github.com/annaesvensson/yellow-googlemap/archive/main.zip) och kopiera den till din `system/extensions` mapp. [Läs mer om tillägg](https://github.com/annaesvensson/yellow-update/tree/main/README-sv.md).

## Hur man bäddar in en karta

Skapa en `[googlemap]` förkortning.

Följande argument är tillgängliga, alla utom det första argumentet är valfria:

`Address` = text du anger på [Google-Maps](https://maps.google.com/), placera flera ord i citattecken  
`Zoom` = zoomvärde, standardzoom är 15  
`Style` = kartstil, t.ex. `left`, `center`, `right`  
`Width` = kartbredd, pixel eller procent  
`Height` = karthöjd, pixel eller procent  

Du bör veta att tjänsteleverantören samlar in personuppgifter och använder cookies.

## Exempel

Bädda in en karta, olika adresser:

    [googlemap Stockholm]
    [googlemap "Malmö, Gamla staden"]
    [googlemap "Bredgatan 1, Lund, Sweden"]

Bädda in en karta, olika GPS-koordinater:

    [googlemap "59.32820, 18.07007"]
    [googlemap "55.60490, 12.99833"]
    [googlemap "55.70647, 13.19246"]

Bädda in en karta, olika zoomvärdar:

    [googlemap Stockholm 5]
    [googlemap Stockholm 10]
    [googlemap Stockholm 15]

Bädda in en karta, olika storlekar:

    [googlemap Stockholm 15 right 50%]
    [googlemap Stockholm 15 right 320 200]
    [googlemap Stockholm 15 right 640 400]

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`GooglemapZoom` = zoomvärde  
`GooglemapStyle` = kartstil, t.ex. `flexible`  

## Tack

Detta tillägg använder [Google-Maps](https://maps.google.com/). Tack för den kostnadsfria tjänsten.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
