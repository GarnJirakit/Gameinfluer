<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/test2.css">

</head>
<body>

  <div class="container">
    <form action="">

      <div class="inputBox">
        <span>card number</span>
        <input type="text" maxlength="16" class="card-number-input">
      </div>
      <div class="inputBox">
        <span>card holder</span>
        <input type="text"class="card-holder-input">
      </div>
      <div class="flexbox">
        <div class="inputBox">
          <span>expiration mm</span>
          <select name="" id="" class="month-input">
            <option value="month" selected disabled>month</option>
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
        <div class="inputBox">
          <span>expiration yy</span>
          <select name="" id="" class="year-input">
            <option value="year" selected disabled>year</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
          </select>
        </div>
      </div>
      

    </form>
  </div>
  
</body>
</html>
