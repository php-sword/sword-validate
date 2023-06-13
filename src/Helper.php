<?php

namespace sword\validate;

class Helper
{
    /**
     * 下划线转驼峰(首字母小写)
     * @param  string $value
     * @return string
     */
    public static function camel(string $value): string
    {
        return lcfirst(static::studly($value));
    }

    /**
     * 下划线转驼峰(首字母大写)
     * @param  string $value
     * @return string
     */
    public static function studly(string $value): string
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $value));
        return str_replace(' ', '', $value);
    }
}