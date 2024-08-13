<?php

// Import the ComponentRegistrar class from the Magento\Framework\Component namespace
use Magento\Framework\Component\ComponentRegistrar;

// Register a new module with Magento
ComponentRegistrar::register(
    // Specify that we're registering a module
    ComponentRegistrar::MODULE,
    
    // The name of the module we're registering
    'Ecommerce_CatalogDisplay',
    
    // The directory where the module is located
    __DIR__
);