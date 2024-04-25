<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán - Visa</title>
</head>

<body>
    <div class="container uppercase bg-white flex justify-center pb-14 items-center mt-6">

        <div class="card-container mb-[-150px] relative h-[250px] w-[400px]">
            <div class="font absolute w-full h-full top-0 left-0 rounded-md p-5">
                <div class="image flex items-center justify-between pt-5">
                    <img src="./src/img/chip.png" alt="" class="h-12">
                    <img src="./src/img/visa.png" alt="" class="h-12">
                </div>
                <div class="number-card-box text-lg text-white">################</div>
                <div class="flexBox flex">
                    <div class="box text-white">
                        <span class="">Chủ thẻ</span>
                        <div class="full-name">Họ và Tên</div>
                    </div>
                    <div class="box text-white">
                        <span class="">Hết hạn</span>
                        <div class="">
                            <span class="month">Tháng</span>
                            <span class="year">Năm</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="back absolute top-0 left-0 h-full w-full rounded-md">
                <div class="content-wrapper">
                    <div class="stripe bg-black w-full h-[50px]"></div>
                    <div class="box"></div>
                    <span class="text-white text-base">CVV</span>
                    <div class="cvv h-[50px] p-5 mt-4 text-white rounded-md w-full bg-white"></div>
                    <img src="./src/img/visa.png" alt="" class="mt-7 h-7">
                </div>
            </div>
        </div>

        <form action="" class="bg-gray-200 rounded shadow-gray-500 p-5 w-[600px] pt-40">
            <div class="inputBox mt-5">
                <span class="block text-gray-400 pb-1.5">Số thẻ</span>
                <input type="text" name="" maxlength="16" class="card-number">
            </div>

            <div class="inputBox mt-5">
                <span class="block text-gray-400 pb-1.5">Tên chủ thẻ</span>
                <input type="text" name="" class="card-holder">
            </div>

            <div class=" flexBox flex gap-[15px]">
                <div class="inputBox mt-5">
                    <span class="block text-gray-400 pb-1.5">Tháng hết hạn</span>
                    <select name="" id="" class="month-input">
                        <option value="Tháng" selected disabled>Tháng</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>

                <div class="inputBox mt-5">
                    <span class="block text-gray-400 pb-1.5">Năm hết hạn</span>
                    <select name="" id="" class="year-input">
                        <option value="Tháng" selected disabled>Năm</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <div class="inputBox mt-5">
                    <span class="block text-gray-400 pb-1.5">CVV</span>
                    <input type="text" maxlength="4" class="cvv-input">
                </div>
            </div>
            <input type="submit" name="submit" value="Xác nhận"
                class="submit w-full mt-5 p-2.5 text-base	rounded-full text-white cursor-pointer hover:opacity-80">
        </form>
    </div>

    <style>
    .container {
        flex-flow: column;

    }

    .container form .inputBox input,
    .container form .inputBox select {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, .3);
        color: #444;
    }

    .container form .flexBox .inputBox {
        flex: 1 1 150px;
    }

    .container form .submit {
        background: linear-gradient(45deg, lightpink, blueviolet, deeppink);
        transition: 0.2s linear;
    }

    .container form .submit:hover {
        letter-spacing: 2px;
    }

    .container .card-container .font {
        background: linear-gradient(45deg, lightpink, blueviolet, deeppink);
        backface-visibility: hidden;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .2);
        -webkit-transition: -webkit-transform 0.4s ease-out;
        transition: transform 0.4s ease-out;
        -webkit-transform: perspective(1000px);
        transform: perspective(1000px);
    }


    .container .card-container .font .number-card-box {
        padding: 30px 0;

    }

    .container .card-container .font .flexBox .box:nth-child(1) {
        margin-right: auto;
    }

    .container .card-container .font .flexBox {
        font-size: 15px;

    }

    .container .card-container .back {
        background: linear-gradient(45deg, lightpink, blueviolet, deeppink);
        padding: 20px 0;
        backface-visibility: hidden;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .2);
        -webkit-transition: -webkit-transform 0.4s ease-out;
        transition: transform 0.4s ease-out;
        -webkit-transform: perspective(1000px);
        transform: perspective(1000px);
        text-align: right;
        transform: perspective(1000px) rotateY(180deg);

    }

   

    .container .card-container .back .stripe {
        margin: 10px 0;
    }

    .container .card-container .back .box {
        padding: 0 20px;

    }
    </style>

    <script>
    document.querySelector('.card-number').oninput = () => {
        document.querySelector('.number-card-box').innerText = document.querySelector('.card-number').value;
    }

    document.querySelector('.card-holder').oninput = () => {
        document.querySelector('.full-name').innerText = document.querySelector('.card-holder').value;
    }

    document.querySelector('.month-input').oninput = () => {
        document.querySelector('.month').innerText = document.querySelector('.month-input').value;
    }

    document.querySelector('.year-input').oninput = () => {
        document.querySelector('.year').innerText = document.querySelector('.year-input').value;
    }

    document.querySelector('.cvv-input').onfocus = () => {
        document.querySelector('.font').style.transform = 'perspective(1000px) rotateY(-180deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
    }

    document.querySelector('.cvv-input').onblur = () => {
        document.querySelector('.font').style.transform = 'perspective(1000px) rotateY(0deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
    }

    document.querySelector('.cvv-input').oninput = () => {
     let cvvValue = document.querySelector('.cvv-input').value;
        document.querySelector('.cvv').innerText = cvvValue;
 
    }

    </script>
</body>

</html>