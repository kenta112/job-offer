プロフィール作成画面

<form action="{{route('mypage.store')}}" method="POST">
  <div>
    <lavel for="employment">雇用形態</lavel>
    <input id="employment" value="{{$profile->employment}}" type="text" name="employment" placeholder="例）フリーランス">
  </div>

<div>
    <lavel for="language">使用言語</lavel>
    <input id="language" type="text" value="{{$profile->language}}" name="language" placeholder="例）laravel">
  </div>

  <div>
    <lavel for="location">所在地</lavel>
    <input id="location" type="text" value="{{$profile->location}}" name="location" placeholder="例）長野県長野市">
  </div>

  <div>
    <lavel for="birthday">生年月日</lavel>
    <input id="birthday" type="number" value="{{$profile->birthday}}" name="birthday" placeholder="例）19940602">
  </div>

  <div>
    <lavel for="icon">アイコン</lavel>
    <input id="icon" type="text" name="icon" >
  </div>

  <div>
    <lavel for="image">イメージ画像</lavel>
    <input id="image" type="text" name="image" >
  </div>


  <div>
    <lavel for="appeal">アピールポイント</lavel>
    <textarea id="appeal" name="appeal" ></textarea>
  </div>

  <div>
    <lavel for="future">将来像</lavel>
    <textarea id="future" name="future" ></textarea>
  </div>

  <div>
  <input type="submit" value="送信">
  </div>
</form>