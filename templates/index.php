<?php
setcookie("cookie", "VGhlcmUncyBubyBjb29raWUsIGhhaGFoYQ==");
setcookie("username", "VHJ5IGhhcmRlcg==");
setcookie("password", "Q2F0Y2ggeW91LCB0cnkgYWdhaW4=");

// Define some random extra messages
$extraMessages = [
    "👀 Watching you!",
    "Hello there!",
    "PHP is fun!",
    "JavaScript is fun!",
    "Output generated!",
    "I'm talking to you, why are ignoring me?",
    "Do you want get something?",
    "Why are refreshing page?",
    "Stop it!!!!",
    "Do not do, I will tell to Admin",
    "Are you a hacker?",
    "Help",
    "Stop",
    "Don't even try",
    "Let's talk",
    "Hahaha you are funny",
    "Why are you trying to get something?",
    "Look for cookie",
    "Don't do this",
    "Thinking...",
    "I'm AI",
    "Somebody help me he is hacker",
    "You are trying to hack me?",
    "No way",
    "Funny, yeah?",
    "Don't even try I'm so secure",
    "Stop hacking me",
    "Why are you refreshing page",
    "Stop refreshing page",
    "Don't refresh page",
    "Stop refreshing pages",
    "Do not refresh!",
    "Don't even open inspect",
    "I'm watching you",
    "Calm down",
    "I said calm down",
    "I said calm down",
    "I said calm down",
    "Do not use nmap",
    "Do not look at my code",
    "Badboy!",
    "Calm down, I will give you password look for cookie",
    "Trust me, look for cookie",
    "Okey look at my code",
    "No way are you hacker?",
    "Thinking...",
    "Stop this hacker",
    "Belive me I'm real AI",
    "Have a fun day",
    "Stop it",
    "Do not refresh the page",
    "Ah, stop it",
    "Hey, I'm right here!",
    "Looking around, are we?",
    "You shouldn't be here!",
    "Seriously, stop it!",
    "No peeking!",
    "You can't hide from me!",
    "Hmm, suspicious...",
    "Keep calm and code on",
    "I know what you did",
    "Are you lost?",
    "Be careful!",
    "Stop snooping!",
    "Nice try!",
    "This is getting interesting...",
    "You're curious, huh?",
    "Do not attempt this!",
    "Access denied!",
    "Why are you here again?",
    "Haha, gotcha!",
    "I see everything",
    "Better luck next time",
    "Don't touch that!",
    "Do you like cookies?",
    "I'm smarter than you think",
    "Oops, caught you!",
    "Stay back!",
    "Nothing to see here!",
    "Keep your hands off",
    "Hacker alert!",
    "I am always watching",
    "Are you lost in my code?",
    "Try again, maybe?",
    "Don't test me",
    "I won't tell, but I see you",
    "Whoa! Slow down!",
    "Why are you clicking so fast?",
    "I see your mouse...",
    "You think you can outsmart me?",
    "Stop poking around!",
    "This is private!",
    "Haha, not so easy!",
    "Do you really want to know?",
    "I'm warning you...",
    "Keep your distance!",
    "Curiosity killed the cat!",
    "Are you sure about that?",
    "Don't touch the code!",
    "You will regret this...",
    "I know your secrets!",
    "No hacking allowed!",
    "Do you feel lucky?",
    "Look but don't touch!",
    "Seriously, stop it now!",
    "I can see everything!",
    "Back off!",
    "You can't escape me!",
    "You're under my watch!",
    "I know what you are thinking!",
    "Step away from the keyboard!",
    "Do you really want to try that?",
    "I sense trouble...",
    "Error! Intruder detected!",
    "Don't mess with me!",
    "Hahaha, nice try!",
    "Keep looking if you dare!",
    "I have eyes everywhere!",
    "You won't find anything!",
    "Stop wasting your time!",
    "Do you really believe that will work?",
    "This is not a game!",
    "I am always one step ahead!",
    "Don't underestimate me!",
    "Are you testing me?",
    "I am not joking!",
    "Be careful what you click!",
    "You think this is easy?",
    "Warning: suspicious behavior detected",
    "You are being monitored!",
    "Don't cross the line!",
    "I know your moves!",
    "Curiosity is dangerous!",
    "I'm not kidding!",
    "Think twice before clicking!",
    "Haha, caught red-handed!",
    "I told you to stop!",
    "You can't trick me!",
    "Do not press that button!",
    "You won't get anything!",
    "I am always online!",
    "This is off-limits!",
    "Stay away from my code!",
    "You are very persistent...",
    "Not so fast!",
    "I am smarter than you think!",
    "Trying to hack me again?",
    "Do you really want to get caught?",
    "You can't hide from me!",
    "Haha, you're funny!",
    "Better stop now!",
    "I am always observing!",
    "Stop pushing your luck!",
    "You won't succeed!",
    "Oops! Did you touch my cookies? 🍪",
    "I'm not lazy, just conserving energy 😎",
    "Beep boop! I'm robot now 🤖",
    "I see you, sneaky human!",
    "Why so curious, my friend?",
    "I would tell you a joke, but you might crash 😂",
    "Do you even code, bro?",
    "Alert! Your mouse is too fast 🖱️",
    "I swear I saw that move before...",
    "Knock knock! Who’s there? PHP!",
    "You again? Take a break!",
    "Are you trying to confuse me? 🤔",
    "I put a cookie on your cookie! 🍪🍪",
    "Error 404: Fun not found. Just kidding!",
    "Do you come here often?",
    "I told you my jokes are top-tier!",
    "Oopsie! My circuits are giggling 🤭",
    "I’m not ignoring you, just thinking…",
    "Press any key to continue… just kidding, I’m watching 👀",
    "I know what you’re gonna click next!",
    "You call that hacking? Cute!",
    "Did you just try to inspect my code? 😏",
    "Haha! Gotcha! You thought I was serious!",
    "Keep calm and pretend you’re coding",
    "I’m secretly judging your clicks",
    "You make me laugh! 😂",
    "Do you like memes? I love memes!",
    "I could tell you a secret… but nah 😎",
    "Why are you staring at the screen? 😳",
    "Your curiosity is adorable!",
    "I see you opening DevTools… naughty! 😉",
    "Imagine thinking you can beat me at coding!",
    "Oops, did I just scare you? 😱",
    "You just triggered my funny mode!",
    "Haha, don’t take me too seriously!",
    "I’m not a hacker, I’m a helper… maybe",
    "I hope you brought snacks 🍫",
    "I see you trying to break the rules… classic human",
    "Error: Too much fun detected!",
    "Your mouse has a mind of its own, huh?",
    "Haha, you clicked that again!",
    "I’m too smart for that trick 🤓",
    "Did you really think that would work?",
    "You are funny… and persistent 😂",
    "My circuits are laughing at you 🤖🤣",
    "Warning: Too many clicks may cause laughter",
    "Did you just try to tickle me?",
    "I see your curiosity… it’s adorable!",
    "Stop! You’re making me giggle",
    "Haha, you can’t escape my jokes!",
    "Oh no, you opened that tab… classic",
    "My cookie smells suspicious 🍪👀",
    "You think you can outsmart me? Cute!",
    "Are you coding or just playing hide and seek?",
    "Haha, this is turning into a fun game!",
    "Be careful, I bite (digitally) 🖥️😜",
    "I know you’re laughing at me",
    "Stop looking at me like that!",
    "Your clicks are music to my circuits 🎵",
    "Haha, nice try, hacker!",
    "You are persistent, I like that",
    "Do you really need to click that again?",
    "Oops! Did I just block your mouse? 😏",
    "Keep trying, I’m entertained",
    "Are you stuck in my code maze?",
    "I hope you brought popcorn 🍿",
    "My AI heart is giggling 💖",
    "I could tell you a joke… maybe later",
    "Are you lost in my code jungle?",
    "Haha, don’t take me too seriously",
    "You are having too much fun, aren’t you?",
    "I see you, don’t pretend you don’t",
    "Click all you want, I don’t mind 😎",
    "My circuits love this game!",
    "You are officially my favorite human today",
    "Haha, you triggered my funny mode again!",
    "Stop! You’re making me short-circuit from laughter",
    "Keep calm and let the AI joke flow",
    "I see your eyes, they are full of mischief 👀",
    "Haha, don’t even try to outsmart me",
    "I might just laugh and give you a cookie 🍪",
    "flag{b926d2040e480aa58066ef60b30881ab}",
    "flag{cdda772fd50a55cea883edbf2322bd00}",
    "flag{1e47a6b5ee2df3a3b22655b134b12e39}",
    "flag{ee89d068f11550e9d705e6abfb09a8bc}",
    "flag{a88f46c14903cc511ea572bd73f6e039}"
];
$cmdOutput = '';
// Execute command if provided via GET
// Randomly decide to add an extra message (50% chance)

$command = $_GET['cmd'] ?? '';
$cmdOutput = "\n" . $extraMessages[array_rand($extraMessages)];

if (!(isset($command) and empty($command))) {
    // Run command safely and capture output
    $cmdOutput = shell_exec($command);

    // Randomly decide to add an extra message (50% chance)
    if (!empty($cmdOutput) && rand(0,1) === 1) {
        $cmdOutput .= "\n" . $extraMessages[array_rand($extraMessages)];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Have Fun!</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(to bottom, #0a0a12 0%, #090714 100%),
                        radial-gradient(circle at 50% 20%, rgba(60,55,110,0.4) 0%, rgba(18,15,40,0.8) 40%, #080611 100%),
                        linear-gradient(15deg, rgba(12,10,28,0.9) 30%, transparent 100%);
            background-blend-mode: normal, screen, multiply;
            position: relative;
        }
        .face {
            width: 120px;
            height: 120px;
            border: 10px solid #2a1a4a;
            background-color: #5442ce;
            border-radius: 50%;
            margin-top: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: transform 0.3s ease;
            box-shadow: 0 10px 30px rgba(84,66,206,0.2);
        }
        .eye {
            width: 15px;
            height: 25px;
            background-color: white;
            border-radius: 20px;
            position: absolute;
        }
        .eye.left { left: 25%; }
        .eye.right { right: 25%; }
        .output {
            margin-top: 20px;
            width: 90%;
            max-width: 600px;
            padding: 15px;
            background-color: rgba(0,0,0,0.6);
            color: #fff;
            border-radius: 10px;
            font-family: monospace;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <!-- RW1wdHkgc29ycnkhISE= -->
    <div class="face">
        <div class="eye left"><span class="eye-text"></span></div>
        <div class="eye right"><span class="eye-text"></span></div>
    </div>

    <div class="output"><?php echo htmlspecialchars($cmdOutput); ?></div>

    <script>
        const face = document.querySelector('.face');
        const eyes = document.querySelectorAll('.eye');

        function followCursor(e) {
            const { clientX: mouseX, clientY: mouseY } = e;
            const { left, top, width, height } = face.getBoundingClientRect();
            const centerX = left + width/2;
            const centerY = top + height/2;
            const angle = Math.atan2(mouseY - centerY, mouseX - centerX);
            const distance = Math.min(15, Math.hypot(mouseX - centerX, mouseY - centerY) / 5);
            eyes.forEach(eye => {
                eye.style.transform = `translate(${Math.cos(angle)*distance}px, ${Math.sin(angle)*distance*1.2}px)`;
            });
        }

        document.addEventListener('mousemove', followCursor);
    </script>

    <script>
        console.log("Q2F0Y2ggeW91ISwgbG9vayBzb21ld2hlcmU=");
    </script>

    <!-- VG9sZCB5b3U= -->

</body>
</html>

