<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; tex  t-align:right; color:#eee;
   margin:-40px 0px -50px 0px; }
</style>
EOF;
$body = '</head><body>';
$end = '</body></head>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{

    public function index(Request $request, Response $response) {
        $data = [
            'msg'=>'これはBladeを利用したサンプルです。',
        ];
        return view('index', $data);
    }

    public function other() {
        global $head, $style, $body, $end;

        $html = $head . tag('title','Hello/Other')
            . $style . $body . tag('h1','Other')
            . tag('p','this is Other page') . $end;
        return $html;
    }
}

