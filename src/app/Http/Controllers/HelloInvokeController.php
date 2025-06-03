<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloInvokeController extends Controller
{
    public function __invoke(): string
    {

        return <<<EOF
      <html>
        <head>
          <title>Hello</title>
          <style>
          body {font-size:16pt; color:#999; }
          h1 { font-size:50pt; text-align:right; color:#eee;
            margin:-25px 0px 0px 0px; }
          </style>
        </head>
        <body>
          <h1>Single Action</h1>
          <p>これは、シングルアクションコントローラーのアクションです。</p>
        </body>
      </html>
      EOF;
    }
}
