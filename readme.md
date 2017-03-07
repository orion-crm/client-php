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

### Создание комментария:

```php
$comment = new \Orion\Component\Client\Crm\Comment();
$comment->setComment('Hello api!');
$comment->setCompanyId(1);
$comment->setContactId(1);
$comment->setLeadId(1);
```

### Создание задачи:

```php
$task = new \Orion\Component\Client\Crm\Task();
$task->setResult('Hello api!');
$task->setCompanyId(1);
$task->setContactId(1);
$task->setLeadId(1);
$task->setExecutorId(1);
$task->setType(1);
$task->setDeadlineAt(new \DateTime);
// $task->setDeadlineAt('2017-10-10 10:10:10');
```

Если компания была найдена в базе данных по номеру телефона или email адресу, то новая создаваться не
будет и сохранение будет проигнорировано.