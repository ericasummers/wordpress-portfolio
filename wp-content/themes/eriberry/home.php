<?php
class Blog_Page extends Core_Template {

    public function template_file() {
		return 'views/blog.twig';
    }

    public $current_category;
    public $current_search_term;

    public function init() {
        if (isset($_GET['category'])) {
            $this->current_category = urldecode($_GET['category']);
        }
        if (isset($_GET['query'])) {
            $this->current_search_term = urldecode($_GET['query']);
        }
    }

	public function fields() {

		$fields = core_get_fields( 'option', '', array(
			'background_image',
		) );
        $fields['post'] = get_post($this->obj_id);
        $fields['current_category'] = $this->current_category;
        $fields['current_search_term'] = $this->current_search_term;
        $fields['categories'] = get_terms('category');
		return $fields;

    }
    
    public function blog_posts() {
        $page = $_GET['current'] ? $_GET['current'] : 1;

        $blog_args = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'posts_per_page' => 10,
            'paged' => $page,
            's' => $this->current_search_term
        ];

        $category_name = $this->current_category;
        $category = get_term_by('name', $category_name, 'category', OBJECT);
        $category_id = $category->term_id;
        if ($category_id) {
            $category_filter = [$category_id];
            $blog_args['tax_query'][] = [
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $category_filter
            ];
        } else {
            $category_filter = '';
        }

        $blog_posts = new WP_Query($blog_args);

        $blog_post_items = [];

        if ($blog_posts->have_posts()) {

            while ($blog_posts->have_posts()) {
                $blog_posts->the_post();
                $blog_posts->post->formatted_post_date = date('F j, Y',strtotime($blog_posts->post->post_date) );
                $blog_posts->post->permalink = get_permalink($blog_posts->post->ID);
                $blog_posts->post->excerpt = get_the_excerpt($blog_posts->post->ID);
                $blog_posts->post->image = get_field('header_image', $blog_posts->post->ID);
                $blog_posts->post->categories = wp_get_post_terms($blog_posts->post->ID, 'category');

                array_push($blog_post_items, $blog_posts->post);
            }
        }

        $big = 999999999; // need an unlikely integer

        $pagination = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $blog_posts->max_num_pages,
            'prev_next' => false
        ) );

        wp_reset_postdata();

        $params = array(
            'posts' => $blog_post_items,
            'wp_query' => $blog_posts,
            'pagination' => $pagination
        );

        return $params;

    }

    public function params() {
        return $_GET;
    }

}
global $post;
new Blog_Page( $post->ID );
