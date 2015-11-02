<!DOCTYPE html>
<html>

<head>
    <title> OpenTok Getting Started </title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">

    <script src="https://static.opentok.com/v2/js/opentok.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>

    <div id="videos">
        <div id="subscriber"></div>
        <div id="publisher"></div>
    </div>
    <div id="buttonholder">
       <div id="buttons">
            <button type="button" id="start" onClick="javascript:startArchive()" class="btn btn-danger start">Start Archive</button>
            <button type="button" id="start-audio" onClick="javascript:startArchive(true)" class="btn btn-danger start">Start Archive (audio only)</button>
            <button type="button" id="stop" onClick="javascript:stopArchive()" class="btn btn-danger">Stop Archive</button>
            <button type="button" id="view" onClick="javascript:viewArchive()" class="btn btn-danger" disabled>View Archive</button>
       </div>
    </div>

    <script type="text/javascript">
        var SAMPLE_SERVER_BASE_URL = '<?php echo getenv('SDK_SERVER_URL')?>';
    </script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>
