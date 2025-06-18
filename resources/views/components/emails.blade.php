<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            section{
                
                box-sizing:border-box;
                padding:50px;
                font-family: sans-serif;
                font-size: 20px;
                margin: auto;
                text-align: center;
                border-radius: 10px;
                /* background: #202020; */
                color: white;
                padding:50px 50px;
                background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('https://niitph.com/images/Slider-3.jpeg');
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border:2px solid red;
                text-align:left;
            }


            section img{

                width: 100px;
                height: 100%;
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
            <img src="https://niitph.com/images/niit/niit-logo.png" alt="NIITS atom logo">
            

            <hr>
            <p>
                Exam Taken: <strong>{{ $student['module'] }}</strong><br><br>
                Score Achieved: <strong>{{ $student['score'] }}%</strong>
            </p>

            <i>
                For more information: <a href="https://niitph.com"> niitph.com </a>
            </i>
        </section>
    </body>
</html>