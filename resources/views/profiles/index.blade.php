@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
        <img src="https://yt3.ggpht.com/a/AGF-l7_sGUrG_alh-mdTIDmdcaw1GanuPL2PxVajjQ=s48-c-k-c0xffffffff-no-rj-mo" class="rounded-circle">
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
        <a href="#">Add new post</a>
      </div>
      <div class="d-flex">
        <div class="pr-5"><strong>153</strong> posts</div>
        <div class="pr-5"><strong>22k</strong> followers</div>
        <div class="pr-5"><strong>212 </strong> following</div>
      </div>
      <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
      <div>{{ $user->profile->description }}</div>
      <a href="#"><strong>{{ $user->profile->url }}</strong></a>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-4"><img src="https://img.freepik.com/fotos-gratis/gotas-de-oleo-na-imagem-abstrata-padrao-psicodelico-de-agua_23-2148290141.jpg?size=626&ext=jpg" class="w-100"></div>
    <div class="col-4"><img src="https://img.freepik.com/fotos-gratis/gotas-de-oleo-na-imagem-abstrata-padrao-psicodelico-de-agua_23-2148290141.jpg?size=626&ext=jpg" class="w-100"></div>
    <div class="col-4"><img src="https://img.freepik.com/fotos-gratis/gotas-de-oleo-na-imagem-abstrata-padrao-psicodelico-de-agua_23-2148290141.jpg?size=626&ext=jpg" class="w-100"></div>
  </div>
</div>
@endsection
