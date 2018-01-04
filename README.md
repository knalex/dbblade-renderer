### Installation (Laravel >=5.3.x)

Run `composer require knalex/dbblade-renderer` 

Add the ServiceProvider to the providers array in app/config/app.php

    'Knalex\DbTemplate\DbTemplateServiceProvider::class',


### Usage

Create template

```
\Knalex\DbTemplate\Models\BladeTemplate::create([
    'virtualroot'=>'virtual.path',
    'body'=>'blade template body'
])
```

Next in Сontroller method use helper function dbview(), just like a usual function view()

```
public function index()
{
    return dbview('virtual.path', $parametersIfExist);`
}
```
