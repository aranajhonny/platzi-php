<?php
namespace PlatziPHP\Infrastructure;

use PlatziPHP\Domain\EntityNotFound;
use Illuminate\Support\Collection;
use PlatziPHP\Domain\Post;

class PostRepository extends BaseRepository
{
    protected function table()
    {
        return 'posts';
    }

    public function all()
    {
        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM posts'
        );

        $statement->execute();

        return $this->mapToPosts(
            $statement->fetchAll()
        );
    }

    public function search($query){
        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM posts  WHERE title LIKE :query OR body LIKE :query'
        );
        $query = "%$query%";

        $statement->bindParam(':query', $query, \PDO::PARAM_STR);

        return $this->mapToPosts($statement->fetchAll());
    }

    private function mapToPosts(array $results)
    {
        $posts = new Collection();

        foreach ($results as $result){
                $post = $this->mapEntity($result);
                $posts->push($post);
        }
            return $posts;
    }


    protected function mapEntity(array $result){
        return new Post(
            $result['authorId'],
            $result['title'],
            $result['body'],
            $result['id']
        );

    }
}








