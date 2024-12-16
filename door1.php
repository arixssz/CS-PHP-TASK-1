<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 1 - Horror</title>
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
            background-image: url("phobia.png");
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
        echo "<h1>The Forgotten Asylum</h1>";
        echo "<p>As you step through the door, the air grows colder, and the faint echo of whispers reaches your ears. 
              You're standing in the hallway of an abandoned asylum, the walls covered in peeling paint and cryptic messages scrawled in red. 
              Shadows flicker as if alive, moving just at the edge of your vision. The stench of decay fills your nostrils, 
              and the oppressive silence presses against your ears like a living entity.</p>";

        echo "<p>A sudden scream pierces the silence, and you turn to see a figure darting into one of the rooms ahead. 
              Against your better judgment, you follow the sound, your heart pounding in your chest. 
              The room is empty, save for a dusty wheelchair that rocks slightly as though recently disturbed. 
              On the far wall, a message is smeared in what appears to be blood: 
              'Leave while you still can.' A chill runs down your spine as the door you entered slams shut behind you.</p>";

        echo "<p>The dim light overhead flickers, casting eerie shadows across the walls. Suddenly, a voice whispers your name, 
              soft but unmistakable. You spin around, but there's no one there. Your pulse quickens as the whispering grows louder, 
              overlapping into a cacophony of disembodied voices. The walls seem to close in, and you realize with dread 
              that this asylum is no ordinary place. It's alive, and it wants you to stay—forever.</p>";
        ?>
        <a href="index.html" class="back-button">Go Back</a>
    </div>
</body>
</html>
