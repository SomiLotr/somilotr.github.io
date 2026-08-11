<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Public keys</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style> 
          body {
            font-family: system-ui, sans-serif;
            max-width: 700px;
            margin: 80px auto;
            padding 0 24px; 
            line-height:1.6;
          }
          ul { padding-left: 20px; }
          a { color: #0066cc; text-decoration: none; }
          a:hover {text-decoration: underline; }
          code { background: #f4f4f4; padding: 2px 6px; border-radius: 4px; }
        </style>
    </head> 
    <body>
        <h1>Public Keys</h1>
        <p>Directory contents for <code>/keys/</code>:</p>

        <ul>
          <?php
          
          $files = scandir(__DIR__);
          foreach ($files as $file) { 
            if ($file[0] !== '.' && $file !== 'index.php') { 
                echo '<li><a href="' .htmlspecialchars($file) . '">' . htmlspecialchars($file) . </a></li>;
            }
          }
          ?>
        </ul>
    </body>
</html>

