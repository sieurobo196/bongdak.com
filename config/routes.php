<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    // examples route and agr
    $routes->connect('/', ['controller' => 'Articles', 'action' => 'index']);
    $routes->connect('/:type', ['controller' => 'Articles', 'action' => 'single'], ['type' => '[a-z0-9-]+', 'pass' => ['type']]);
    $routes->connect('/:type/*', ['controller' => 'Articles', 'action' => 'view'], ['type' => '[a-z0-9-]+', 'pass' => ['type']]);
    $routes->connect('/add', ['controller' => 'Articles', 'action' => 'add']);
    $routes->connect('/edit/:id', ['controller' => 'Articles', 'action' => 'edit'], ['id' => '\d+', 'pass' => ['id']]);
    $routes->connect('/delete/:id', ['controller' => 'Articles', 'action' => 'delete'], ['id' => '\d+', 'pass' => ['id']]);
    $routes->connect('/rank/*', ['controller' => 'Ranks', 'action' => 'index']);
    $routes->connect('/editRecordRank/*', ['controller' => 'Ranks', 'action' => 'edit']);
    $routes->connect('/schedule/*', ['controller' => 'Schedules', 'action' => 'index']);
    $routes->connect('/editRecordSchedule/*', ['controller' => 'Schedules', 'action' => 'edit']);
    $routes->connect('/addRecordSchedule', ['controller' => 'Schedules', 'action' => 'add']);
    $routes->connect('/topgoal/*', ['controller' => 'Topgoals', 'action' => 'index']);
    $routes->connect('/editTopgoal/*', ['controller' => 'Topgoals', 'action' => 'edit']);
    $routes->connect('/addTopgoal', ['controller' => 'Topgoals', 'action' => 'add']);
    $routes->connect('/:pagegination/:index', ['controller' => 'Articles', 'action' => 'single'], ['pagegination' => '[a-z-]', 'pass' => ['pagegination']], ['index' => '[0-9]', 'pass' => ['index']]);

    // example working with database
    $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('/users', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/users/edit/*', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('/users/delete/*', ['controller' => 'Users', 'action' => 'edit']);


    // example authenticate 
    $routes->connect('/auth', ['controller' => 'Authexs', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Authexs', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Authexs', 'action' => 'logout']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
//    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
