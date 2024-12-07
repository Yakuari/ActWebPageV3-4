<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeightLoss Fitness</title>
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

        .button {
            margin-left: 50px;
            background-color: var(--color-gold);
            color: var(--color-black);
            border: 2px solid var(--color-gold);
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: var(--color-gray);
        }

        /* WeightLoss Section */
        .weightloss {
            flex-grow: 1;
            padding: 80px 0;
        }

        .weightloss-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .weightloss-header h2 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-gold);
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .weightloss-header p {
            color: var(--color-white);
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.8;
        }

        .weightloss-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .weightloss-card {
            background-color: rgba(30,30,30,0.8);
            border-radius: 15px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 2px solid var(--color-gold);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .weightloss-card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(212,175,55,0.2);
        }

        .weightloss-card-header {
            background-color: var(--color-gold);
            color: var(--color-black);
            padding: 20px;
            text-align: center;
        }

        .weightloss-card-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .weightloss-card-content {
            padding: 25px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .weightloss-card-content p {
            color: var(--color-white);
            margin-bottom: 20px;
            opacity: 0.7;
            flex-grow: 1;
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
            .weightloss-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            .weightloss-grid {
                grid-template-columns: 1fr;
            }

            .weightloss-header h2 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    
    <header>
        <div class="container header-content">
            <button class="button" onclick="history.back()">Back</button>
            <div class="logo">Iron Forge Gym</div>
        </div>
    </header>

    <main class="weightloss container">
        <div class="weightloss-header">
            <h2>WeightLoss</h2>
            <p>A successful weight loss program typically involves three important components:</p>
        </div>
        <div class="weightloss-grid">
            <div class="weightloss-card">
                <div class="weightloss-card-header">
                    <h3>Healthy Diet</h3>
                </div>
                <div class="weightloss-card-content">
                    <p>A balanced diet is key to losing weight. This means consuming fewer calories than you burn while ensuring your body gets the nutrients it needs. Focus on whole foods, including fruits, vegetables, lean proteins, whole grains, and healthy fats. Reducing processed foods, sugars, and excessive fats is crucial.</p>
                    <button class="program-btn">Start Journey</button>
                </div>
            </div>
            <div class="weightloss-card">
                <div class="weightloss-card-header">
                    <h3>Regular Physical Activity</h3>
                </div>
                <div class="weightloss-card-content">
                    <p>Exercise helps burn calories and build muscle, which increases your metabolism. Aim for a combination of aerobic exercises (like walking, running, or cycling) and strength training (such as weightlifting or bodyweight exercises).</p>
                    
                    <p>Consistency is the Key!</p>
                    <button class="program-btn">Elevate Now</button>
                </div>
            </div>
            <div class="weightloss-card">
                <div class="weightloss-card-header">
                    <h3>Behavioral Changes and Mindset</h3>
                </div>
                <div class="weightloss-card-content">
                    <p>Weight loss is not just about diet and exercise—it's about making lasting lifestyle changes. This includes setting realistic goals, managing stress, getting enough sleep, and developing a positive attitude towards your progress. Tracking your food, activity, and progress can also help maintain motivation.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 WeightLoss Fitness. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
