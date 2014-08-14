<?php
/**
 * Created by PhpStorm.
 * User: renato
 * Date: 13/08/14
 * Time: 22:46
 */

class PostsController extends BaseController {

    public function insertPost()
    {
        $post = new Post();

        $post->title = Input::get('title');
        $post->post = Input::get('post');

        $post->save();

        return Redirect::to('/');
    }

} 