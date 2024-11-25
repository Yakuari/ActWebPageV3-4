<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcription Plan</title>
    <link rel="stylesheet" href="src/css/subscription.css">
</head>
<body>
    <div id="wrapper">
        <h1>Subscription Plan and Pricing</h1>
        <!-- Container of all Subscriptions -->
        <div class="subscriptions container">

            <!-- 3 Months Subscription -->
            <div class="subscription container">
                <!-- Name of Subscription -->
                <h3>Core Power Membership</h3>

                <!-- Informations about the Subscription -->
                <p>Includes:</p>
                <ul>
                    <li>Cardio Machines</li>
                    <li>Weights</li>
                    <li>Basic Equipment</li>
                </ul>

                <p>Additional Charges</p>
                <ul>
                    <li>None or small fee for classes</li> 
                </ul>

                <!-- Total Discount Price Container -->
                <div class="totaldiscounted price">
                    <p>Total Discount</p>
                    <p>500</p>
                </div>

                <!-- Original Price Container -->
                <div class="original price">
                    <p>Original Price</p>
                    <p>1000</p>
                </div>

                <!-- Discounted Price Container -->
                <div class="discounted price">
                    <p>Discount Price</p>
                    <p>500</p>
                </div>

                <!-- Button for Form -->
                 <form action="./buy-subscription.php" method="get">
                    <button type="submit" value="3">Buy</button>
                 </form>
            </div>
            
            <!-- 6 Months Subscription -->
            <div class="subscription container">
                <!-- Name of Subscription -->
                <h3>Strength & Stamina Pass</h3>

                <!-- Informations about the Subscription -->
                <p>Includes:</p>
                <ul>
                    <li>All Gym Access</li>
                    <li>unlimited classes (e.g., yoga, spinning)</li>
                </ul>

                <p>Additional Charges</p>
                <ul>
                    <li>Personal training, massage, or specialty services may cost extra</li> 
                </ul>

                <!-- Total Discount Price Container -->
                <div class="totaldiscounted price">
                    <p>Total Discount</p>
                    <p>1400</p>
                </div>

                <!-- Original Price Container -->
                <div class="original price">
                    <p>Original Price</p>
                    <p>2700</p>
                </div>

                <!-- Discounted Price Container -->
                <div class="discounted price">
                    <p>Discount Price</p>
                    <p>1400</p>
                </div>

                <!-- Button for Form -->
                <form action="./buy-subscription.php" method="get">
                    <button type="submit" value="6">Buy</button>
                </form>
            </div>

            <!-- 1 Year Subscription -->
            <div class="subscription container">
                <!-- Name of Subscription -->
                <h3>Empowerment Essentials Package</h3>

                <!-- Informations about the Subscription -->
                <p>Includes:</p>
                <ul>
                    <li>VIP access to events</li>
                    <li>priority booking for classes</li>
                    <li>All services (classes, personal training, amenities)</li>
                </ul>

                <p>Additional Charges</p>
                <ul>
                    <li>Sometimes still applies for very exclusive services</li> 
                </ul>

                <!-- Total Discount Price Container -->
                <div class="totaldiscounted price">
                    <p>Total Discount</p>
                    <p>2500</p>
                </div>

                <!-- Original Price Container -->
                <div class="original price">
                    <p>Original Price</p>
                    <p>5000</p>
                </div>

                <!-- Discounted Price Container -->
                <div class="discounted price">
                    <p>Discount Price</p>
                    <p>2500</p>
                </div>

                <!-- Button for Form -->
                <form action="./buy-subscription.php" method="get">
                    <button type="submit" value="12">Buy</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>