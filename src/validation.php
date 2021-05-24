<?php 
namespace hum\Validation;
use Illuminate\Support\Facades\Validator;
	
class Validation
{
    public function uniqueValueColumn($tableName,$columnName,$valueColumn){
        $validator = Validator::make([$columnName => $valueColumn],
            [ $columnName => 'unique:"'.$tableName.'"']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all required fields validate
    public function requiredValueColumn($columnName,$valueColumn){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'required']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all min-value fields validate
    public function minValueColumn($columnName,$valueColumn,$length){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'min:"'.$length.'"']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all max-value fields validate
    public function maxValueColumn($columnName,$valueColumn,$length){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'max:"'.$length.'"']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all max-value fields validate
    public function acceptedValueColumn($columnName,$valueColumn){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'accepted']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all date format fields validate
    public function dateformetValueColumn($columnName,$valueColumn,$dateformet){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'date_format:"'.$dateformet.'"']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all datatype fields validate
    public function datatypeValueColumn($columnName,$valueColumn,$datatype){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => $datatype]
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //size type fields validate
    public function datasizeValueColumn($columnName,$valueColumn,$datasize){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'size:"'.$datasize.'"']
        );
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }

    //all files fields validate pending for validation of files
    public function filesValueColumn($columnName,$valueColumn,$filetype,$filemessage){
        $validator = Validator::make(
            [$columnName => $valueColumn],
            [$columnName => 'mimes:"'.$filetype.'"'],
            $messages = ['mimes' => $filemessage
        ]);        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        } else{
            return true;
        }
    }
}