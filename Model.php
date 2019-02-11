<?php

namespace CoDevelopers\Elastic\Component;

class Model
{
    public function getThePost(): \WP_Post
    {
        global $post;
        $thePost = null;
        while (have_posts()) {
            the_post();
            $thePost = clone $post;
            break;
        }
        wp_reset_postdata();
        return $thePost;
    }

    public function getThePosts(): array
    {
        global $post;
        $thePosts = [];
        while (have_posts()) {
            the_post();
            $thePosts[] = $post;
        }
        wp_reset_postdata();
        return $thePosts;
    }

    public function getPost(array $args): \WP_Post
    {
        global $post;
        $onePost = null;
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            $onePost = clone $post;
            break;
        }
        wp_reset_postdata();
        return $onePost;
    }

    public function getPosts(array $args): array
    {
        global $post;
        $posts = [];
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            $posts[] = $post;
        }
        wp_reset_postdata();
        return $posts;
    }

    public function getTerm(array $args): \WP_Term
    {
        $oneTerm = null;
        $query = new WP_Term_Query($args);
        foreach ($query->get_terms() as $term) {
            $oneTerm = $term;
            break;
        }
        return $oneTerm;
    }

    public function getTerms(array $args): array
    {
        $terms = [];
        $query = new WP_Term_Query($args);
        foreach ($query->get_terms() as $term) {
            $terms[] = $term;
        }
        return $terms;
    }
}
