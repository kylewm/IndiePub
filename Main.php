<?php

    namespace IdnoPlugins\IndiePub {

        class Main extends \Idno\Common\Plugin {
            function registerPages() {

                \Idno\Core\site()->addPageHandler('/indieauth/auth/?', '\IdnoPlugins\IndiePub\Pages\IndieAuth\Auth',true);
                \Idno\Core\site()->addPageHandler('/indieauth/approve/?', '\IdnoPlugins\IndiePub\Pages\IndieAuth\Approve',true);
                \Idno\Core\site()->addPageHandler('/indieauth/callback/?', '\IdnoPlugins\IndiePub\Pages\IndieAuth\Callback',true);
                \Idno\Core\site()->addPageHandler('/indieauth/token/?', '\IdnoPlugins\IndiePub\Pages\IndieAuth\Token',true);
                \Idno\Core\site()->addPageHandler('/micropub/endpoint/?', '\IdnoPlugins\IndiePub\Pages\MicroPub\Endpoint',true);
                \Idno\Core\site()->template()->extendTemplate('shell/head','indiepub/shell/head');

                header('Link: <'.\Idno\Core\site()->config()->getURL().'indieauth/auth>; rel="authorization_endpoint"');
                header('Link: <'.\Idno\Core\site()->config()->getURL().'indieauth/token>; rel="token_endpoint"');
                header('Link: <'.\Idno\Core\site()->config()->getURL().'micropub/endpoint>; rel="micropub"');
            }
        }

    }