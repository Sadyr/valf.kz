<?php

namespace cnb;

// don't load directly
defined( 'ABSPATH' ) || die( '-1' );

use cnb\admin\api\RemoteTrace;
use cnb\admin\api\RemoteTracer;
use cnb\utils\CnbUtils;

class CnbFooter {

    /**
     * @var CnbUtils
     */
    private $utils;

    public function __construct() {
        $this->utils = new CnbUtils();
    }

    public function render() {
        $this->cnb_show_feedback_collection();
        $this->cnb_show_api_traces();
        $this->add_usage_details();
        echo '</div> <!-- /wrap -->'; // This is started in CnbHeader::
    }

    private function cnb_show_feedback_collection() {
        $cnb_options = get_option( 'cnb' );
        $cnb_utils   = new CnbUtils();

        $url          = admin_url( 'admin.php' );
        $upgrade_link =
            add_query_arg(
                array( 'page' => 'call-now-button-upgrade' ),
                $url );

        ?>
        <div class="feedback-collection">
            <div class="cnb-clear"></div>
            <p class="cnb-url cnb-center"><a
                        href="<?php echo esc_url( $cnb_utils->get_website_url( '', 'footer-links', 'branding' ) ) ?>"
                        target="_blank">Call Now Button<?php if ( $cnb_utils->isCloudActive( $cnb_options ) ) {
                        echo '<span class="cnb_footer_beta">CLOUD</span>';
                    } else { echo '<span class="cnb_footer_beta">Lite</span>'; } ?></a></p>
            <p class="cnb-center">Version <?php echo esc_attr( CNB_VERSION ) ?>
            <p class="cnb-center cnb-spacing">
                <a href="<?php echo esc_url( $cnb_utils->get_support_url( '', 'footer-links', 'support' ) ) ?>"
                   target="_blank"
                   title="Support">Support</a> &middot;
                <a href="<?php echo esc_url( $cnb_utils->get_support_url( 'feature-request/', 'footer-links', 'suggestions' ) ) ?>"
                   target="_blank" title="Feature Requests">Suggestions</a>
                <?php if ( ! $cnb_utils->isCloudActive( $cnb_options ) ) { ?>
                    &middot; <strong><a href="<?php echo esc_url( $upgrade_link ) ?>"
                                        title="Unlock features">Enable cloud</a></strong>
                <?php } ?>
            </p>
        </div>
        <?php
    }

    /**
     * Error reporting is optional and disabled by default.
     *
     * It needs to be enabled via Settings in order to take effect.
     *
     * This adds some context data for the Error reporting integration to use to collect context
     * in case of an error.
     *
     * @return void
     */
    private function add_usage_details() {
        global $wp_version;
        if ($this->utils->is_reporting_enabled()) {
            echo sprintf('<template
                                    id="cnb-data"
                                    data-wordpress-version="%1$s"
                                    data-wordpress-environment="%2$s"
                                    data-plugin-version="%3$s"
                                    "></template>',
                esc_attr($wp_version),
                esc_attr(WP_DEBUG ? 'development' : 'production'),
                esc_attr(CNB_VERSION)
            );
        }
    }

    public function is_show_traces() {
        $cnb_options = get_option( 'cnb' );
        return ! wp_doing_ajax()
               // phpcs:ignore WordPress.Security
               && empty( $_POST )
               && isset( $cnb_options['footer_show_traces'] ) && $cnb_options['footer_show_traces'] == 1
               && isset( $cnb_options['advanced_view'] ) && $cnb_options['advanced_view'] == 1;
    }

    private function cnb_show_api_traces() {
        if ( $this->is_show_traces() ) {
            $cnb_remoted_traces = RemoteTracer::getInstance();
            $traces = $cnb_remoted_traces->getTraces();
            if ( $traces ) {
                $this->print_traces($traces);
            }
        }
    }

    /**
     * @param $traces RemoteTrace[]
     *
     * @return void
     */
    public function print_traces($traces) {
        if (!$traces || count($traces) === 0) {
            return;
        }

        echo '<p>';
        echo '<strong>' . count( $traces ) . '</strong> remote call' . (count( $traces ) !== 1 ? 's' : '') . ' executed';
        $totaltime = 0.0;
        foreach ( $traces as $trace ) {
            $totaltime += (float) $trace->getTime();
        }
        echo ' in <strong>' . esc_html( $totaltime ) . '</strong>sec:<br />';

        echo '<ul>';
        foreach ( $traces as $trace ) {
            $this->print_trace($trace);
        }
        echo '</ul>';

        echo '</p>';
    }

    private function print_trace($trace) {
        echo '<li>';
        echo '<code>' . esc_html( $trace->getEndpoint() ) . '</code> in <strong>' . esc_html( $trace->getTime() ) . '</strong>sec';
        if ( $trace->isCacheHit() ) {
            echo ' (from cache)';
        }
        echo '.</li>';

    }
}
