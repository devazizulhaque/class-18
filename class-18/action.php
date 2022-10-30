<?php

    require_once './vendor/autoload.php';

    use App\classes\Blog;

    if ($_GET['page'] == 'home'){
        include "./pages/home.php";
    }
    elseif ($_GET['page'] == 'all-blogs'){
        $blog = new Blog();
        $blogs = $blog->allBlogs();
        include "./pages/blog.php";
    }
    elseif ($_GET['page'] == 'detail') {
        $blog = new Blog();
        $blogId = $_GET['id'];
        $details = $blog->getBlogDetails($blogId);
        include './pages/detail.php';
    }

?>