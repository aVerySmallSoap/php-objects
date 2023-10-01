<?php
require './operations/Message.php';
$message1 = new Message();
$message2 = new Message();

$message1->setSender("Norway");
$message1->setReceiver("John");
$message1->sendMessage("Hello John!");
$message2->setSender("John");
$message2->setReceiver("Norway");
$message2->sendMessage("Hi Norway!");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="stylesheet" href="/CSS/messages.css">
    <title>Message Objects</title>
</head>
<body>
    <div class="user-panel">
        <div class="drop-menu">Menu</div>
        <div class="user-box">
            <div class="ub-inner">
                <img src="/misc/images/foodie.jpg" alt="user-prof" class="box-profile">
                <div class="ub-info">
                    <span class="box-username">Foodie Group</span>
                    <div class="preview-wrapper">
                        <span class="preview-message">
                        You: This is a test message that will break your site.
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="message-board">
        <div id="mb-info">
            <img src="/misc/images/foodie.jpg" alt="user-prof" class="box-profile">
            <span class="mb-title">Foodie Group</span>
        </div>
        <div id="messages-container">
            <div class="message user-message">
                <div class="extra-info">
                    <span><?php echo $message1->getDate() . " " . $message1->getTime()?></span>
                </div>
                <div class="message-contents">
                    <?php
                    echo "From: {$message1->getSender()}<br>";
                    echo "To: {$message1->getReceiver()}<br>";
                    echo "ID: {$message1->getID()}<br>";
                    echo "{$message1->retrieveMessage()}<br>";
                    ?>
                </div>
            </div>
            <div class="message user-response">
                <div class="extra-info">
                    <span><?php echo $message2->getDate() . " " . $message2->getTime()?></span>
                </div>
                <div class="message-contents">
                    <?php
                    echo "From: {$message2->getSender()}<br>";
                    echo "To: {$message2->getReceiver()}<br>";
                    echo "ID: {$message2->getID()}<br>";
                    echo "{$message2->retrieveMessage()}<br>";
                    ?>
                </div>
            </div>
        </div>
        <div class="input-control">
            <form id="control">
                <input type="text">
                <button>Send</button>
            </form>
        </div>
    </div>

    <template id="user">

    </template>
</body>
</html>