<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Forum</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
// session_start();
//topic.php
include 'connect.php';
include 'header.php';
$aVar = mysqli_connect('localhost','root','','covid');
 
//first select the category based on $_GET['cat_id']
// $sql = "SELECT DISTINCT * FROM topics, posts, categories
//         WHERE topic_id = posts.post_topic=topics.topic_by 
//         AND categories.cat_id=topics.topic_cat 
//         AND topics.topic_cat= '" . $_GET['id'] . "'";

        // WHERE topic_id = posts.post_topic=topics.topic_id;
        // '" . $_GET['id'] . "' AND

$sql = "SELECT DISTINCT * FROM categories, topics, posts WHERE categories.cat_id=topics.topic_id 
AND topics.topic_id= '" . $_GET['id'] . "' AND topics.topic_id=posts.post_topic";

 
$result = mysqli_query($aVar, $sql);
 
if(!$result)
{
    echo 'The topic could not be displayed, please try again later.' . mysqli_error($aVar);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
        //display category data
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Posts in ′' . $row['cat_name'] . '′ categories</h2>';
        }
     
        //do a query for the topics
        //buat right part
        // $sql = "SELECT * FROM posts, topics, categories WHERE topic_cat= '" . $_GET['id'] ."' 
        // AND topic_id = posts.post_topic=topics.topic_by AND categories.cat_id=topics.topic_cat ";
        $sql = "SELECT DISTINCT * FROM categories, topics, posts WHERE categories.cat_id=topics.topic_id 
        AND topics.topic_id= '" . $_GET['id'] . "' AND topics.topic_id=posts.post_topic";

         
        $result = mysqli_query($aVar, $sql);
         
        if(!$result)
        {
            echo 'The post could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no post in this category yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Topic</th>
                        <th>Post</th>
                      </tr>';      
                while($row = mysqli_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">';
                            echo '<h3><a href="topic.php?id=' . $row['topic_cat'] . '">' . $row['topic_subject'] . '</a><h3>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                            // echo date('d-m-Y', strtotime($row['topic_date']));
                            $post_content = $row['post_content'];
                            echo '<h3>' . $post_content . '</h3>';
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td colspan="2">';
                        ?>
                        <html>
                            <br>
                            <form action="reply.php" method="post">
                            Nama   :<br> <input type="text" name="nama"><br>
                            Isi    : <br>
                            <textarea name="komentar" cols="45" rows="10"> </textarea><br>
                            <input type="submit" value="Kirim">
                            <input type="reset" value="Batal">
                            <button onclick="window.location.href='reply.php'"><h8>LIHAT KOMENTAR</h8></button>
                            </form>
                            <!-- <form method="post" action="reply.php?id=5">
                            <textarea name="reply-content"></textarea>
                            <input type="submit" value="Submit reply" />
                            </form> -->
                            <br>
                        </html>
                        <?php
                        echo '</td>';
                    echo '</tr>';   
                }
            }
        }
    }
}
include 'footer.php';
?>