<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scale=no">
    <title>Bio-data</title>
    <link rel="icon" href="2.jpeg">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        .container {
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }
        
        .biodatabox {
            margin-top: 50px;
            width: 70%;
            height: 100%;
            padding: 50px;
            position: relative;
            border: 3px solid blueviolet;
            border-radius: 1px 90px 1px 1px;
        }
        
        .biodatabox::before {
            width: 100%;
            height: 100%;
            margin: -50px;
            position: absolute;
            border-radius: 1px 90px 1px 1px;
            content: "";
            background: url(images/1.jpg);
            background-size: 100% 100%;
            opacity: .6;
            z-index: -10;
        }
        
        .img {
            position: absolute;
            margin: 20px;
            right: 0;
        }
        
        .img img {
            backface-visibility: hidden;
        }
        
        table {
            width: 100%;
            height: auto;
            font-size: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        
        .hed {
            text-align: center;
            font-size: 40px;
            color: rgb(47, 18, 179);
            font-weight: 600;
        }
        
        .heds {
            padding-left: 10%;
            font-size: 30px;
            font-weight: 600;
            font-style: oblique;
            color: darkmagenta;
            text-shadow: 15px 15px 40px white;
        }
        
        .hedsa {
            font-size: 30px;
            font-weight: 600;
            font-style: inherit;
            color: rgb(247, 58, 11);
            text-align: center;
        }
        
        .field {
            border: 3px solid rgb(55, 0, 255);
            border-radius: 20px;
        }
        
        .name {
            color: rgb(14, 209, 63);
            font-weight: 550;
        }
        
        .ans {
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="biodatabox">
            <div class="img"><img src="1.jfif " alt="your image is here"></div>
            <table cellspacing="20px">
                <tr colspan="2">
                    <td colspan="2" class="hed">CERTIFICAT DE<br>_____<br><br><br></td>

                </tr>
                <tr colspan="2">
                    <td colspan="2" class="heds"> Personal Detail : ---<br><br></td>
                </tr>

                <tr>
                    <td class="given"> Name </td>
                    <td class="ans b"> :-&nbsp; <span class="name">Rahul </span></td>
                </tr>
                <tr>
                    <td class="given"> Qualification </td>
                    <td class="ans"> :-&nbsp; write your Qualification here<br>&nbsp;&nbsp;(------- 1 ------)<br>&nbsp;&nbsp;(------- 2 ------) </td>
                </tr>
                <tr>
                    <td class="given"> Date of Birth </td>
                    <td class="ans"> :-&nbsp; 12/10/2004 </td>
                </tr>
                <tr>
                    <td class="given"> Height </td>
                    <td class="ans"> :-&nbsp; 6.2 </td>
                </tr>
                <tr>
                    <td class="given"> color </td>
                    <td class="ans"> :-&nbsp; Fair </td>
                </tr>
                <tr>
                    <td class="given"> Blood Group </td>
                    <td class="ans"> :-&nbsp; +AB </td>
                </tr>
                <tr>
                    <td class="given"> Hobbies </td>
                    <td class="ans"> :-&nbsp; write your Hobbies </td>
                </tr>
            </table>
            <fieldset class="field">
                <legend class="hedsa">&nbsp;&nbsp;-- : Family detail : --&nbsp;&nbsp;&nbsp;&nbsp;</legend>

                <table cellspacing="20px">

                    <tr>
                        <td class="given"> Father name </td>
                        <td class="ans"> :-&nbsp; Your fater name </td>
                    </tr>
                    <tr>
                        <td class="given"> Mother name </td>
                        <td class="ans"> :-&nbsp; Your Mother name </td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2" class="heds">Sisters :--</td>

                    </tr>
                    <tr>
                        <td class="given"> Sister name </td>
                        <td class="ans"> :-&nbsp; enter her name </td>
                    </tr>

                    <tr colspan="2">
                        <td colspan="2" class="heds">Brothers :--</td>

                    </tr>
                    <tr>
                        <td class="given"> Elder Brother </td>
                        <td class="ans"> :-&nbsp; Your big brother name </td>
                    </tr>
                    <tr>
                        <td class="given"> Younger Brother </td>
                        <td class="ans"> :-&nbsp; Your little brother name </td>
                    </tr>
                </table>
            </fieldset>
            <table cellspace="20px">
                <tr>
                    <td colspan="2" class="heds"><br> Contact Detail –<br></td>
                </tr>
                <tr>
                    <td class="given"><br> Address </td>
                    <td class="ans"> :-&nbsp; Enter your address here </td>
                </tr>
                <tr>
                    <td class="given"><br> Mobil No </td>
                    <td class="ans"> :-&nbsp; 1)&nbsp;1234567890 &nbsp;&nbsp; 2)&nbsp;1234567890 </td>
                </tr>
            </table>


        </div>
    </div>

</body>



</html>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>