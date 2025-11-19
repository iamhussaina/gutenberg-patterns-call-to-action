<?php
/**
 * Class Hussainas_Pattern_Manager
 *
 * Handles the registration of custom block patterns and pattern categories.
 *
 * @package Hussainas_Patterns
 */

if ( ! class_exists( 'Hussainas_Pattern_Manager' ) ) {

    /**
     * Main manager class.
     */
    class Hussainas_Pattern_Manager {

        /**
         * Unique namespace for the patterns.
         *
         * @var string
         */
        private $namespace = 'hussainas';

        /**
         * Hook into WordPress.
         */
        public function run() {
            add_action( 'init', array( $this, 'register_patterns' ) );
        }

        /**
         * Register block patterns and categories.
         *
         * @return void
         */
        public function register_patterns() {
            
            // Check if the block pattern function exists.
            if ( ! function_exists( 'register_block_pattern' ) ) {
                return;
            }

            // 1. Register a custom category (Optional: helps organize your patterns in the editor).
            register_block_pattern_category(
                $this->namespace . '-marketing',
                array( 'label' => __( 'Hussainas Marketing', 'hussainas' ) )
            );

            // 2. Register the Call to Action pattern.
            register_block_pattern(
                $this->namespace . '/cta-modern-dark',
                array(
                    'title'       => __( 'Modern Dark Call to Action', 'hussainas' ),
                    'description' => __( 'A dark themed call to action section with heading, text, and button.', 'hussainas' ),
                    'categories'  => array( $this->namespace . '-marketing' ),
                    'keywords'    => array( 'cta', 'call to action', 'dark', 'button' ),
                    'content'     => $this->get_cta_pattern_content(),
                )
            );
        }

        /**
         * Returns the raw HTML content for the CTA pattern.
         * * This markup uses WordPress core blocks (Group, Heading, Paragraph, Buttons).
         * No external dependencies are required.
         *
         * @return string HTML content of the block pattern.
         */
        private function get_cta_pattern_content() {
            return '
                <div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)">
                    
                    <div class="wp-block-group">
                        
                        <h2 class="wp-block-heading has-text-align-center" style="font-size:3.5rem;line-height:1.2">' . esc_html__( 'Elevate Your Business Today', 'hussainas' ) . '</h2>
                        <p class="has-text-align-center" style="font-size:1.25rem">' . esc_html__( 'Join thousands of satisfied customers who have transformed their workflow with our solutions. Start your journey now.', 'hussainas' ) . '</p>
                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                            <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" style="border-radius:4px">' . esc_html__( 'Get Started', 'hussainas' ) . '</a></div>
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" style="border-radius:4px">' . esc_html__( 'Learn More', 'hussainas' ) . '</a></div>
                            </div>
                        </div>
                    </div>
                ';
        }
    }
}
