<?php
require 'core/FrontController.php';

/**
 * @var FrontController $frontController - létrehozunk egy $frontController objektumot, amivel meghívjuk az osztály egyetlen metódusát
 * A startKernel() metódus hívásával az index.php fájlba beérkező HTTP requestek mindegyikét a FrontController $frontController objektum fogja fogadni.
 * Megállpítja a böngészőből a szerver irányába érkező request típúsát, majd megkeresi a megfelelő Controller osztályt,
 * illetve az URL-ben specifikált vezérlő műveletet, aminek ha szükséges átadja az adatokat, ameiket a request tartalmaz.
**/

$frontController = new FrontController();
$frontController->run();
