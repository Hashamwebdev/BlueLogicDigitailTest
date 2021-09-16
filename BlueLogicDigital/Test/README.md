# Mage2 Module BlueLogicDigital Test

    ``bluelogicdigital/module-test``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Blue Logic Digital Test

### Type 1: Zip file

 - Unzip the zip file in `app/code/BlueLogicDigital`
 - Enable the module by running `php bin/magento module:enable BlueLogicDigital_Test`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require bluelogicdigital/module-test`
 - enable the module by running `php bin/magento module:enable BlueLogicDigital_Test`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Show Disclaimer (test/general/show_disclaimer)

 - Product Disclaimer (test/general/product_disclaimer)


## Specifications

 - Block
	- DisplayDisclaimer > displaydisclaimer.phtml

 - Model
	- BLD_products


## Attributes



