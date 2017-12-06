@extends('layouts.app')

@section('content')
<div class = "container">
  <!-- //Back to top -->
  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
  <!-- //Back to top -->

  <!-- //BMI -->
  <div class="w3layouts-breadcrumbs text-center">
    <div class="container">
      <span class="agile-breadcrumbs"><a href="/">Trang Chủ</a>&gt;<span>Tính BMI</span></span>
    </div>
  </div>
  <!-- //header BMI -->

  <div class="w3l-main-contact">
    <div class="container">
      <div class="col-md-6">
        <div class="widget-area no-padding blank">
          <div class="status-upload">
            <form>
              <div class="col-md-12">
                <div class="text-left bmi"><h4>Chiều cao:</h4></div><br>
                <input type="text" placeholder="cm" name="txt_h" id="height"><br><br>
              </div>
              <div class="col-md-12">
                <div class="text-left bmi"><h4><br>Cân nặng:</h4></div>
                <input type="text" placeholder="kg" name="txt_w" id="weight"><br><br>
              </div>
              <div class="col-md-12" method="POST">
                <button type="button" onclick="calculate()" class="btn btn-primary">Kết quả</button>


              </div>
              <p id="result"> </p>
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
</div>


@endsection

<script type="text/javascript">

  function BMI(height, weight) {
    var bmi = weight/(height*height);

    if (bmi < 18.5) {
      return -1;
    }
    if (bmi < 23) {
      return 0;
    }
    if (bmi < 25) {
      return 1;
    }
    if (bmi < 30) {
      return 2;
    }
    if (bmi < 40) {
      return 3;
    }
    return 4;
  }

  function calculate() {
    var height = $('#height').val();
    var weight = $('#weight').val();
    var result = 'BMI: ';

    height = parseFloat(height) / 100;
    weight = parseFloat(weight);

    var bmi = BMI(height, weight);

    switch(bmi) {
      case -1:
      result += 'Bạn bị thiếu cân.';
      break;
      case 0:
      result += 'Bạn bình thường.';
      break;
      case 1:
      result += 'Tiền béo phì.';
      break;
      case 2:
      result += 'Béo phì cấp độ I.';
      break;
      case 3:
      result += 'Béo phì cấp độ II.';
      break;
      case 4:
      result += 'Béo phì cấp độ III.';
      break;
    }    

    var change = 0;
    if (bmi < 0) {
      while (BMI(height, weight + ++change) < 0);
      result += " Bạn cần tăng " + change + " cân";
    }

    if (bmi > 0) {
      while (BMI(height, weight - ++change) > 0);
      result += " Bạn cần giảm " + change + " cân";
    }

    $('#result').html(result);
  }
</script>
