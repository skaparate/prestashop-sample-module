# PrestaShop Sample Module

The sole idea of this repository is to serve as a sample module for people looking to override Symfony routes and/or controllers in PrestaShop.

## How to Use

Download the `release` code and copy it to the `prestashop/modules` folder, then go to `Back Office -> Modules -> Module Catalog` search for 'sk_testmoddule` and activate it. After that, navigate to `/adminXXXX/index.php/sell/orders/orders/` and it should work.

## Cloning the Repository

If you plan to use this module as a template, do the following:

1. Clone the repository into your modules folder: `git clone https://github.com/skaparate/prestashop-sample-module.git path_to_prestashop/modules sk_testmodule`
2. Install the dependencies:

   ```
   cd path_to_prestashop/modules/sk_testmodule
   composer install
   ```
3. Enable the module by running this command: `php path_to_prestashop/bin/console prestashop:module install sk_testmodule`.
3. You should be able to see it working on your backoffice `/adminXXXX/index.php/sell/orders/orders/`.
