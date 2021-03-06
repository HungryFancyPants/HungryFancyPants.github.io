<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cal.css">
    <title>Weight Converter</title>
</head>
<body>

    <div class="cal_container">
        <h1 id="mainHeading"></h1>
        <button class="btn kilograms" name="kg"></button>
        <button class="btn grams" name="gm"></button>
        <button class="btn pounds" name="lbs"></button>
        <button class="btn ounces" name="oz"></button>
        <a href="index.html"><span class="homepagee">HOMEPAGE</span></a><br>

        <div class="result_heading">
            <input type="number"  id="hide" class="userWeight" placeholder="Type your weight here..." min="0">
            <button id="hide" class="disableBtn unitName" disabled></button>
            <button id="hide" class="calculateBtn"></button>

        </div>
        <div class="resultContainer" id="hide">
            <div class="resultBox"></div><br>
            <div class="resultBox"></div><br>
            <div class="resultBox"></div><br>
        </div>
        <button id="hide" class="backBtn"></button>
    </div>

<script src="cal_enhancements.js"></script>

</body>
</html>
