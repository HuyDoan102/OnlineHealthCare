@extends('layouts.app')

@section('content')

<div class="container">
  <div class="text-center"><h3><strong>Tính BMI</strong></h3></div>

  <div class="row form-group">
    <div class="row col-md-6">
      <div class="form-group">
        <div class="control-label text-left"><h5>Chiều cao:</h5></div>
        <div class="input-group col-md-12">
          <input id="height" type="height" class="form-control" placeholder="cm" name="txt_h">
        </div>
        <div class="control-label text-left"><h5>Cân nặng:</h5></div>
        <div class="input-group col-md-12">
          <input id="weight" type="weight" class="form-control" placeholder="kg" name="txt_w">
        </div>
        BMI:<p id="result"> </p>
        <br>
      </div>
      <div class="row form-group">
        <div class="col-md-6 col-md-offset-4" method="POST">
          <button type="button" onclick="cal()" class="btn btn-default">Kết quả</button>
          

        </div>
      </div>   

    </div>
    <div class="col-md-6">
      <div class="form-group">
        <br>
        <p>
          <strong>BMI</strong> (Body mass Index) là chỉ số được tính từ chiều cao và cân nặng, là một chỉ số đáng tin cậy về sự mập ốm của một người.
        </p>
        <p>       
          BMI không đo lường trực tiếp mỡ của cơ thể nhưng các nghiên cứu đã chứng minh rằng BMI tương quan với đo mỡ trực tiếp. BMI là phương pháp không tốn kém và dễ thực hiện để tầm soát vấn đề sức khoẻ.
        </p>
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
      </div>
    </div>
  </div>
</div>
@endsection

<script type="text/javascript">
  function cal(){
    var height = document.getElementById('height').value;
    var weight = document.getElementById('weight').value;
    
    var temp = parseFloat((weight*1)/(height/100)/(height/100)).toFixed(2);
    if(temp < 18.5)
      document.getElementById('result').innerHTML = temp + "  Bạn bị thiếu cân";
    else
      if(temp >= 18.5 && temp <= 22.99)
      document.getElementById('result').innerHTML = temp + "  Bạn bình thường";
      else
        if(temp >= 23 && temp <= 24.9)
          document.getElementById('result').innerHTML = temp + "  Tiền béo phì";
        else
          if (temp >= 25 && temp <= 29.9)
            document.getElementById('result').innerHTML = temp + "  Béo phì cấp độ I";
          else
            if(temp >= 30 && temp < 40)
              document.getElementById('result').innerHTML = temp + "  Béo phì cấp độ II";
            else
              document.getElementById('result').innerHTML = temp + "  Béo phì cấp độ III";
  }
</script>