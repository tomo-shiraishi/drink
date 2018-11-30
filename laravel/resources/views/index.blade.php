<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body {
                background-color: #FAFAFA;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /* height: 100vh; */
                margin: 0 30px 0;
            }
            h1 {
              text-align: center;
            }
            .box-list {
              display: flex;
              padding: 0;
              list-style: none;
              justify-content: space-between;
              flex-flow: row wrap;

            }
            .box-list label {
              flex: 0 0 19%;
              border: 1px solid #ccc;
              border-radius: 10px;
              position: relative;
              /* margin-bottom: 10px; */
            }
            label {
              width: 100%;
              height: 100%;
              border-radius: 10px;
            }
            label > div {
              text-align: center;
              padding-top: 15px;
            }
            label > h2, p {
              text-align: center;
            }
            img {
              border-radius: 10px;
            }
            a {
              display: block;
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }
            input {
              display: none;
            }
            label {
              display: block;
            }
            input {
              display: none;
            }
            input[type=checkbox]:checked + label {
              background-color: red;
            }
            .filled {
              background: #C0BDBD;
            }
            .input, .btn {
              text-align: center;
              margin: 0;
            }
            .field {
              margin-top: 20px;
              resize: none;
              border-radius: 10px;
              border: 1px solid #ccc;
              width: 30%;
              height: 100px;
            }
            button {
              background-color: #C0BDBD;
              font-size: 20px;
              border-radius: 10px;
              border: 1px solid #ccc;
              padding: 10px 30px 10px;
              color: #636b6f;
            }
            .btn {

            }

        </style>
    </head>
    <body>
      <h1>Sample</h1>
      {!! Form::open(['url' => 'send', 'method' => 'POST']) !!}
        <div class="box-list">
          <label for="option[0]" class="filled">
            <input type="checkbox" name="option[0]" id="option[0]" onclick="chebg('option[0]')" value="tomohiro.shiraishi@leverages.jp">
            <div><img src="/assets/images/dummy.png"></div>
            <h2>Title</h2>
            <p>Description</p>
          </label>
          <label for="option[1]">
            <input type="checkbox" name="option[1]" id="option[1]" onclick="chebg('option[1]')" value="tomohiro.shirai@leverages.jp">
            <div><img src="/assets/images/dummy.png"></div>
            <h2>Title</h2>
            <p>Description</p>
          </label>
          <label for="option[2]">
            <input type="checkbox" name="option[2]" id="option[2]" onclick="chebg('option[2]')" value="tomohiro.shiraishi@leverages.jp">
            <div><img src="/assets/images/dummy.png"></div>
            <h2>Title</h2>
            <p>Description</p>
          </label>
          <label for="option[3]">
            <input type="checkbox" name="option[3]" id="option[3]" onclick="chebg('option[3]')" value="tomohiro.shiraishi@leverages.jp">
            <div><img src="/assets/images/dummy.png"></div>
            <h2>Title</h2>
            <p>Description</p>
          </label>
          <label for="option[4]">
            <input type="checkbox" name="option[4]" id="option[4]" onclick="chebg('option[4]')" value="tomohiro.shiraishi@leverages.jp">
            <div><img src="/assets/images/dummy.png"></div>
            <h2>Title</h2>
            <p>Description</p>
          </label>
        </div>
        <dl>
          <dd class="input">{{ Form::textarea('message', null, ['class' => 'field']) }}</dd>
        </dl>
        <div class="btn">
          <button class="submit">Send</button>
        </div>
      {!! Form::close() !!}
    </body>
</html>

<script>
  function chebg(chkID){//タグの背景色変更
    Myid=document.getElementById(chkID);
    if(Myid.checked == true){
      Myid.parentNode.style.boxShadow = '0 0 15px #1600E8';
    }else{
      Myid.parentNode.style.boxShadow = 'none';
    }
  }
</script>
