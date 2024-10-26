@extends('layouts.app')
@section('content')
<div id="hero">

    <h1>Sophia B. Photography</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio, vel suscipit lectus tincidunt id. Donec aliquet, tortor nec commodo, urna lectus tincidunt ante, ac dignissim risus libero at libero.</p>

    <p>Morbi in sem quis dui placerat ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In nec nisl eget felis gravida lacinia. Phasellus tincidunt mi non felis hendrerit, at pulvinar odio dictum.</p>

    <p>Suspendisse potenti. Aliquam erat volutpat. Vivamus at libero sed massa interdum scelerisque. Fusce posuere consequat odio, in gravida magna sagittis sed. Nulla facilisi. Integer nec elit vel ex efficitur cursus a at urna.</p>

    <p>Proin euismod, tortor vitae sollicitudin elementum, sapien justo malesuada ante, sed aliquet velit libero sit amet eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec suscipit, libero nec aliquam pharetra, ligula dui venenatis magna, in efficitur nulla nunc a velit.</p>

    <button onclick="{{route('photos.gallery')}}">View my Work</button>
</div>
    <div id ="showcase" class="">Showcase</div>
@endsection
