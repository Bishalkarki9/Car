<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 48px;
            margin: 0;
        }

        p {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        button {
            font-size: 20px;
            padding: 10px 20px;
            background-color: #1abc9c;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #16a085;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to our Landing Page</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at justo ac orci ultrices fermentum id ut sem. Fusce euismod risus vel risus finibus, ut tincidunt nulla venenatis. Vestibulum ut metus sed sapien dignissim accumsan non vitae justo. Donec luctus interdum massa, id suscipit augue convallis vel.</p>
        <button>Get Started</button>
    </div>
    <script>
        // Add your JavaScript code here
        document.querySelector('button').addEventListener('click', function() {
            alert('Thanks for clicking the button!');
        });
    </script>
</body>
</html>
