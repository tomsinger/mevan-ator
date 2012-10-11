<!doctype html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta http-equiv="Content-Language" content="en-GB" />
  <meta name="language" content="en" />
  <title></title>

  <script type="text/javascript" charset="utf-8">
    var mevanator = {
      "reporting_level" : 1,
      "beacon_url":"http:\/\/beacon.89pies.com\/",
      "timeout" : 500,
      "third_party_code":[
        "http:\/\/thirdparty.89pies.com/js/thirdparty/slow.js"
      ]
    };

    mevanator.uid = (new Date().getTime()) + "" + Math.floor((Math.random()*1000));
    mevanator.start_time = new Date();
  </script>

  <script src="/js/yepnope/yepnope.js" type="text/javascript"></script>

  
  <script type="text/javascript">
    yepnope({
      load: 'timeout=500!http://thirdparty.89pies.com/js/thirdparty/slow.js',
      callback: function (url, result, key) {
        // whenever this runs, your script has just executed.
        console.log('slow.js has loaded!');
      },
      complete: function () {
        console.log('complete');
      }
    });
  </script>

</head>

<body>
</body>
</html>
