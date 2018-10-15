<?php
    class Posts extends Controller {
        public function __construct() {
            if(!isLoggedin()) {
                redirect('users/login');
            }

            $this->postModel = $this->model('Post');
        }

        public function index() {
            // Get posts
            $posts = $this->postModel->getPosts();

            $data = [
                'posts' => $posts
            ];

            $this->view('posts/index', $data);
        }

        public function add(){
            // Get posts
            $posts = $this->postModel->getPosts();

            $data = [
                'title' => '',
                'body' => ''
            ];

            $this->view('posts/add', $data);
        }
    }