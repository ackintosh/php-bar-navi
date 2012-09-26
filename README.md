#BAR-NAVIのAPIをたたくためのPHPライブラリ

The build status of the current master branch is tracked by Travis CI:  

- *BAR-NAVI by SUNTORY*  
[http://bar-navi.suntory.co.jp](http://bar-navi.suntory.co.jp/)  

- *SUNTORY BAR-NAVI Web API 利用ガイド*  
[http://webapi.suntory.co.jp/barnavidocs/api.html](http://webapi.suntory.co.jp/barnavidocs/api.html)  

##サンプルコード

    $client = new \BARNAVI\Client('api-key');
    $response = $client->request(array(
        'pattern'   => 0,
        'url'       => 'http://example.com',
        'pref'      => 13,
        'format'    => 'json',
    ));

    var_dump($response->getData());

指定可能なパラメータはAPI利用ガイドを参照してください。

##動作環境
PHP5.3以上

##インストール
composer経由でインストールできます。  

`composer.json` ファイルに下記のように記述してください。

    {
        "require": {
            "ackintosh/php-bar-navi": "dev-master"
        }
    }

composerでインストールしてください。

    $ php composer.phar install

`vendor/autoload.php` をインクルードしてください。

    require_once 'vendor/autoload.php';

##ライセンス
MIT License
