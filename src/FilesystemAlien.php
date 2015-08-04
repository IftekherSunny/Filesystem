<?php

namespace Sun;

class FilesystemAlien extends Alien
{
    /**
     * To register Alien
     *
     * @return object
     */
    public static function registerAlien()
    {
        return 'Sun\Filesystem';
    }
}
