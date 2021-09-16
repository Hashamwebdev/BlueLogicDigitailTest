# BlueLogicDigitailTest

In order to run this module, first you have to clone the repository

- After that you have to copy & paste the package to your magento repository app/code folder like

`Magento_root/app/code/{copy paste here}
`

- After that you have to run the setup upgrade & deployment commands of magento & also clean and flush cache

`php bin/magento setup:upgrade`
\
`php bin/magento setup:di:compile`
\
`php bin/magento setup:static-content:deploy -f`
\
`php bin/magento cache:flush`
\
`php bin/magento cache:clean`

