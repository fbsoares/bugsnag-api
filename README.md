# Bugsnag Data Access PHP Client

## Installation

```json
"require": {
    "outdare/bugsnag-api":"1.0.1"
},
```

## Examples

### List all accounts
```php
<?php
$client = new Client([
  'auth_type' => 'user',
  'user' => '<your_email>',
  'pass' => '<your_password'
]);
$accounts = new Account($client);
$response = $accounts->all();
```

## With some help

Thanks to Nate Good's package ***nategood/httpful*** that makes the use of cUrl pretty simple.
http://phphttpclient.com/

## Contributions

Feel free to contribute with ideas and completing the **todo.md** file

## Links

### Bugsnag Data Access API Docs
https://docs.bugsnag.com/api
