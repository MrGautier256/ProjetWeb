<!-- // $to = 'aymanehilmi1@gmail.com';
// $subject = 'the subject';
// $message = 'the message';
// $header = "From: virtualinternship.cesi@gmail.com\r\nReply-To: virtualinternship.cesi@gmail.com";
// $mail_sent = mail($to, $subject, $message, $header);
// if ($mail_sent == true) {
//     echo 'Email on the way';
// } else echo "Mail Failed"; -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("../Const.php");
    include_once('../Bar/Navbar.php');
    ?>

    <section class="container">
        <?php include_once('../Bar/Leftbar.php') ?>

        <section class="containeroffre">
            <section class="formulaire-wrapper">
                <section class="formulaire-bloc">
                    <form name="form1" enctype="multipart/form-data" method="post" action="file.php" id="application-form" class="form">
                        <section class="postuler-contenu">
                            <article>
                                <h2>Apply to the Offer :</h2>
                                <article class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="" placeholder="Enter Your Name" name="name" required>
                                </article>
                                <article class="form-group">
                                    <label>Email</label>
                                    <input type="email" value="" placeholder="Enter Your Email Address" name="email" required>
                                </article>
                                <article class="form-group">
                                    <label>Phone</label>
                                    <input type="phone" value="" placeholder="Contact Number" name="phone" required>
                                </article>
                            </article>
                            <article>
                                <article class="form-group">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" placeholder="Type Message Here"></textarea>
                                </article>
                            </article>
                            </article>
                            <p>
                                <input type="file" id="exampleInputFile" name="CV">
                            </p>
                            <article>
                                <button type="submit">
                                    <span class="sendmessage"></span> Send Message </button>
                            </article>
                        </section>

                    </form>
                </section>
            </section>
        </section>
    </section>

    <style>
        @media (max-width: 900px) {
            .containeroffre {
                padding: 40px 12px 0 12px;
            }

            .formulaire-wrapper {
                display: flex;
                height: 100vh;
                justify-content: space-around;
                align-items: center;
                padding-bottom: 2%;
                /* padding: 0px 20px 20px 20px; */
            }

        }

        @media (min-width: 901px) {
            .formulaire-wrapper {
                display: flex;
                height: 100vh;
                justify-content: space-around;
                align-items: center;
                padding-bottom: 2%;
            }

            .containeroffre {
                padding: 0px 40px 40px 40px;
            }

            .formulaire-bloc {
                margin-top: 20px;

            }

            .left-sidebar {
                display: none;
            }
        }

        .formulaire-bloc {
            padding: 30px;
            align-items: center;
            justify-content: space-around;
            border-radius: 5px;
            background: #009688;
            color: white;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            text-align: left;
        }





        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-group input {
            width: 100%;
            border: none;
            border-radius: 50px;
            padding: 10px;
            margin-top: 10px;
        }

        .form p {
            margin: 20px;
        }

        #exampleInputFile {
            padding: 20px;
        }

        textarea {
            resize: none;
            height: 70px;
        }
    </style>
    <script src="../Javascriptindex.js"></script>
</body>

</html>