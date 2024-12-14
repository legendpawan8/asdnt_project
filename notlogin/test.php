<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purple Gradient Page with Code Typing Animation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes typing {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }

        @keyframes blink {
            0%, 100% {
                border-color: transparent;
            }
            50% {
                border-color: rgba(255, 255, 255, 0.75);
            }
        }

        /* Typing effect */
        .typing-effect {
            font-family: 'Courier New', Courier, monospace;
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            width: 0;
            animation: typing 4s steps(30) 1 normal forwards, blink 0.75s step-end infinite;
            border-right: 3px solid rgba(255, 255, 255, 0.75); /* Cursor effect */
            color: rgba(255, 255, 255, 0.2); /* Faded text color */
        }

        /* Hide the cursor after typing completes */
        .typing-effect.no-cursor {
            animation: typing 4s steps(30) 1 normal forwards;
            border-right: none; /* Remove cursor */
        }

        /* Hide all lines initially */
        .line {
            opacity: 0;
            visibility: hidden;
        }

        /* Fade in the lines one by one */
        .line.visible {
            opacity: 1;
            visibility: visible;
            animation: fadeInLine 1s ease-in-out forwards;
        }

        @keyframes fadeInLine {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Sequential delay for each line */
        .line:nth-child(1) {
            animation-delay: 0s; /* First line appears immediately */
        }
        .line:nth-child(2) {
            animation-delay: 4s; /* Start after the first line finishes */
        }
        .line:nth-child(3) {
            animation-delay: 8s; /* Start after the second line finishes */
        }
        .line:nth-child(4) {
            animation-delay: 12s; /* Start after the third line finishes */
        }

    </style>
</head>
<body class="h-screen bg-gradient-to-br from-purple-500 via-purple-600 to-purple-700 text-white flex items-center justify-center relative">

    <!-- Background Typing Effect -->
    <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 text-center space-y-6">
        <!-- Line 1 (Initially visible) -->
        <div class="line visible">
            <span class="typing-effect" id="line1">const user = 'developer';</span>
        </div>
        <!-- Line 2 (Hidden initially) -->
        <div class="line" id="line2-container">
            <span class="typing-effect" id="line2">let isAuthenticated = true;</span>
        </div>
        <!-- Line 3 (Hidden initially) -->
        <div class="line" id="line3-container">
            <span class="typing-effect" id="line3">function greet() { return "Hello, world!"; }</span>
        </div>
        <!-- Line 4 (Hidden initially) -->
        <div class="line" id="line4-container">
            <span class="typing-effect" id="line4">console.log(greet());</span>
        </div>
    </div>

    <script>
        // Function to remove cursor and add 'no-cursor' class to completed lines
        function removeCursor(lineId) {
            document.getElementById(lineId).classList.add('no-cursor');
        }

        // Function to show the next line after a delay
        function showNextLine(lineContainerId) {
            document.getElementById(lineContainerId).classList.add('visible');
        }

        // After the first line completes typing, remove the cursor and move to the next line
        setTimeout(() => {
            removeCursor('line1');
            showNextLine('line2-container');
        }, 4000);  // After 4 seconds (when line 1 finishes typing)

        setTimeout(() => {
            removeCursor('line2');
            showNextLine('line3-container');
        }, 8000);  // After 8 seconds (when line 2 finishes typing)

        setTimeout(() => {
            removeCursor('line3');
            showNextLine('line4-container');
        }, 12000);  // After 12 seconds (when line 3 finishes typing)

        setTimeout(() => {
            removeCursor('line4');
        }, 16000);  // After 16 seconds (when line 4 finishes typing)
    </script>

</body>
</html>
