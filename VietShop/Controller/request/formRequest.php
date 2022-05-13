<?php
class Request
{
    private $request;
    private $errors = [];
 
    public function __construct($request)
    {
        $this->request = $request;
    }
    public function validateForm($rules, $messages)
    {

        foreach ($rules as $field) {
            if (isset($this->request[$field]) && $this->request[$field] == "") {
                $this->errors[$field] = $messages[$field];
            }
        }
        $_SESSION['errors'] = $this->errors;
        $_SESSION['requests'] =  $this->request ;
    
    }
    public function isValid(): bool
    {
        if(count($this->errors) > 0){  return false; }else { return true;
        }
        
    }
}
