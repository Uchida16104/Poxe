<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-38606SS5F6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
   
    gtag('config', 'G-38606SS5F6');
  </script>
  <script type="text/javascript" data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autoblocking/31566d9c7185e.js" data-cmp-host="a.delivery.consentmanager.net" data-cmp-cdn="cdn.consentmanager.net" data-cmp-codesrc="16"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                                                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                        })(window,document,'script','dataLayer','GTM-MWTK6627');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset='utf-8' />
  <meta name="viewport" , content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" , content="IE=edge" />
  <meta http-equiv="Content-Style-Type" , content="text/css" />
  <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
  <script defer src="https://pyscript.net/latest/pyscript.js">
  </script>
  <script type="application/ld+json" src="./script.json">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sass.js/0.11.1/sass.sync.min.js">
  </script>
  <script src="https://unpkg.com/@neos21/in-browser-sass@1.0.8/in-browser-sass.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js">
  </script>
  <link rel="stylesheet/css" type="text/css" href="./style.css">
  <link rel="stylesheet/sass" type="text/sass" href="./style.sass">
  <link rel="stylesheet/scss" type="text/scss" href="./style.scss">
  <link rel="stylesheet/less" type="text/less" href="./style.less">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/alasql@4">
  </script>
  <script type="text/javascript" src="./sql.js">
  </script>
  <script src="https://unpkg.com/wisp@0.13.0/wisp.js">
  </script>
  <script type="application/wisp" src="./script.wisp">
  </script>
  <script type="text/javascript" src="./client.js" defer>
  </script>
  <script type="text/javascript" src="./server.js">
  </script>
  <script type="text/javascript" src="./script.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typescript/4.7.4/typescript.min.js">
  </script>
  <script type="text/javascript" src="./app.js">
  </script>
  <script src="https://cdn.opalrb.com/opal/0.8.1/opal.js">
  </script>
  <script src="https://cdn.opalrb.org/opal/0.8.0/native.js">
  </script>
  <script src="https://cdn.opalrb.com/opal/0.8.1/opal-parser.js">
  </script>
  <script type="text/javascript">
  Opal.load("opal-parser");
  </script>
  <script type="text/ruby" src="./script.rb">
  </script>
  <script type="text/javascript">
    ;(function() {
      var pkg = {};
      pkg["../.."] = (function() {
        function main () {
          window.alert("Hello, Go!")
        };
        return {
          main: main
        };
      })();
      return pkg["../.."].main();
    })()
  </script>
  <script src='https://github.com/fengari-lua/fengari-web/releases/download/v0.1.4/fengari-web.js'>
  </script>
  <script type="application/lua" src="./script.lua">
  </script>
  <script src="https://cjrtnc.leaningtech.com/3.0/cj3loader.js">
  </script>
  <script>
    function setProgress(progress) {
      document.querySelector('#progressinner').style.width=progress+'%';
    }
    function setLabel1(label) {
      document.querySelector('#label1').textContent=label;
    }
    function setLabel2(label) {
      document.querySelector('#label2').textContent=label;
    }
    function getClassPathPrefix() {
      let path = window.location.pathname;
      path = path.replace(/\/[^\/]+\.[^\/]+$/, '/');
      if (!path.endsWith('/')) {
        path += '/';
      }
      return '/app' + path;
    }
    function prefixClassPath(prefix, classPath) {
      let paths = classPath.split(':');
      paths = paths.map(path => prefix + path);
      classPath = paths.join(':');
      return classPath;
    }
    async function javaGUI() {
      setLabel1("Loading Test Swing11");
      setLabel2("Initializing CheerpJ Runtime...");
      setProgress(10);
      window.cj1 = await cheerpjInit();
      setProgress(50);
      window.cj2 = await cheerpjCreateDisplay(800, 600);
      setProgress(75);
      setLabel2("Preparing application components...");
      const cj = await cheerpjRunLibrary(prefixClassPath(getClassPathPrefix(), "test-swing11-1.0-SNAPSHOT.jar:jdeploy-cheerpj.jar"));
      setProgress(85);
      const CheerpjSwingUtils = await cj.com.jdeploy.cheerpj.CheerpjSwingUtils;  
      async function onWindowResize() {
        document.getElementById("cheerpjDisplay").style.height = '100%';
        document.getElementById("cheerpjDisplay").style.width = '100%';
        await CheerpjSwingUtils.onResize();
      }
      window.addEventListener("resize", onWindowResize);
      setProgress(90);
      await CheerpjSwingUtils.launchNoArgs('src.com.demo.App');
      setProgress(95);
      document.getElementById('cheerpjDisplay').classList.add('finished-loading');
      await onWindowResize();
      setProgress(100);
      document.getElementById('content').style.display = 'none';
      document.getElementById('icon-wrapper').style.display = 'none';
      document.getElementById('app-title').style.display = 'none';
    };
    javaGUI();
  </script>
  <link rel="stylesheet" type="text/css" href="https://cjrtnc.leaningtech.com/3_20230915_194/cheerpj.css" media="screen">
  <script src="https://cjrtnc.leaningtech.com/3_20230915_194/cheerpOS.js">
  </script>
  <?php
  $GLOBALS['title'] = 'Poxe';
  $GLOBALS['title_lower'] = strtolower($GLOBALS['title']);
  $GLOBALS['subtitle'] = 'by PHP';
  $GLOBALS['h1'] = rand(36, 40);
  $GLOBALS['h2'] = rand(31, 35);
  $GLOBALS['h3'] = rand(26, 30);
  $GLOBALS['h4'] = rand(21, 25);
  $GLOBALS['h5'] = rand(16, 20);
  $GLOBALS['p'] = rand(10, 15);
  $GLOBALS['a'] = rand(0, 1000);
  $GLOBALS['color0'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['color1'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['color2'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['color3'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['color4'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['color5'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['color6'] = dechex(rand(0, pow(2, 32)));
  $GLOBALS['height0'] = rand(10, pow(10, 2));
  $GLOBALS['height1'] = rand(10, pow(10, 2));
  $GLOBALS['width0'] = rand(100, pow(10, 2));
  $GLOBALS['width1'] = rand(100, pow(10, 2));
  $GLOBALS['degree0'] = rand(0, 360);
  $GLOBALS['degree1'] = rand(0, 360);
  $GLOBALS['degree2'] = rand(0, 360);
  $GLOBALS['degree3'] = rand(0, 360);
  $GLOBALS['degree4'] = rand(0, 360);
  $GLOBALS['animation'] = rand(0, 100);
  $GLOBALS['time'] = rand(0, 600);
  ?>
  <title>
    <?php echo $GLOBALS['title']; ?>
  </title>
  <style>
    * {
      height: <?php echo $GLOBALS['height0']; ?>px;
      width: <?php echo $GLOBALS['width0']; ?>%;
      background-image: conic-gradient(from 0deg, #<?php echo $GLOBALS['color0']; ?> <?php echo $GLOBALS['degree0']; ?>deg, #<?php echo $GLOBALS['color1']; ?> <?php echo $GLOBALS['degree1']; ?>deg, #<?php echo $GLOBALS['color2']; ?> <?php echo $GLOBALS['degree2']; ?>deg, #<?php echo $GLOBALS['color3']; ?> <?php echo $GLOBALS['degree3']; ?>deg, #<?php echo $GLOBALS['color4']; ?> <?php echo $GLOBALS['degree4']; ?>deg, #<?php echo $GLOBALS['color5']; ?> 360deg);
      animation-name: scale-change;
      animation-duration: <?php echo $GLOBALS['time']; ?>s;
      animation-timing-function: ease-in-out, step-start, step-end, cubic-bezier(0, 0.5, 1, 0.5);
    }
    @keyframes scale-change {
      0% {
        height: <?php echo $GLOBALS['height0']; ?>px;
        width: <?php echo $GLOBALS['width0']; ?>%;
      }
      <?php echo $GLOBALS['animation']; ?>% {
        height: <?php echo $GLOBALS['height1']; ?>px;
        width: <?php echo $GLOBALS['width1']; ?>%;
      }
      100% {
        height: <?php echo $GLOBALS['height0']; ?>px;
        width: <?php echo $GLOBALS['width0']; ?>%;
      }
    }
    h1 {
      font-size: <?php echo $GLOBALS['h1']; ?>px;
    }
    h2 {
      font-size: <?php echo $GLOBALS['h2']; ?>px;
    }
    h3 {
      font-size: <?php echo $GLOBALS['h3']; ?>px;
    }
    h4 {
      font-size: <?php echo $GLOBALS['h4']; ?>px;
      color: #<?php echo $GLOBALS['color6']; ?>;
    }
    h5 {
      font-size: <?php echo $GLOBALS['h5']; ?>px;
    }
    p {
      font-size: <?php echo $GLOBALS['p']; ?>px;
    }
    a {
      font-weight: <?php echo $GLOBALS['a']; ?>;
    }
    button {
      padding: 2px 6px;
      border: 2px solid #767676;
      background-color: #f3f3f3;
      color: black;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
      width:0.1%;
      height:10%;
      display: inline-block;
    }
  </style>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWTK6627"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <h1><?php echo $GLOBALS['title']; ?></h1>
  <h2><?php echo $GLOBALS['subtitle']; ?></h2>
  <?php
  $output = shell_exec('perl script.pl && rustc main.rs && ./main && gcc -o hello hello.c 2>&1 && ./hello 2>&1');
  echo "<pre>$output</pre>";
  ?>
  <div id="container"></div>
  <div id="modal"></div>
  <py-config>
  packages = ["pandas", "numpy", "matplotlib", "levenshtein-distance", "Janome", "requests", "pyodide-http"]
  </py-config>
  <py-repl></py-repl>
  <h3>Scroll</h3>
  <canvas id="scrollable"></canvas>
  <button onclick="location.href='./info.php'">The PHPINFO page</button>
  <button onclick="location.href='./form.php'">Enter your information into the form</button>
  <button onclick="location.href='./connection.php'">SQL connection result</button>
  <button onclick="location.href='./management.php'">BASIC authentication control panel</button>
  <h5>Document for
    <ul>
      <li><button onclick="location.href='https://github.com/Uchida16104/<?php echo $GLOBALS['title']; ?>'">GitHub</button></li>
      <li><button onclick="location.href='<?php echo "https://glitch.com/~".$GLOBALS['title_lower']; ?>'">Glitch</button></li>
      <li><button onclick="location.href='https://lit.link/hirotoshiuchida'">Hirotoshi Uchida</button>
  </ul>
</body>
</html>
