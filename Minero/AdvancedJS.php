<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdvanceJS Monero</title>
</head>
<body>
    <h2>JavaScriptAPI</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis ut tempore ex quisquam natus a voluptas exercitationem quas ab distinctio repudiandae, molestiae voluptates omnis quae et ipsa accusantium qui suscipit?</p>
    
    <script>
        // Get stats
        var hashesPerSecond = miner.getHashesPerSecond();
        var totalHashes = miner.getTotalHashes();
        // Change settings
        miner.setNumThreads(2);
        // Listen to events
        miner.on('found', function() { /* Hash found */ });
        miner.on('accepted', function() { /* Hash accepted by the pool */ });
    </script>
</body>
</html>