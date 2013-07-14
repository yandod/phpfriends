<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yandod
 * Date: 2013/07/14
 * Time: 23:02
 * To change this template use File | Settings | File Templates.
 */
class UpdateTweetShell extends AppShell {
    public function main() {
        $twitter = new Twitter(
            Configure::read('consumerKey'),
            Configure::read('consumerSecret'),
            Configure::read('accessToken'),
            Configure::read('accessTokenSecret')
        );
        $results = $twitter->search(Configure::read('hashTag'));
        foreach ($results as $result) {
            //var_dump($result);
            if (
                count($result->entities) == 0
                || !isset($result->entities->media)
                // || count($result->entities->media) == 0
            ) {
                continue;
            }
            var_dump($result->id);
            var_dump($result->text);
            var_dump($result->entities->media[0]->media_url);
            echo '======' . "\n";
        }
        $this->out('Done.');
    }
}