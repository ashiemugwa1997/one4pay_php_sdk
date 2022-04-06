
PHP Sdk for One4Pay API
## Installation

You can install the package via composer:

```bash
composer require one4pay_payment_gateway/payment
```

### Getting Started
Import the library into your project/application
```php
require_once 'path/to/vendor/autoload.php';
use one4pay_payment_gateway/payment ```

making a payment
#### usage 
make payment

```php
    payment($merchantId,$currencyCode,$cardDetails,$reference,$failureUrl,$returnUrl,$originatingApplicationName
        ,$amount,$paymentMethod,$apiMethod,$sourceType)```
        
###### get available currencies
```
getAvailableCurrencies()
```
########authenticate
```php
 authentication($username,$password)```
