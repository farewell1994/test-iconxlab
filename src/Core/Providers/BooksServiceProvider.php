<?php

namespace Test\Core\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**This class returns services
 *
 * Class ServiceProvider
 * @package Test\Core
 */
class BooksServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['Test\Models\Books'] = function ($c) {
            return new \Test\Models\Books(new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS));
        };
        return $pimple;
    }
}
