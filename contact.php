<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://kit.fontawesome.com/86d66a328c.js"></script>   
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src=""  class="logo" alt=""></a> <!--ADD PHOTO HERE-->

        <div>
         <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>

            <?php if (isset($_SESSION['loggedIn'])){
                ?><li><a href="PHP_Site/account.php">Account</a></li><?php
            }
            else{
                ?><li><a href="PHP_Site/log_in.php">Account</a></li><?php
            }?>

            <li><a class="active"  href="contact.php">Contact</a></li> <!--ADD PHOTO HERE-->
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li> 
         </ul>
        
        </div>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Chatbot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            width: 450px; /* Increased the width for a larger chatbox */
            border: 1px solid #ccc;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px #ccc; /* Increased box shadow */
        }

        .chat-header {
            background-color: #007bff;
            color: white;
            padding: 15px; /* Increased padding for better visibility */
            font-weight: bold;
            font-size: 18px; /* Larger font size */
            border-top-left-radius: 10px; /* Rounded top-left corner */
            border-top-right-radius: 10px; /* Rounded top-right corner */
        }

        .chat-box {
            height: 400px; /* Increased chat box height for better fit */
            padding: 10px;
            overflow-y: scroll;
        }

        .bot-message {
            background-color: #f4f4f4; /* Bot message background color */
            color: black; /* Set bot message text color to black */
            padding: 10px; /* Increased padding for better visibility */
            border-radius: 10px;
            margin: 10px 0;
            display: inline-block;
            max-width: 80%; /* Wider chatbot messages */
            font-size: 16px; /* Larger font size */
        }

        .user-input {
            display: flex;
            font-weight: bold;
            padding: 10px;
            background-color: #f4f4f4; /* User input background color */
            color: black; /* Set user input text color to black */
            border-radius: 10px; /* Rounded corners for user input */
            margin: 10px 0;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: none;
            font-size: 16px;
            font-weight: bold; /* Bold font for user input */
            color: black; /* Set user input text color to black */
        }

        #send-button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px; /* Larger button */
            margin-left: 10px;
            cursor: pointer;
            font-size: 16px; /* Larger font size */
        }

        #send-button:hover {
            background-color: #0056b3;
        }
        
        /* Add styling for message boxes */
        .message-box {
            padding: 10px;
            border-radius: 10px;
            margin: 10px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            Online Shopping Assistant
        </div>
        <div class="chat-box" id="chat-box">
            <div class="bot-message message-box">Chatbot: Hi, Im Chatbot! 
                How may I assist you today?</div>
        </div>
        <div class="user-input">
            <input type="text" id="user-input" class="input-box" placeholder="Type your message..." onkeydown="sendMessage(event)">
            <button id="send-button" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function appendUserMessage(message) {
            document.getElementById('chat-box').innerHTML += `<div class="user-input message-box">You: ${message}</div>`;
        }

        function appendBotMessage(message) {
            document.getElementById('chat-box').innerHTML += `<div class="bot-message message-box">Chatbot: ${message}</div>`;
        }

        function sendMessage(event) {
            if (event.key === 'Enter' || event.type === 'click') {
                const userInput = document.getElementById('user-input').value;
                appendUserMessage(userInput);

                // Implement your chatbot logic here
                const response = getBotResponse(userInput);

                appendBotMessage(response);

                // Clear the user input
                document.getElementById('user-input').value = '';
            }
        }

        function getBotResponse(userInput) {
            
            if (userInput.toLowerCase().includes("hi") || userInput.toLowerCase().includes("hello")|| userInput.toLowerCase().includes("hey")) {
                return "Hello, how may I assist you?";
            }


            if (userInput.toLowerCase().includes("refund policy")|| userInput.includes("i want refund")|| userInput.includes("refund")) {
                return "Our refund policy allows for returns within 15 days of purchase.";
            }


            if (userInput.toLowerCase().includes("new") || userInput.toLowerCase().includes("place new order") || userInput.toLowerCase().includes("purchase")) {
                return "Select---> Shop ---> Select your Items ---> Add To Cart ---> Payment.";
            }


            if (userInput.toLowerCase().includes("replacement")|| userInput.includes("i want to replace my order")
            || userInput.includes("replace")){
                return "Our replacement policy allows for the exchange of damaged or defective items within 3 days of purchase.";
            }

            if (userInput.toLowerCase().includes("return")|| userInput.includes("i want to return my order")
            || userInput.includes("return policy")){
                return "Our return policy allows for the return on selected items.";
            }

            if (userInput.toLowerCase().includes("talk")|| userInput.includes("call")|| userInput.includes("contact")){
                return "You can call us on our toll-free number: 1800-123-456.";
            }

            if (userInput.toLowerCase().includes("track")|| userInput.includes("where is my order")) {
                return "Your order will be shipped and will be out for delivery soon. You can also track your order on www.onlinedelivery.com";
            }

    
            if (userInput.includes("cancel") || userInput.includes("i want to cancel my order")|| userInput.includes("cancel my order")) {
                return "You can cancel your order from the Site or Contact our 24x7 Tech Support team";
            }

            if (userInput.includes("payment methods") || userInput.includes("safe to use my credit card")) {
                return "We accept various payment methods. Our website is secure for transactions.";
            }
            if (userInput.includes("create an account") || userInput.includes("order history") || userInput.includes("account balance")) {
                return "You can create an account on our website and check your order history.";
            }
            if (userInput.includes("tech support") || userInput.includes("reset my password") || userInput.includes("add items to my cart")) {
                return "For technical assistance, please contact our support team.";
            }
   
            return "I'm sorry, I don't have information about that. How can I assist you with anything else? Or you can call us on our toll-free number: 1800-123-456. ";
        }
     
        
  

    </script>
</body>
</html>
     </section> 

<footer class="section-p1">

</footer>
    <script src="script.js"></script>
</body>
</html>