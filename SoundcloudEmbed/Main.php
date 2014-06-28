<?php

    namespace IdnoPlugins\SoundcloudEmbed {
        class Main extends \Idno\Common\Plugin {
            function registerPages() {                
                \Idno\Core\site()->template()->extendTemplate('entity/content/embed','soundcloudembed/embed');
		\Idno\Core\site()->template()->extendTemplate('shell/footer','soundcloudembed/footer');
            }
        }
    }
