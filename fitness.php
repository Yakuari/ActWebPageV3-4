<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Fitness | Gold Standard Training</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-black: #0A0A0A;
            --color-white: #FFFFFF;
            --color-gray: #1E1E1E;
            --color-gold: #D4AF37;
            --color-gold-dark: #BF9B30;
            --color-overlay: rgba(0,0,0,0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-black);
            color: var(--color-white);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            position: relative;
            z-index: 1;
        }


        /* Header */
        header {
            background-color: rgba(30,30,30,0.8);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 2px solid var(--color-gold);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--color-gold);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .back-btn {
            background-color: transparent;
            border: 2px solid var(--color-gold);
            color: var(--color-gold);
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            justify-content: flex-start;
        }

        .back-btn:hover {
            background-color: var(--color-gold);
            color: var(--color-black);
        }

        /* Rest of the previous CSS remains the same... */
        /* Programs Section */
        .programs {
            flex-grow: 1;
            padding: 80px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-gold);
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .section-header p {
            color: var(--color-white);
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.8;
        }

        .program-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .program-card {
            background-color: rgba(30,30,30,0.8);
            border-radius: 15px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 2px solid var(--color-gold);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .program-card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(212,175,55,0.2);
        }

        .program-card-header {
            background-color: var(--color-gold);
            color: var(--color-black);
            padding: 20px;
            text-align: center;
        }

        .program-card-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .program-card-content {
            padding: 25px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .program-card-content p {
            color: var(--color-white);
            margin-bottom: 20px;
            opacity: 0.7;
            flex-grow: 1;
        }

        .program-btn {
    align-self: flex-start;  /* Align the button to the left */
    padding: 12px 25px;
    background-color: var(--color-gold);  /* Button background */
    color: var(--color-black);  /* Button text color */
    border: none;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    margin-left: 0;  /* Ensure no left margin is applied */
    display: inline-block;  /* Ensure it's treated as a block-level element */
    text-align: center;  /* Align text inside the button */
}

.program-btn:hover {
    background-color: var(--color-gold-dark);  /* Darker shade on hover */
    transform: scale(1.05);
}


        /* Footer */
        footer {
            background-color: rgba(30,30,30,0.8);
            backdrop-filter: blur(10px);
            padding: 30px 0;
            text-align: center;
            border-top: 2px solid var(--color-gold);
        }

        /* Responsive Design */
        @media screen and (max-width: 1024px) {
            .program-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            .program-grid {
                grid-template-columns: 1fr;
            }

            .section-header h2 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    
    <header>
        <div class="container header-content">
            <a href="user.php" class="back-btn">Back</a>
            <div class="logo">Iron Forge Gym</div>
        </div>
    </header>

    <main class="programs container">
        <div class="section-header">
            <h2>Elevate Your Fitness</h2>
            <p>Experience the pinnacle of personal training with our meticulously crafted fitness programs designed to transform your body and mind.</p>
        </div>
        <div class="program-grid">
            <div class="program-card">
                <div class="program-card-header">
                    <h3>Beginner Forge</h3>
                </div>
                <div class="program-card-content">
                    <p>Ignite your fitness journey with a foundational program that builds strength, confidence, and fundamental movement patterns.</p>
                    <button class="program-btn">Start Journey</button>
                </div>
            </div>
            <div class="program-card">
                <div class="program-card-header">
                    <h3>Intermediate Precision</h3>
                </div>
                <div class="program-card-content">
                    <p>Advanced techniques and targeted training to push your limits, enhance performance, and sculpt your ideal physique.</p>
                    <button class="program-btn">Elevate Now</button>
                </div>
            </div>
            <div class="program-card">
                <div class="program-card-header">
                    <h3>Elite Mastery</h3>
                </div>
                <div class="program-card-content">
                    <p>The ultimate performance program combining cutting-edge training, nutrition strategy, and holistic wellness approach.</p>
                    <a href="user.php"><button class="program-btn">Peak Performance</button></a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gold Standard Fitness. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>