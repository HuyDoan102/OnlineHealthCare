@extends('layouts.app')

@section('content')

<!-- //Back to top -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!-- //Back to top -->

<!-- //BMI -->
<div class="w3layouts-breadcrumbs text-center">
  <!-- //header BMI -->
  <div class="container">   
    <span class="agile-breadcrumbs"><a href="index.html">Trang chủ</a> &gt; <a href="#">Chuẩn đoán</a> &gt; <span>Tính BMI</span></span>
  </div>    
</div>
<!-- //header BMI -->
<div class="container">
  <div class="team agileits-w3layouts"><br><br>
    <h4 class="w3ls-inner-title text-center">Tính BMI</h4>
  </div>
</div>

<div class="w3l-main-contact">
  <div class="container">
    <div class="col-md-6">
      <div class="widget-area no-padding blank">
        <div class="status-upload">
          <form>
            <div class="col-md-12">
              <div class="text-left bmi"><h4>Chiều cao:</h4></div><br>
              <input type="text" placeholder="cm" name="txt_h" id="height" onkeypress="return keypress(event);"><br><br>
            </div>
            <div class="col-md-12">
              <div class="text-left bmi"><h4><br>Cân nặng:</h4></div>
              <input type="text" placeholder="kg" name="txt_w" id="weight" onkeypress="return keypress(event);"><br><br>
            </div>
            <div class="col-md-12" method="POST">
              <button type="button" onclick="cal()" class="btn btn-primary">Kết quả</button>


            </div>

            <h4 id="result"> </h4>


          </form>
        </div><!-- Status Upload  -->
      </div><!-- Widget Area -->
    </div>
    <div class="col-md-6 agileinfo-contact-main-address">
      <p>
        <strong>BMI</strong> (Body mass Index) là chỉ số được tính từ chiều cao và cân nặng, là một chỉ số đáng tin cậy về sự mập ốm của một người.
      </p>
      <p>       
        BMI không đo lường trực tiếp mỡ của cơ thể nhưng các nghiên cứu đã chứng minh rằng BMI tương quan với đo mỡ trực tiếp. BMI là phương pháp không tốn kém và dễ thực hiện để tầm soát vấn đề sức khoẻ.
      </p><br>
      <p><strong>Theo khuyến nghị của tổ chức Y tế thế giới (WHO) (trừ người có thai) thì:</strong></p>
      <ul>
        <li>BMI dưới 18.5 là thiếu cân, thiếu năng lượng trường diễn</li>
        <li>BMI từ 18.5 đến 24.99 là bình thường</li>
        <li>BMI từ 25 đến 29.99 là thừa cân</li>
        <li>BMI > 30 là béo phì</li>
      </ul>
      <p><strong>BMI của người Việt Nam:</strong></p>
      <ul>
        <li>BMI dưới 18.5 là thiếu cân, thiếu năng lượng trường diễn</li>
        <li>BMI từ 18.5 đến 22.99 là bình thường</li>
        <li>BMI từ 23 đến 24.99 là thừa cân</li>
        <li>BMI > 25 là béo phì</li>
      </ul>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>


@endsection

<script type="text/javascript">
  function keypress(e){
    var keypressed = null;
    if (window.event)
      keypressed = window.event.keyCode; //IE
    else
      keypressed = e.which; //NON-IE, Standard

    if (keypressed < 48 || keypressed > 57)
    { 
      if (keypressed == 8 || keypressed == 127  || keypressed == 46)
      {
        return;
      }
      alert("Bạn chỉ được nhập số");
      return false;
    }
  }

  function cal(){
    var height = document.getElementById('height').value;
    var weight = document.getElementById('weight').value;

    var temp = parseFloat((weight*1)/(height/100)/(height/100)).toFixed(2);
    if(temp < 18.5)
      document.getElementById('result').innerHTML = "BMI = " + temp + "   Bạn bị thiếu cân";
    else
      if(temp >= 18.5 && temp <= 22.99)
        document.getElementById('result').innerHTML = "BMI = " + temp + "   Bạn bình thường";
      else
        if(temp >= 23 && temp <= 24.9)
          document.getElementById('result').innerHTML = "BMI = " + temp + "   Tiền béo phì";
        else
          if (temp >= 25 && temp <= 29.9)
            document.getElementById('result').innerHTML = "BMI = " + temp + "   Béo phì cấp độ I";
          else
            if(temp >= 30 && temp < 40)
              document.getElementById('result').innerHTML = "BMI = " + temp + "   Béo phì cấp độ II";
            else
              document.getElementById('result').innerHTML = "BMI = " + temp + "   Béo phì cấp độ III";
          }
        </script>