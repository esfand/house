<?php

/** charge l'autoloader pour les tests * */
if(! defined("ROOT")):
    define("ROOT", dirname(__DIR__));
endif;

require(__DIR__ . "/../vendor/autoload.php");

/**
 * crée une application et configure celle-ci.
 * @return Silex\Application
 */
function createApplication() {
    putenv("MARKME_DB_DRIVER=pdo_sqlite");
    $schema = file_get_contents(ROOT . '/Database/schema.sqlite.sql');
    $app = require ROOT . '/App/application.php';
    $app["debug"] = true;
    $app["exception_handler"]->disable();
    $app["session.test"] = true;
    $app["db"]->exec($schema);
    return $app;
}
