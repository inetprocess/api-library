<?php

namespace Mautic\Utils;

class Utils
{
    public function arrayRemoveEmpty(array $data)
    {
        $res = array();
        foreach ($data as $key => $value) {
            if (!empty($value)) {
                $res[$key] = $value;
            }
        }
        return $res;
    }
}
