<?php

namespace Sun;

class FilesystemAlien extends Alien
{
    /**
     * To register Alien
     *
     * @return namespace
     */
    public static function registerAlien()
    {
        return 'Sun\Filesystem';
    }
}
