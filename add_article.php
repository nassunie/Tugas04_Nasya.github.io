<!DOCTYPE html>
<html>
<head>
    <title>Add Article</title>
</head>
<body>
    <h1>Add New Article</h1>
    <form action="save_article.php" method="post">
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="content" placeholder="Content" required></textarea>
        <input type="text" name="url" placeholder="URL" required>
        <button type="submit">Add Article</button>
    </form>
</body>
</html>