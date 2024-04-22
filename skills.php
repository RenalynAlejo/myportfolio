<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Monica V. Lazaro</title>
    <style>
        body {
            background: linear-gradient(to bottom right, #000000, #808080, #ffffff);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }
        #header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
        #container {
            padding: 20px;
        }
        .skill {
            margin-bottom: 20px;
        }
        .skill-title {
            font-size: 20px;
            margin-bottom: 5px;
        }
        .progress-bar {
            width: 100%;
            background-color: #555;
            border-radius: 5px;
            padding: 3px;
            box-sizing: border-box;
        }
        .progress {
            background-color: #4CAF50;
            height: 30px;
            border-radius: 5px;
            text-align: right;
            padding-right: 10px;
            box-sizing: border-box;
            transition: width 1s ease-in-out;
        }
    </style>
</head>
<body>

<div id="header">
    <h1>Skills - Monica V. Lazaro</h1>
</div>

<div id="container">
    <div class="skill">
        <div class="skill-title">Critical Thinking</div>
        <div class="progress-bar">
            <div class="progress" style="width: 100%;">100%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-title">Public Speaking</div>
        <div class="progress-bar">
            <div class="progress" style="width: 50%;">50%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-title">Taking Initiative</div>
        <div class="progress-bar">
            <div class="progress" style="width: 80%;">80%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-title">Leadership</div>
        <div class="progress-bar">
            <div class="progress" style="width: 85%;">85%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-title">Teamwork</div>
        <div class="progress-bar">
            <div class="progress" style="width: 90%;">90%</div>
        </div>
    </div>

    <div class="skill">
        <div class="skill-title">Writing</div>
        <div class="progress-bar">
            <div class="progress" style="width: 80%;">80%</div>
        </div>
    </div>
</div>

<script>
    // Add animation effect to progress bars
    let progressBars = document.querySelectorAll('.progress');
    progressBars.forEach((progress) => {
        let width = progress.style.width;
        progress.style.width = '0';
        setTimeout(() => {
            progress.style.width = width;
        }, 100);
    });
</script>

</body>
</html>
