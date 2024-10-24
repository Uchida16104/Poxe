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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication page</title>  
    <script>
       function authenticate() {
           const username = prompt('Please enter user name:');
           const password = prompt('Please enter password:');
           const users = JSON.parse(localStorage.getItem('users')) || [];

           const user = users.find(user => user.username === username && user.password === password);

           if (user) {
               alert('Authentication succeeded!');
               window.location.href = 'welcome.php';
           } else {
               alert('Authentication failed.');
               window.location.href = 'error.php';
           }
       }

       function checkAuthStatus() {
           const isAuthenticated = localStorage.getItem('isAuthenticated');
           if (!isAuthenticated) {
               authenticate();
           }
       }

      function markAuthenticated() {
           localStorage.setItem('isAuthenticated', 'true');
       }

       window.onload = () => {
           checkAuthStatus();
       };
  </script>
  </head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWTK6627"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <h1>BASIC Authentication Page</h1>
</body>
</html>
