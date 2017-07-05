<?php

namespace lib;

class StringFormatter
{
    /**
     * @return string
     */
    public function concat($firstString, $secondString)
    {
        return $firstString.$secondString;
    }

    /**
     * @return string
     */
    public function toCamelCase($firstString, $secondString)
    {
        $secondString[0] = strtoupper($firstString[0]);
        $secondString[0] = strtoupper($secondString[0]);
        return $this->concat($firstString.$secondString);
    }

    /**
     * @return string
     */
    public function prefix($firstString, $secondString, $toCamelCase = false)
    {
        if($toCamelCase){
          return $this->toCamelCase($secondString.$firstString);
        }
        return $secondString.$firstString;
    }

    /**
     * @return string
     */
    public function suffix($firstString, $secondString, $toCamelCase = false)
    {
        if($toCamelCase){
          return $this->toCamelCase($firstString.$secondString);
        }
        return $firstString.$secondString;
    }
}
