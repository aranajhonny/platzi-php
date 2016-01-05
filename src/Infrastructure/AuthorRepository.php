<?php
namespace PlatziPHP\Infrastructure;

use PlatziPHP\Domain\Author;

class AuthorRepository extends BaseRepository
{
   protected function table()
   {
       return 'users';
   }
    protected function mapEntity(array $result)
    {
        return new Author(
            $result['email'],
            $result['password'],
            'Authordeplatzi'
        );
    }
}