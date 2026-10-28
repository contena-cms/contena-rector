# 11 Rules Overview

## AddArgumentToClassWithoutDefaultRector

This Rector adds new default arguments in calls of defined methods and class types.

:wrench: **configure it!**

- class: [`Contena\Rector\Rule\ClassMethod\AddArgumentToClassWithoutDefaultRector`](../src/Rule/ClassMethod/AddArgumentToClassWithoutDefaultRector.php)

```php
<?php

declare(strict_types=1);

use Contena\Rector\Rule\ClassMethod\AddArgumentToClassWithoutDefault;
use Contena\Rector\Rule\ClassMethod\AddArgumentToClassWithoutDefaultRector;
use PHPStan\Type\ObjectType;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(AddArgumentToClassWithoutDefaultRector::class, [
        new AddArgumentToClassWithoutDefault('SomeExampleClass', 'someMethod', 0, new ObjectType('SomeType'), 'someArgument'),
    ]);
};
```

↓

```diff
 $someObject = new SomeExampleClass;
-$someObject->someMethod();
+$someObject->someMethod(true);

 class MyCustomClass extends SomeExampleClass
 {
-    public function someMethod()
+    public function someMethod($value)
     {
     }
 }
```

<br>

## InterfaceReplacedWithAbstractClassRector

Replace UrlProviderInterface with AbstractClass

:wrench: **configure it!**

- class: [`Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClassRector`](../src/Rule/Class_/InterfaceReplacedWithAbstractClassRector.php)

```php
<?php

declare(strict_types=1);

use Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClass;
use Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClassRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(InterfaceReplacedWithAbstractClassRector::class, [
        new InterfaceReplacedWithAbstractClass('Foo', 'AbstractTest'),
    ]);
};
```

↓

```diff
-class Foo implements Test {
+class Foo extends AbstractTest {

 }
```

<br>

## MakeClassConstructorArgumentRequiredRector

NAME

:wrench: **configure it!**

- class: [`Contena\Rector\Rule\ClassConstructor\MakeClassConstructorArgumentRequiredRector`](../src/Rule/ClassConstructor/MakeClassConstructorArgumentRequiredRector.php)

```php
<?php

declare(strict_types=1);

use Contena\Rector\Rule\ClassConstructor\MakeClassConstructorArgumentRequired;
use Contena\Rector\Rule\ClassConstructor\MakeClassConstructorArgumentRequiredRector;
use PHPStan\Type\ArrayType;
use PHPStan\Type\StringType;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(MakeClassConstructorArgumentRequiredRector::class, [
        new MakeClassConstructorArgumentRequired('Foo', 0, new ArrayType(new StringType(), new StringType())),
    ]);
};
```

↓

```diff
 class Foo {
-    public function __construct(array $foo = [])
+    public function __construct(array $foo)
     {
     }
 }
```

<br>

## RemoveArgumentFromClassConstructRector

This Rector removes an argument in the defined class construct.

:wrench: **configure it!**

- class: [`Contena\Rector\Rule\ClassConstructor\RemoveArgumentFromClassConstructRector`](../src/Rule/ClassConstructor/RemoveArgumentFromClassConstructRector.php)

```php
<?php

declare(strict_types=1);

use Contena\Rector\Rule\ClassConstructor\RemoveArgumentFromClassConstruct;
use Contena\Rector\Rule\ClassConstructor\RemoveArgumentFromClassConstructRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(RemoveArgumentFromClassConstructRector::class, [
        new RemoveArgumentFromClassConstruct('SomeExampleClass', 0),
    ]);
};
```

↓

```diff
-$someObject = new SomeExampleClass($example);
+$someObject = new SomeExampleClass();
```

<br>

