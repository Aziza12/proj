<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .button {
          border: none;
          color: white;
          width: 40%;
          padding-top: 2%;
          padding-bottom: 2%;
          text-align: center;
          text-decoration: none;
          display: block;
          font-size: 2vw;
          margin: 2% 30%;
          cursor: pointer;
        }
        
        .button1 {background-color: #4CAF50;} /* Green */
        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #ba5400;} /* Blue */
        div{
            margin-top: 10%;
            
        }
        .button1 {
            background-color: rgb(200, 255, 187); 
            color: black; 
            border: 2px solid #fdfdfd;
        }

        .button1:hover {
            background-color: #91ff95;
            color: white;
        }
        .button2 {
            background-color: rgb(184, 213, 255); 
            color: black; 
            border: 2px solid #ffffff;
        }

        .button2:hover {
            background-color: #7ddbe0;
            color: white;
        }
        .button3 {
            background-color: rgb(255, 183, 183); 
            color: black; 
            border: 2px solid #ffffff;
        }

        .button3:hover {
            background-color: #fa6b6b;
            color: white;
        }
        html{
            background-image: url('background.jpg');
            background-repeat: no-repeat;
        }
        a{
            text-decoration: none;
        }
        </style>
</head>
<body>
    <div>
        <a href=https://docs.google.com/spreadsheets/d/1XU_ao74GiPYi4YUuEBUnHY_o26TiYg-530ozo0_ZEgk/edit?usp=sharing>
            <input type=button class="button button1" value='TABLE'></a>
        <a href=https://docs.google.com/forms/d/e/1FAIpQLSfal5EY7s4kjlTZ1E_5nU4hve3SHDuRknhkmDknBVP81m1ibw/viewform?vc=0&c=0&w=1&flr=0>
            <input type=button class="button button2" value='INCOME'></a>
        <a href=https://docs.google.com/forms/d/e/1FAIpQLSfNVc2wmIbcVBuU3_wHGAiLfpGtK2LfBWmiXZpoVjhTyDKJDA/viewform?vc=0&c=0&w=1&flr=0>
            <input type=button class="button button3" value='EXPENSE'></a>
    </div>
   
</body>
</html>