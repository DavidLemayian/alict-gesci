<?php

class Validations extends Illuminate\Validation\Validator {

  /**
   * Validate word count word_count:100
   * @param  string $attribute
   * @param  string $value
   * @param  integer $parameters
   * @return boolean
   */
  public function validateWordCount($attribute, $value, $parameters)
  {
    return (str_word_count($value) > $parameters[0]);
  }

  /**
   * Word Count validation error message
   * @param  string $message
   * @param  string $attribute
   * @param  string $rule
   * @param  string $parameters
   * @return string
   */
  protected function replaceWordCount($message, $attribute, $rule, $parameters)
  {
    return str_replace(':word_count', $parameters[0], $message);
  }
}