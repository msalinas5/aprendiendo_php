<?php

    $componentes_url = parse_url($_SERVER["REQUEST_URI"]);

    $ruta = $componentes_url['path'];

    $partes_ruta = explode("/",$ruta);