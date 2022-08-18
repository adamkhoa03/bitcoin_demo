<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.md5.js"></script>
    <title>Bitcoint miner JS</title>
</head>

<body>
    <input type="number" id="level">
    <button id="submit">Bitcoin Rush</button>
    <div>F12 to open log</div>
    <p id="result">
    </p>
</body>

</html>
<script>
    $(document).ready(function () {
        $("#submit").click(function (e) {
            e.preventDefault()
            let level = $('#level').val()
            let difficult = ''
            for (let index = 0; index < level; index++) {
                difficult = difficult + '0'

            }
            let timestamp = new Date($.now())
            let data = 'minh khoa'
            let nounce = 0
            let hash = ''
            let output = ''
            while (!hash.startsWith(difficult)) {
                nounce += 1
                hash = $.MD5(timestamp + data + nounce)
                console.log(hash)
            }
            $('#result').text('Number nounce is: ' + nounce)

        });
    });
</script>