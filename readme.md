# Orion CRM API

Создание клиента

```php
$client = new Orion\Component\Client\Client([
    'token' => 'qwe123',
    'version' => 'v1',
    'host' => 'http://localhost:8000'
]);
```

## CRM

### Создание лида:

```php
$lead = new \Orion\Component\Client\Crm\Lead();
$lead->setName('Hello api!');
$lead->setPrice(10000);
```

### Создание контакта:

```php
$contact = new \Orion\Component\Client\Crm\Contact();
$contact->setName('Hello api!');
$contact->setPhone('+78332207107');
```

Если контакт был найден в базе данных по номеру телефона или email адресу, то новый создаваться не 
будет и сохранение будет проигнорировано.

### Создание компании:

```php
$contact = new \Orion\Component\Client\Crm\Company();
$contact->setName('Hello api!');
$contact->setPhone('+78332207107');
```

Если компания была найдена в базе данных по номеру телефона или email адресу, то новая создаваться не 
будет и сохранение будет проигнорировано.