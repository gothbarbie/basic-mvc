<?php
/**
 *
 */
class PostsModel extends BaseModel
{
    public function getEntries()
    {
        $return = [];
        $return[0] = ['title' => 'Hello world'];
        $return[1] = ['title' => 'Hello universe'];
        return $return;
    }
}
