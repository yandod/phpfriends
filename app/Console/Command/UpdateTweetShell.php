<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yandod
 * Date: 2013/07/14
 * Time: 23:02
 * To change this template use File | Settings | File Templates.
 */
class UpdateTweetShell extends AppShell {

    public $uses = array(
        'Photo'
    );
    public function main() {
        $twitter = new Twitter(
            Configure::read('consumerKey'),
            Configure::read('consumerSecret'),
            Configure::read('accessToken'),
            Configure::read('accessTokenSecret')
        );
        $results = $twitter->search(array(
            'q' => Configure::read('hashTag'),
            'include_entities' => true
        ));
        foreach ($results as $result) {
            if (
                count($result->entities) == 0
                || !isset($result->entities->media)
            ) {
                continue;
            }
            var_dump($result->id);
            var_dump($result->text);
            var_dump($result->entities->media[0]->media_url);
            $this->Photo->save(
                array(
                    'id' => $result->id,
                    'text' => $result->text,
                    'url' => $result->entities->media[0]->media_url
                )
            );
            echo '======' . "\n";
        }
        $this->out('Done.');
    }
}