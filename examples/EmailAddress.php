<?php

use CustomTypes\AbstractStringType;

class EmailAddress extends AbstractStringType
{
    const VALIDATION_REGEX = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
    const TYPE_NAME = "email";
}