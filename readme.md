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
$company = new \Orion\Component\Client\Crm\Company();
$company->setName('Hello api!');
$company->setPhone('+78332207107');
```

Если компания была найдена в базе данных по номеру телефона или email адресу, то новая создаваться не 
будет и сохранение будет проигнорировано.

### Создание задачи:

```php
$issue = new \Orion\Component\Client\Issue\Issue();
$issue->setContent('Hello api!');
$issue->setResult('Issue api is done');
$issue->setObjectId(1);
$issue->setObjectClass('lead');
$issue->setExecutorId(1);
$issue->setType(1);
// $issue->setType(null); NULL - is comment
$issue->setDeadlineAt(new \DateTime);
// $issue->setDeadlineAt('2017-10-10 10:10:10');
```