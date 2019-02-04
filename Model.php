<?php

namespace CoDevelopers\Elastic\Component;

class Model
{
    public function getThePost()
    {
        global $post;
        while (have_posts()) {
            the_post();
        }
        $clonedPost = clone $post;
        wp_reset_postdata();
        return $clonedPost;
    }

    public function getThePosts(string $postClass = TimberPost::class, bool $returnCollection = false)
    {
        return Timber::get_posts(false, $postClass, $returnCollection);
    }

    public function getPost(array $query, string $postClass = TimberPost::class)
    {
        return Timber::get_post($query, $postClass);
    }

    public function getPosts(array $query, string $postClass = TimberPost::class, bool $returnCollection = false)
    {
        return Timber::get_posts($query, $postClass, $returnCollection);
    }

    public function getTerm(int $id, string $taxonomy = 'post_tag', string $termClass = TimberTerm::class)
    {
        return Timber::get_term($id, $taxonomy, $termClass);
    }

    public function getTerms(array $args, string $termClass = TimberTerm::class)
    {
        return Timber::get_terms($args, [], $termClass);
    }
}
