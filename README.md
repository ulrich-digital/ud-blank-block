# UD Block: Blank

Ein minimaler Ausgangspunkt für neue WordPress-Blöcke.
Dieses Plugin dient als technische Grundlage für alle UD-Block-Plugins und enthält eine vollständig vorbereitete Build- und Plugin-Struktur ohne Funktionslogik.

## Funktionen

-   Vollständig vorbereitete Block-Struktur mit block.json
-   Einheitliche UD-Plugin-Struktur (PHP, JS, SCSS, Assets, Webpack)
-   Editor- und Frontend-Dateien sind klar getrennt
-   Prepared Webpack-Build mit expliziten Output-Dateien (editor-script.js, frontend-script.js usw.)
-   Minimale Render-Callback-Struktur
-   Keine Abhängigkeit zu anderen UD-Plugins

## Verzeichnisstruktur

```text
ud-blank-block/
├─ README.md
├─ assets/
├─ block.json
├─ includes/
│  ├─ block-register.php
│  ├─ enqueue.php
│  ├─ helpers.php
│  └─ render.php
├─ package.json
├─ src/
│  ├─ css/
│  │  ├─ editor.scss
│  │  └─ frontend.scss
│  ├─ js/
│  │  ├─ edit.js
│  │  ├─ editor.js
│  │  ├─ frontend.js
│  │  ├─ save.js
│  │  └─ utils/
├─ ud-blank-block.php
├─ verzeichnisliste.sh
└─ webpack.config.js

```

## Installation

-   Plugin-Ordner in /wp-content/plugins/ hochladen.
-   In WordPress unter Plugins aktivieren.
-   Der Block erscheint im Editor unter „UD Blocks“.

## Anforderungen

-   WordPress 6.5+
-   PHP 8.0+
-   Node.js für den Build-Prozess

## Build

```
npm install
npm run build
npm run start
```

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later
https://www.gnu.org/licenses/gpl-2.0.html
