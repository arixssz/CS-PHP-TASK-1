<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 2 - Horror</title>
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
            background-image: url("hand.jpg");
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
        echo "<h1>The Phantom's Lament</h1>";
        echo "<p>You find yourself in a desolate graveyard, the moon shrouded behind thick clouds. 
              The crunch of your footsteps on the gravel path is the only sound in the chilling silence. 
              As you walk deeper, you notice ancient tombstones etched with names long forgotten. 
              The wind howls softly, carrying with it the faint melody of a mournful tune, almost like a weeping violin.</p>";

        echo "<p>The melody grows louder as you approach a decrepit mausoleum at the center of the graveyard. 
              Its iron gates creak open as though inviting you in. Against all logic, you step inside, 
              where a grand piano sits covered in dust. Suddenly, the keys begin to move on their own, 
              playing the haunting tune you heard outside. A spectral figure appears, translucent and draped in tattered rags, 
              its hollow eyes fixed on you. The air becomes suffocating, and you feel an overwhelming sadness enveloping you.</p>";

        echo "<p>The ghostly figure speaks in a voice that seems to echo from the depths of the grave: 
              'I have waited for so long.' It steps closer, its outstretched hands glowing faintly. 
              You back away, but the mausoleum walls seem to close in, trapping you. The melody intensifies, 
              and the ghost lets out a heart-wrenching scream. As everything fades to black, you realize 
              this encounter is more than a fleeting nightmare—it’s a call to join the lament for eternity.</p>";
        ?>
        <a href="index.html" class="back-button">Go Back</a>
    </div>
</body>
</html>
