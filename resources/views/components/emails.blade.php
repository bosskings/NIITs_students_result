<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            section{
                font-family: sans-serif;
                font-size: 20px;
                margin: auto;
                width: 50%;
                height: 50vh;
                text-align: center;
                border-radius: 10px;
                /* background: #202020; */
                color: white;
                box-shadow: 2px 5px  12px rgba(0, 0, 0, 0.5);
                padding:50px 10px;
                background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('https://niit-ph.com/Images/Slider-1.jpg')
            }

            div{
                width: 120px;
                margin:auto;
                background: white
            }

            section img{

                width: 100px;
            }


            a{
                color: white
            }


            @media only screen and (max-width:700px) {
                section{
                    width: 90%;
                }
            }


        </style>
    </head>
    <body>
            

        <section>
            <div>
                <img src="https://niit-ph.com/Images/niit-logo.png" alt="NIITS atom logo">
            </div>

            <hr>
            <p>
                Exam Taken: <strong>{{ $studentData['module'] }}</strong><br><br>
                Score Achieved: <strong>{{ $studentData['score'] }}%</strong>
            </p>

            <i>
                For more informations: <a href="https://niit-ph.com"> niit-ph.com </a>
            </i>
        </section>
    </body>
</html>