<?php

    namespace IdnoPlugins\Soundcloud {
        class Main extends \Idno\Common\Plugin {
            function registerPages() {                
                \Idno\Core\site()->template()->extendTemplate('entity/content/embed','soundcloud/embed');
		\Idno\Core\site()->template()->extendTemplate('shell/footer','soundcloud/footer');
            }
        }
    }
