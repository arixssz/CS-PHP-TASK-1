<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 3 - Horror</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #1a1a2e;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background-image: url("kayako.jpg");
            background-size: cover;
        }

        .story-container {
            background-color: #2a2a3e;
            padding: 40px;
            border-radius: 15px;
            max-width: 800px;
            text-align: center;
            opacity: 0;
            animation: fadeIn 2s forwards;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        h1 {
            color: #ff6b6b;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.8;
        }

        .back-button {
            margin-top: 30px;
            padding: 10px 20px;
            border: none;
            background-color: #ff6b6b;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #e63946;
        }
    </style>
</head>
<body>
    <div class="story-container">
        <?php
        echo "<h1>The Whispering Shadows</h1>";
        echo "<p>As you step through the third door, the world around you transforms into a cold, dimly lit forest. 
              The trees loom overhead, their twisted branches forming eerie shapes against the dark sky. 
              A thick fog curls around your feet, and distant whispers echo through the still air. 
              The whispers seem to call your name, growing louder with each step you take, as if the forest itself 
              is alive and aware of your presence.</p>";

        echo "<p>Deeper into the woods, you stumble upon a clearing where a decrepit cabin stands. 
              Its windows are shattered, and the door hangs loosely on its hinges. Against your better judgment, 
              you enter. Inside, the air is thick with decay, and strange symbols are scrawled across the walls 
              in what appears to be dried blood. A faint light flickers in the corner, and as you approach, 
              you see a weathered journal lying open. Its pages detail the horrific experiments of a man obsessed 
              with summoning beings from another realm.</p>";

        echo "<p>A sudden chill runs down your spine as you hear a low growl from behind you. 
              Turning slowly, you come face-to-face with a shadowy figure, its eyes glowing an unnatural red. 
              The whispers become deafening as the figure steps closer, its form shifting and contorting like 
              smoke. Before you can move, the shadows engulf you, and you feel yourself being pulled into darkness. 
              The last thing you hear is your own scream echoing endlessly in the void.</p>";
        ?>
        <a href="index.html" class="back-button">Go Back</a>
    </div>
</body>
</html>
