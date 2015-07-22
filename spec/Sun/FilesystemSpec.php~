<?php

namespace spec\Sun;

use org\bovigo\vfs\vfsStream;
use PhpSpec\ObjectBehavior;

class FilesystemSpec extends ObjectBehavior
{
    protected $root;

    public function let()
    {
        $this->shouldHaveType('Sun\Filesystem');

        $structure = [
            'file.txt' => 'content',
            'examples' => []
        ];
        $this->root = vfsStream::setup('root', null, $structure);
    }

    public function it_creates_file()
    {
        $this->create($this->root->url() . '/file.txt', 'content');

        $this->get($this->root->url() . '/file.txt')->shouldReturn('content');
    }

    public function it_deletes_file()
    {
        $this->delete($this->root->url() . '/file.txt');
    }

    public function it_throws_file_not_found_exception_if_the_file_does_not_exists()
    {
        $this->shouldThrow('Sun\FileNotFoundException')->duringDelete('foo.txt');
    }

    public function it_checks_file_is_exists()
    {
        $this->exists($this->root->url() . '/file.txt')->shouldBe(true);
    }

    public function it_checks_file_is_no_exists()
    {
        $this->exists($this->root->url() . '/foo.txt')->shouldBe(false);
    }

    public function it_updates_existing_file_content()
    {
        $this->update($this->root->url() . '/file.txt', 'more content');

        $this->get($this->root->url() . '/file.txt')->shouldReturn('more content');
    }

    public function it_throws_file_not_found_exception_when_the_file_you_want_to_update_is_not_exists()
    {
        $this->shouldThrow('Sun\FileNotFoundException')->duringUpdate('foo.txt', 'more content');
    }

    public function it_returns_file_content()
    {
        $this->get($this->root->url() . '/file.txt')->shouldReturn('content');
    }

    public function it_throws_file_not_found_exception_if_the_file_does_not_exists_when_you_try_get_file_content()
    {
        $this->shouldThrow('Sun\FileNotFoundException')->duringGet('foo.txt');
    }

    public function it_appends_more_content_with_existing_file()
    {
        $this->append($this->root->url() . '/file.txt', ' more content');

        $this->get($this->root->url() . '/file.txt')->shouldReturn('content more content');
    }

    public function it_creates_new_copy_of_a_file()
    {
        $this->copy($this->root->url() . '/file.txt', $this->root->url() . '/newFile.txt');

        $this->get($this->root->url() . '/newFile.txt')->shouldReturn('content');
    }

    public function it_moves_a_file_to_new_destination()
    {
        vfsStream::newDirectory('/destination');

        $this->move($this->root->url() . '/file.txt', $this->root->url('/destination') . '/newFile.txt');

        $this->get($this->root->url('/destination') . '/newFile.txt')->shouldReturn('content');
    }

    public function it_returns_size_of_the_file()
    {
        $this->size($this->root->url() . '/file.txt')->shouldReturn(7);
    }

    public function it_deletes_directory()
    {
        // create directory
        $dir = __DIR__ . '/newDir';
        mkdir($dir, 777, true);

        // create inner directories in the newDir directory
        $this->createDirectory($dir . '/dir1');
        $this->createDirectory($dir . '/dir2');
        $this->createDirectory($dir . '/dir3');

        // if directory delete return true
        $this->deleteDirectory($dir)->shouldReturn(true);
    }

    public function it_returns_all_files_in_a_directory()
    {
        // create directory
        $dir = __DIR__ . '/newDir';
        mkdir($dir, 777, true);

        // create files
        $this->create($dir . '/file1.txt', 'content');
        $this->create($dir . '/file2.txt', 'content');
        $this->create($dir . '/file3.txt', 'content');

        // check it returns 3 ( total number of created files )
        $this->files($dir)->shouldHaveCount(3);

        // delete directory that i have created
        $this->deleteDirectory($dir);
    }


    public function it_returns_all_directories_in_a_directory()
    {
        // create directory
        $dir = __DIR__ . '/newDir';
        mkdir($dir, 777, true);

        // create inner directories in the newDir directory
        $this->createDirectory($dir . '/dir1');
        $this->createDirectory($dir . '/dir2');
        $this->createDirectory($dir . '/dir3');

        // check it returns 3 ( total number of created directories )
        $this->directories($dir)->shouldHaveCount(3);

        // delete directory that i have created
        $this->deleteDirectory($dir);
    }

    public function it_cleans_a_directory()
    {
        // create directory
        $dir = __DIR__ . '/newDir';
        mkdir($dir, 777, true);

        // create inner directories in the newDir directory
        $this->createDirectory($dir . '/dir1');
        $this->createDirectory($dir . '/dir2');
        $this->createDirectory($dir . '/dir3');
         $this->create($dir . '/file1.txt', 'content');
        $this->create($dir . '/dir1/file1.txt', 'content');

        // check it returns true
        $this->cleanDirectory($dir)->shouldReturn(true);

        // delete directory that i have created
        $this->deleteDirectory($dir);
    }

}
