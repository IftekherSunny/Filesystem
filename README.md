## Filesystem

[![Build Status](https://travis-ci.org/IftekherSunny/Filesystem.svg?branch=master)](https://travis-ci.org/IftekherSunny/Filesystem)
[![Total Downloads](https://poser.pugx.org/sun/filesystem/downloads)](https://packagist.org/packages/sun/filesystem)
[![Latest Stable Version](https://poser.pugx.org/sun/filesystem/v/stable)](https://packagist.org/packages/sun/filesystem)  [![Latest Unstable Version](https://poser.pugx.org/sun/filesystem/v/unstable)](https://packagist.org/packages/sun/filesystem) [![License](https://poser.pugx.org/sun/filesystem/license)](https://packagist.org/packages/sun/filesystem)

Filesystem helps you to manage your file easily.

## Installation Process

Just copy Filesystem folder somewhere into your project directory. Then include filesystem autoloader.

```php
 require_once('/path/to/Filesystem/autoload.php');
```

Filesystem is also available via Composer/Packagist.

```
 composer require sun/filesystem
```

## All Methods

###### To create file

```php
$filesystem = new Sun\Filesystem;
$filesystem->create(__DIR__.'/filename.txt', 'content');
```
###### To delete file

```php
$filesystem->delete(__DIR__.'/filename.txt');
```

###### To update file

```php
$filesystem->update(__DIR__.'/filename.txt', ' more content');
```

###### To get file content

```php
$filesystem->get(__DIR__.'/filename.txt');
```

###### To append file content

```php
$filesystem->append(__DIR__.'/filename.txt', 'more content');
```

###### To copy a file 

```php
$filesystem->copy(__DIR__.'/filename.txt', __DIR__.'/filename2.txt' );
```

###### To move a file 

```php
$filesystem->move(__DIR__.'/filename.txt', __DIR__.'/destination/filename.txt' );
```

###### To get filesize

```php
$filesystem->size(__DIR__.'/filename.txt');
```

###### To check file exists

```php
$filesystem->exists(__DIR__.'/filename.txt');
```

###### To get all files in a directory

```php
$filesystem->files(__DIR__.'/directoryName');
```

###### To get all directories in a directory

```php
$filesystem->directories(__DIR__.'/directoryName');
```

###### To create a directory

```php
$filesystem->createDirectory(__DIR__.'/directoryName');
```

###### To delete a directory

```php
$filesystem->deleteDirectory(__DIR__.'/directoryName');
```

###### To clean a directory

```php
$filesystem->cleanDirectory(__DIR__.'/directoryName');
```


## License

This package is licensed under the [MIT License](https://github.com/IftekherSunny/filesystem/blob/master/LICENSE)
