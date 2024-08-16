<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 content -->
<!-- @section('title')  -->


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f5f3;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .info-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .info-section h3 {
            margin-top: 0;
        }
        .info-item {
            margin-bottom: 20px;
        }
        .info-item h4 {
            font-weight: normal;
            margin-bottom: 5px;
        }
        .map {
            margin-top: 20px;
            text-align: center;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 8px;
        }
    </style>

<div class="container">
        <h2>LA ONE 烘焙坊</h2>
        <div class="info-section">
            <div class="info-item">
                <h3>OPENING HOURS</h3>
                <p>10:00 ~ 21:30</p>
            </div>
            <div class="info-item">
                <h3>INFORMATION</h3>
                <p>博愛店 LA ONE 烘焙坊</p>
                <p><i class="uil-map-pin-alt"></i> 807 高雄市三民區博愛一路 380 號 1 樓</p>
                <p>2F, No.380, Boai 1st Rd., Sanmin Dist., Kaohsiung City 807, Taiwan</p>
                <p><i class="uil-phone"></i> 07-322-8354</p>
                <p>Email: <a href="mailto:service@thomaschien.com">service@thomaschien.com</a></p>
            </div>
            <div class="map">
                <h3>Location Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7364.1324143943875!2d120.303879!3d22.65132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e04fbdca9c25d%3A0xf9f305f14a4ee1a0!2zODA36auY6ZuE5biC5LiJ5rCR5Y2A5Y2a5oSb5LiA6LevMzgw6Jmf!5e0!3m2!1szh-TW!2stw!4v1723785355868!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>