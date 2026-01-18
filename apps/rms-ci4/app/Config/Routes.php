<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */

$localHost = 'radar-ms.local';
$prodHost = 'radar-ms.com';
$adminLocalHost = 'admin.radar-ms.local';
$adminProdHost = 'admin.radar-ms.com';
$currentHost = '';
$currentAdminHost = '';

if (ENVIRONMENT === 'production') {
    $currentHost = $prodHost;
    $currentAdminHost = $adminProdHost;
} else {
    // Default to local host if HTTP_HOST is not set (e.g., during CLI execution)
    $currentHost = $localHost;
    $currentAdminHost = $adminLocalHost;
}

// =======================================================
// 1️⃣ Redirect /admin untuk semua akses ke domain utama
// =======================================================
$routes->get('admin/', function() {
    return redirect()->to(site_url()); // redirect ke root domain utama
});

// =======================================================
// 2️⃣ Routes untuk domain utama: radar-ms.com
// =======================================================
$routes->group('', ['hostname' => $currentHost], function($routes) {
// $routes->group('', ['hostname' => 'radar-ms.local'], function($routes) {
    // Homepage normal
    // =======================================================
    $routes->get('/', 'Home::index'); 
    
    // Redirect /admin di subdomain admin juga ke domain utama
    // =======================================================
    $routes->get('admin', function() {
        return redirect()->to(site_url()); // redirect ke root domain utama
    });
    $routes->get('about', 'Home::about');
    $routes->get('maritime-services', 'Home::maritime_services');
    $routes->get('marine-outfitting', 'Home::marine_outfitting');
    $routes->get('services', 'Home::services');
    $routes->get('customer-and-partner', 'Home::customer_and_partner');
    $routes->get('documentation', 'Home::documentation');
    $routes->get('contact', 'Home::contact');
    
    // Update product click count
    $routes->post('product/click', 'Admin\ProductController::incrementClick');

});

// =======================================================
// 3️⃣ Routes untuk subdomain admin: admin.radar-ms.com
// =======================================================
$routes->group('', ['hostname' => $currentAdminHost], function($routes) {
// $routes->group('', ['hostname' => 'admin.radar-ms.com'], function($routes) {

    // Auth admin
    $routes->get('login', 'Admin\Auth::index');
    $routes->post('login', 'Admin\Auth::login');
    $routes->get('logout', 'Admin\Auth::logout');

    // =======================================================
    // Redirect /admin di subdomain admin juga ke domain utama
    // =======================================================
    $routes->get('admin', function() {
        return redirect()->to(site_url()); // redirect ke root domain utama
    });

    // Protected routes (harus login)
    $routes->group('', ['filter' => 'auth', 'namespace' => 'App\Controllers\Admin'], function($routes) {
        // Dashboard/Home -> Redirect to product view
        $routes->get('/', 'ProductController::index');
        
        // Product routes
        $routes->group('product', function($routes) {
            $routes->get('/', 'ProductController::index'); 
            $routes->get('new', 'ProductController::new'); 
            $routes->post('save', 'ProductController::save');
            $routes->get('edit/(:num)', 'ProductController::edit/$1');
            $routes->post('update/(:num)', 'ProductController::update/$1');
            $routes->get('delete/(:num)', 'ProductController::delete/$1');
            $routes->get('search', 'ProductController::search');
            $routes->post('reorder', 'ProductController::reorder');
        });
        
        // Documentation (image/video) routes
        $routes->group('documentation', function($routes) {
            $routes->get('/', 'DocumentationController::index');        // List documents
            $routes->post('upload', 'DocumentationController::upload'); // Handle upload
            $routes->post('reorder', 'DocumentationController::reorder'); // Drag & drop order
            $routes->post('delete/(:num)', 'DocumentationController::delete/$1'); // Delete document
        });
    });
});

