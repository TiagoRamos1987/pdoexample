<?php
    $host = 'localhost';
    $user = 'tiago';
    $password = '123456';
    $dbname = 'pdoposts';

    //Set DSN
    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    //Create PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

    #PRDO QUERY
    
    //$stmt = $pdo->query('SELECT * FROM posts');

    //while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //    echo $row['title'].'<br>';
    //}

    //while($row = $stmt->fetch()){
    //    echo $row->title.'<br>';
    //}

    # PREPARED STATEMENTS (prepare e execute)

    //UNSAFE
    //$sql = "SELECT * FROM posts WHERE author = '$author'";

    //FETCH MULTIPLE POSTS

    //User input
    //$author = 'Tiago Ramos';
    //$is_published = true;
    //$id = 1;
    //$limit = 1;


    // Position Params
    //$sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute([$author, $is_published, $limit]);
    //$post = $stmt->fetchAll();

    //Named Params
    //$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute(['author' => $author, 'is_published' => $is_published]);
    //$post = $stmt->fetchAll();

    //var_dump($posts);
    //foreach ($posts as $post) {
    //    echo $post->title.'<br>';
    //}

    //FETCH SINGLE POST
    //$sql = 'SELECT * FROM posts WHERE id = :id';
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute(['id' => $id]);
    //$post = $stmt->fetch();
    
    //echo $post->body;

    //GET ROW COUNT
    //$stmt = $pdo->prepare('SELECT * FROM POSTS WHERE author = ?');
    //$stmt->execute([$author]);
    //$postCount = $stmt->rowCount();

    //echo $postCount;

    //INSERT DATA
    $title = 'Post seven';
    $body = 'This is post seven';
    $author = 'Carla';

    $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
    echo 'Post added';

    //UPDATE DATA
    //$id = 1;
    //$body = 'This is the updated post';

    //$sql = 'UPDATE posts SET body = :body, WHERE id = :id';
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute(['body' => $body, 'id' => $id]);
    //echo 'Post updated';

    //DELETE DATA
    //$id = 3;
    
    //$sql = 'DELETE FROM posts WHERE id = :id';
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute(['id' => $id]);
    //echo 'Post deleted';

    //SEARCH DATA
    //$search = '%posts%';
    //$sql = 'SELECT * FROM posts WHERE title LIKE ?';
    //$stmt = $pdo->prepare($sql);
    //$stmt->execute([$search]);
    //$posts = $stmt->fetchAll();

    //foreach($posts as $post){
    //    echo $post->title.'<br>';
    //}
    //echo 'Post deleted';
?>
