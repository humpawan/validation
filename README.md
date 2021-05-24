# Laravel Validation

[![Latest Stable Version](https://poser.pugx.org/hum/validation/v)](//packagist.org/packages/hum/validation) [![Total Downloads](https://poser.pugx.org/hum/validation/downloads)](//packagist.org/packages/hum/validation) [![Latest Unstable Version](https://poser.pugx.org/hum/validation/v/unstable)](//packagist.org/packages/hum/validation) [![License](https://poser.pugx.org/hum/validation/license)](//packagist.org/packages/hum/validation)

Laravel Upload Files
=======
A simple library for Laravel Upload.by using this you can upload any file or image.even you can use this for single/multiple upload also.

Installation
------------

Use composer to install this package

```bash
composer require hum/validation
```

Example
-------
```php
use hum\validation\Validation;

// $valueColumn = 1; //accepted value
        $valueColumn = 'pawan.garg@sufalamtech.com'; //email value
        // $valueColumn = '2021-08-08'; //date formet value
        $tableName = 'users'; //table name
        $columnName = 'email'; //column name
        $length = 4; //column length for min-max ,size
        $dateformet = 'Y-m-d'; // date formet
        $datatype = 'integer'; // datatype
        // $datatype = 'string'; // datatype
        $filetype = 'jpg,jpeg,png,bmp,tiff'; //define the file type
        $filemessage = 'Please insert image only';
        $validation = new Validation();
        $valueReturn = $validation->uniqueValueColumn($tableName,$columnName,$valueColumn); // unique
        // $valueReturn = $this->requiredValueColumn($columnName,$valueColumn); // required
        // $valueReturn = $this->minValueColumn($columnName,$valueColumn,$length); //min value
        // $valueReturn = $this->maxValueColumn($columnName,$valueColumn,$length); //max value
        // $valueReturn = $this->acceptedValueColumn($columnName,$valueColumn); // accepted
        // $valueReturn = $this->dateformetValueColumn($columnName,$valueColumn,$dateformet); //date format
        // $valueReturn = $this->datatypeValueColumn($columnName,$valueColumn,$datatype); //data types
        // $valueReturn = $this->datasizeValueColumn($columnName,$valueColumn,$length); //data size
        // $valueReturn = $this->filesValueColumn($columnName,$valueColumn,$filetype,$filemessage); //files
        return response()->json($valueReturn);
