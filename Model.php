<?php

namespace CoDevelopers\Elastic\Component;

use Timber\Timber;
use Timber\Term as TimberTerm;
use Timber\Post as TimberPost;

class Model
{
    public function getThePost(string $postClass = TimberPost::class)
    {
        return Timber::get_post(false, $postClass);
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
