<?php
/**
 * Load
 * Based on: https://www.youtube.com/watch?v=3QAZSo96_ow&list=PL8931096D81D44C4E&index=4
 */
class Load
{
    public function model($name)
    {
        $model = $name . 'Model';
        $modelPath = SITE_PATH . 'models/' . $model . '.php';

        if ( is_readable($modelPath) ) {
            require_once($modelPath);
            if (class_exists($model)) {
                $registry = Registry::getInstance();
                $registry->$name = new $model;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
