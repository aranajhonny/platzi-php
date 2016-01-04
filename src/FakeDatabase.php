<?php
 namespace PlatziPHP;

 use Illuminate\Support\Collection;

 class FakeDatabase
 {
     /**
      * @return Collection
      */
     public function posts()
     {

         $author = new Author(
             'Anemail@foo.bar',
             '1234',
             'Authordeplatzi'
         );

         $author->setName('jhonny','arana');

         return new Collection([
             1 => new Post($author, 'post #1', 'This is post number 1'),
             2 => new Post($author, 'post #2', 'This is post number 2'),
             3 => new Post($author, 'post #3', 'This is post number 3'),
             4 => new Post($author, 'post #4', 'This is post number 4')
         ]);


     }


 }
