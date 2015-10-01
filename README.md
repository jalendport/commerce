# Craft Commerce

This README is designed to be consumed by developers of Craft Commerce,
not end users.

# Code License
Copyright 2015 Pixel & Tonic, Inc. All rights reserved. See LICENSE.md

# Documentation Generation

To generate a phpdoc documentation:

1. `cd docs/phpdoc`
2. `curl -O http://get.sensiolabs.org/sami.phar`
3. `php sami.phar update config.php -v`

Then open the `build/index.html` file in the browser. In chrome the search sidebar will not
show up due to security issues for local files. Use firefox. Chrome does not have this issue when
served from a webserver.

## Code Hint Helpers for PHP Storm

Add this code block into the phpdoc of Craft's WebApp.php class.

This will enable PHP Storm IDE features for services like `craft()->commerce_product->method()`

```php
* @property Commerce_AddressesService        $commerce_addresses
* @property Commerce_CartService             $commerce_cart
* @property Commerce_CountriesService        $commerce_countries
* @property Commerce_CustomersService        $commerce_customers
* @property Commerce_DiscountsService        $commerce_discounts
* @property Commerce_EmailsService           $commerce_emails
* @property Commerce_GatewaysService         $commerce_gateways
* @property Commerce_LineItemsService        $commerce_lineItems
* @property Commerce_OrderAdjustmentsService $commerce_orderAdjustments
* @property Commerce_OrderHistoriesService   $commerce_orderHistories
* @property Commerce_OrdersService           $commerce_orders
* @property Commerce_OrderSettingsService    $commerce_orderSettings
* @property Commerce_OrderStatusesService    $commerce_orderStatuses
* @property Commerce_PaymentMethodsService   $commerce_paymentMethods
* @property Commerce_PaymentsService         $commerce_payments
* @property Commerce_ProductsService         $commerce_products
* @property Commerce_ProductTypesService     $commerce_productTypes
* @property Commerce_SalesService            $commerce_sales
* @property Commerce_SeedService             $commerce_seed
* @property Commerce_SettingsService         $commerce_settings
* @property Commerce_ShippingMethodsService  $commerce_shippingMethods
* @property Commerce_ShippingRulesService    $commerce_shippingRules
* @property Commerce_StatesService           $commerce_states
* @property Commerce_TaxCategoriesService    $commerce_taxCategories
* @property Commerce_TaxRatesService         $commerce_taxRates
* @property Commerce_TaxZonesService         $commerce_taxZones
* @property Commerce_TransactionsService     $commerce_transactions
* @property Commerce_VariantsService         $commerce_variants
```
