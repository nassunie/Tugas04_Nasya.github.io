<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Article</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Delete Article</h2>
    <form action="delete_article.php" method="post">
        <select name="article_id">
            <?php
            include 'db_connect.php';

            // Query to fetch articles from database
            $sql = "SELECT id, judul FROM artikel";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['judul'] . "</option>";
                }
            } else {
                echo "<option value=''>No articles found</option>";
            }

            $conn->close();
            ?>
        </select>
        <button type="submit">Delete Article</button>
    </form>

    <?php
    include 'db_connect.php';

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if article ID is provided
        if (isset($_POST['article_id']) && !empty($_POST['article_id'])) {
            $article_id = $_POST['article_id'];

            // Delete article from database
            $sql = "DELETE FROM artikel WHERE id = $article_id";
            if ($conn->query($sql) === TRUE) {
                echo "Article deleted successfully.";
                echo "<br><a href='index.php'>Back to Home</a>";
            } else {
                echo "Error deleting article: " . $conn->error;
            }
        } else {
            echo "Article ID is not provided.";
        }
    }

    $conn->close();
    ?>
</body>
</html>