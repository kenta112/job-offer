<img src="{{ $profile->icon }}" alt="">

<h3>氏名：{{ $user->name }}さん</h3>
<p>メールアドレス：{{ $user->email }}</p>



<p>生年月日：{{ $profile->birthday }}</p>
<p>使用言語：{{ $profile->language }}</p>
<p>希望する雇用形態：{{ $profile->employment }}</p>
<p>所在地：{{ $profile->location }}</p>

<img src="{{ $profile->image }}" alt="">

<p>アピールポイント：{{ $profile->appeal }}</p>
<p>将来像：{{ $profile->future }}</p>


