<?php
include_once('templates/header.php');
if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?php echo $currentPost['title']; ?> </h1>
        <p id="post-description"> <?php echo $currentPost['description']; ?> </p>
        <div class="img-container">
            <img src="<?php echo $BASE_URL; ?>/img/<?php echo $currentPost['img']; ?>" alt="<?php echo $currentPost['title']; ?> ">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam laborum blanditiis aliquid molestias deleniti facilis sapiente enim doloremque asperiores temporibus placeat, nobis molestiae vitae ipsa! Libero itaque error illum eius.
        Accusantium, consequuntur similique, cupiditate dolore exercitationem iusto quo voluptas laboriosam labore, nihil illum? Delectus, et, corrupti qui nisi quam cupiditate eaque quaerat provident sequi repellendus non dolorem labore dicta laudantium.
        Cum repudiandae praesentium aperiam nobis aliquam nemo perferendis ad incidunt veritatis nesciunt ducimus voluptates inventore ea, assumenda quos, nulla quasi fuga suscipit atque. Itaque blanditiis id soluta dolore optio ad!
        Quis enim adipisci nulla, repellendus quasi illum, in assumenda consequuntur deleniti repudiandae fugiat qui quam. Ipsum, vel sequi mollitia et aliquam maiores ratione nulla rerum quaerat magni eius, exercitationem sunt!
        Nisi officiis quibusdam dolores, sapiente temporibus tempora odit ipsam voluptate fuga repellendus modi doloribus voluptatem animi nam. Distinctio hic veniam illum tempora, exercitationem eligendi, totam quis iusto, a quas explicabo!</p>
    </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam laborum blanditiis aliquid molestias deleniti facilis sapiente enim doloremque asperiores temporibus placeat, nobis molestiae vitae ipsa! Libero itaque error illum eius.
        Accusantium, consequuntur similique, cupiditate dolore exercitationem iusto quo voluptas laboriosam labore, nihil illum? Delectus, et, corrupti qui nisi quam cupiditate eaque quaerat provident sequi repellendus non dolorem labore dicta laudantium.
        Cum repudiandae praesentium aperiam nobis aliquam nemo perferendis ad incidunt veritatis nesciunt ducimus voluptates inventore ea, assumenda quos, nulla quasi fuga suscipit atque. Itaque blanditiis id soluta dolore optio ad!
        Quis enim adipisci nulla, repellendus quasi illum, in assumenda consequuntur deleniti repudiandae fugiat qui quam. Ipsum, vel sequi mollitia et aliquam maiores ratione nulla rerum quaerat magni eius, exercitationem sunt!
        Nisi officiis quibusdam dolores, sapiente temporibus tempora odit ipsam voluptate fuga repellendus modi doloribus voluptatem animi nam. Distinctio hic veniam illum tempora, exercitationem eligendi, totam quis iusto, a quas explicabo!</p>
    </div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href=""><?php echo $tag; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
</aside>
<?php
include_once('templates/footer.php');
?>